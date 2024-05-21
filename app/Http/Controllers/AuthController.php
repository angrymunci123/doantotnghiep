<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Product_Order;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function loginAdmin() {
        if (Auth::check()) {
            $product_order = Product_Order::join("customers", "product_order.customer_id", "=", "customers.customer_id")
                ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
                ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
                ->orderBy("product_order.order_id", "desc")
                ->paginate(5);
            Paginator::useBootstrap();
            return view('adminPage.orderManagement.order_management', compact('product_order'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        return view('adminAuth.login');
    }

    // public function login_adminProcess(Request $request) {
    //     $credentials = $request->only('email', 'password');

    //     $check = Auth::attempt($credentials);

    //     if ($check) {
    //         $email_account = User::where('email','=',$request->email)->first();
    //         $request->session()->put('user_id', $email_account->user_id);
    //         $request->session()->put('full_name', $email_account->full_name);
    //         $request->session()->put('password', $email_account->password);
    //         $request->session()->put('position', $email_account->position);

    //         $product_order = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])
    //             ->distinct()
    //             ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
    //             ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
    //             ->orderBy("product_order.order_id", "desc")
    //             ->paginate(10);
    //         Paginator::useBootstrap();
    //         return view('adminPage.revenue.order_management', compact('product_order'))
    //             ->with('i', (request()->input('page', 1) - 1) * 10);
    //     }
    //     return redirect('login')->with('fail','Invalid email address or password.');
    // }

    public function login_adminProcess(Request $request) {
        $credentials = $request->only('email', 'password');

        $check = Auth::attempt($credentials);

        if ($check) {
            $email_account = User::where('email','=',$request->email)->first();
            $request->session()->put('user_id', $email_account->user_id);
            $request->session()->put('full_name', $email_account->full_name);
            $request->session()->put('password', $email_account->password);
            $request->session()->put('position', $email_account->position);

            $total_products = Product::count();
            $total_brands = Brand::count();

            $total_order = Product_Order::count();

            $today_date = Carbon::now()->format('Y-m-d');
            $this_month = Carbon::now()->format('m');
            $this_year = Carbon::now()->format('Y');

            $today_orders = Product_Order::whereDate('created_at', $today_date)->count();
            $month_orders = Product_Order::whereMonth('created_at', $this_month)->count();
            $year_orders = Product_Order::whereYear('created_at', $this_year)->count();
            $units_sold = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
                        ->where('status', '=', 'Success')->count();
                    
            $total_order_detail = Order_Detail::count();
                // $this_month = Carbon::now()->format('m');
            $month_chart = Product_Order::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();
            $labels = [];
            $data = [];
            $colors = ['#FF6384', '#36A2EB', '#FFCE56', '#8BC34A', '#FF5722', '#009688', '#795548', '#9C27B0', '#2196F3', '#FF9800', '#CDDC39', '#607D8B'];
            for ($i = 1; $i < 12; $i++) {
                $month = date('F', mktime(0,0,0,$i,1));
                $count = 0;

                foreach($month_chart as $current_month) {
                if ($current_month->month == $i) {
                    $count = $current_month->count;
                    break;
                }
                }

                array_push($labels, $month);
                array_push($data, $count);
         }

         $datasets = [
            [
               'label' => 'Product_Order',
               'data' => $data,
               'backgroundColor' => $colors
            ]
         ];
        }
            return view('adminPage.revenue', compact('labels','datasets','total_products', 'total_brands', 'total_order', 'today_orders', 'month_orders', 'year_orders', 'units_sold'));
        return redirect('login')->with('fail','Invalid email address or password.');
    }

    public function logoutAdmin(Request $request) {
        Auth::logout();
        $request->session()->forget('user_id');
        $request->session()->forget('full_name');
        $request->session()->forget('position');
        $request->session()->forget('password');
        return view("adminAuth.login");
    }

    public function logoutAdmin_Store(Request $request) {
        Auth::logout();
        $request->session()->forget('user_id');
        $request->session()->forget('full_name');
        $request->session()->forget('position');
        $request->session()->forget('password');
        return redirect("/storeIndex");
    }
}
