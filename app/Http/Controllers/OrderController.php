<?php

namespace App\Http\Controllers;

use App\Models\Product_Order;
use App\Models\Shipping_Unit;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product_order = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('adminPage.orderManagement.order_management', compact('product_order'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function view_order($order_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product_order_detail = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("users", "product_order.user_id", "=", "users.user_id")
            ->join("shipping_unit", "product_order.shipping_id", "=", "shipping_unit.shipping_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->where('product_order.order_id', '=', $order_id)->get();
        return view('adminPage.orderManagement.view_order_detail', compact('product_order_detail'));
    }

    public function view_pending_order($order_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product_order_detail = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->where('product_order.order_id', '=', $order_id)->get();
        return view('adminPage.orderManagement.view_pending_order', compact('product_order_detail'));
    }

    public function view_canceled_order($order_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product_order_detail = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->where('product_order.order_id', '=', $order_id)->get();
        return view('adminPage.orderManagement.view_canceled_order', compact('product_order_detail'));
    }

    public function confirm_order($order_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $confirm_order = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
//            ->join("users", "product_order.user_id", "=", "users.user_id")
//            ->join("shipping_unit", "product_order.shipping_id", "=", "shipping_unit.shipping_id")
            ->where('product_order.order_id', '=', $order_id)
            ->find($order_id);
        $shipping_unit = Shipping_Unit::all();
        $admin = User::where('user_id', '=', session('user_id'))->get();
        return view('adminPage.orderManagement.confirm_order', compact(['confirm_order', 'shipping_unit', 'admin']));
    }

    public function confirm_order_process(Request $request, $order_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $status = $request->status;
        $user_id = $request->user_id;
        $customer_id = $request->customer_id;
        $payment_id = $request->payment_id;
        $shipping_id = $request->shipping_id;
        DB::table('product_order')->where("order_id", "=", "$order_id")->update([
            'status' => $status,
            'user_id' => $user_id,
            'customer_id' => $customer_id,
            'payment_id' => $payment_id,
            'shipping_id' => $shipping_id
        ]);
        return redirect('/admin/order_management')->with('notification', 'Order has been confirmed successfully!');
    }

    public function cancel_order($order_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        DB::table('product_order')->where("order_id", "=", "$order_id")->update([
           'status' => 'Canceled'
        ]);
        return back()->with('notification', 'Order has been canceled successfully!');
    }

    public function order_pending() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product_order = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Pending')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('adminPage.orderManagement.order_management', compact('product_order'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function order_confirmed() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product_order = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Confirmed')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('adminPage.orderManagement.order_management', compact('product_order'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function order_shipping() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product_order = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Shipping')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('adminPage.orderManagement.order_management', compact('product_order'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function order_success() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product_order = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Success')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('adminPage.orderManagement.order_management', compact('product_order'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function order_canceled() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product_order = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Canceled')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('adminPage.orderManagement.order_management', compact('product_order'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
