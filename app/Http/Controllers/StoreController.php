<?php

namespace App\Http\Controllers;

use App\Models\Product_Detail;
use App\Models\Product_Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function index() {
        $product_store_1 = Product::where('products.brand_id', '=', '1')
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->inRandomOrder()->limit('5')->get();
        $product_store_2 = Product::where('products.brand_id', '=', '2')
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->inRandomOrder()->limit('5')->get();
        $product_store_3 = Product::where('products.brand_id', '=', '3')
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->inRandomOrder()->limit('5')->get();
        $product_store_4 = Product::where('products.brand_id', '=', '4')
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->inRandomOrder()->limit('5')->get();
        return view('storePage.index', compact('product_store_1', 'product_store_2'))->with(compact('product_store_3', 'product_store_4'));
    }

    public function contact() {
        return view('storePage.contact');
    }

    public function introduce() {
        return view('storePage.introduce');
    }

    public function shopping_guide() {
        return view('storePage.shopping_guide');
    }

    public function adidas() {
        $adidas = Product::where('products.brand_id', '=', '3')
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->orderBy('product_detail.size', 'ASC')
            ->paginate(16);
        Paginator::useBootstrap();
        return view("storePage.Product.Adidas", compact('adidas'))->with('i', (request()->input('page', 1) -1) *10);
    }

    public function balenciaga() {
        $balenciaga = Product::where('products.brand_id', '=', '1')
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->orderBy('product_detail.size', 'ASC')
            ->paginate(16);
        Paginator::useBootstrap();
        return view("storePage.Product.Balenciaga", compact('balenciaga'))->with('i', (request()->input('page', 1) -1) *10);
    }

    public function converse() {
        $converse = Product::where('products.brand_id', '=', '4')
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->orderBy('product_detail.size', 'ASC')
            ->paginate(16);
        Paginator::useBootstrap();
        return view("storePage.Product.Converse", compact('converse'))->with('i', (request()->input('page', 1) -1) *10);
    }

    public function nike() {
        $nike = Product::where('products.brand_id', '=', '2')
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->orderBy('product_detail.size', 'ASC')
            ->paginate(16);
        Paginator::useBootstrap();
        return view("storePage.Product.Nike", compact('nike'))->with('i', (request()->input('page', 1) -1) *10);
    }

    public function puma() {
        $puma = Product::where('products.brand_id', '=', '6')
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->orderBy('product_detail.size', 'ASC')
            ->paginate(16);
        Paginator::useBootstrap();
        return view("storePage.Product.Puma", compact('puma'))->with('i', (request()->input('page', 1) -1) *10);
    }

    public function vans() {
        $vans = Product::where('products.brand_id', '=', '5')
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->orderBy('product_detail.size', 'ASC')
            ->paginate(16);
        return view("storePage.Product.Vans", compact('vans'))->with('i', (request()->input('page', 1) -1) *10);
    }

    public function all_products() {
        $all_products = Product::join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->orderBy('product_detail.size', 'ASC')
            ->paginate(16);
        Paginator::useBootstrap();
        return view('storePage.Product.all_products', compact('all_products'))->with('i', (request()->input('page', 1) -1) *10);
    }

    public function search_products() {
        if (isset($_GET['keywords'])) {
            Paginator::useBootstrap();
            $search_text = $_GET['keywords'];
            $all_products = Product::where('product_name', 'LIKE', "%$search_text%")
                ->join("brands", "products.brand_id", "=", "brands.brand_id")
                ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
                ->where('product_detail.size', '=', '38')
                ->orderBy('product_detail.size', 'ASC')
                ->paginate(16);
            Paginator::useBootstrap();
            return view('storePage.Product.all_products', compact('all_products'))->with('i', (request()->input('page', 1) - 1) * 10);
        }
    }

    public function view_product_detail($product_id) {
        $product_detail = Product::where("products.product_id", "=", $product_id)
            ->join('brands', "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->get(['brands.brand_name', 'products.product_id', 'products.product_name', 'products.price', 'product_detail.product_detail_id',
                'product_detail.image', 'product_detail.description', 'product_detail.quantity', 'product_detail.size']);
        $product_size = Product_Detail::where("product_detail.product_id", "=", $product_id)
            ->join('products', 'products.product_id', '=', 'product_detail.product_id')->get(['product_detail.product_detail_id','product_detail.product_id', 'product_detail.size']);
        return view('storePage.Product.view_product_detail', compact('product_detail', 'product_size'));
    }

    public function add_to_cart(Request $request) {
        $product_id = $request->product_id;
        $product_detail_id = $request->product_detail_id;
        $size = $request->size;
        $quantity = $request->quantity;
        $product = Product_Detail::join('products', 'product_detail.product_id', '=', 'products.product_id')
            ->where('product_detail.product_detail_id', '=' , $product_detail_id)
            ->where('products.product_id', '=' , $product_id)
            ->findOrFail($product_detail_id);
        $shopping_cart = session()->get('shopping_cart', []);

        if (isset($shopping_cart[$product_detail_id])) {
            $shopping_cart[$product_detail_id]['quantity']++;
        }

        else {
            $shopping_cart[$product_detail_id] = [
                'product_id' => $product->product_id,
                'product_detail_id' => $product->product_detail_id,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'size' => $size,
                'image' => $product->image,
                'quantity' => $quantity
            ];
        }
        session()->put('shopping_cart', $shopping_cart);
        return redirect()->back()->with('success', 'Product has been added to shopping cart.');
    }

    public function remove_from_cart(Request $request) {
        if ($request->product_id) {
            $shopping_cart = session()->get('shopping_cart');
            if (isset($shopping_cart[$request->product_id])) {
                unset($shopping_cart[$request->product_id]);
                session()->put('shopping_cart', $shopping_cart);
            }
            session()->flash('success', 'Product has been removed.');
        }
    }

    public function update_cart(Request $request) {
        if ($request->product_id && $request->quantity) {
            $shopping_cart = session()->get('shopping_cart');
            $shopping_cart[$request->product_id]["quantity"] = $request->quantity;
            session()->put('shopping_cart', $shopping_cart);
            session()->flash('success', 'Product quantity has been updated.');
        }
    }

    public function product_price_ascending() {
        $ascending = Product::join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->orderBy('products.price', 'ASC')
            ->paginate(16);
        Paginator::useBootstrap();
        return view('storePage.Product.price_ascending', compact('ascending'))->with('i', (request()->input('page', 1) -1) *10);
    }

    public function product_price_descending() {
        $descending = Product::join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join('product_detail', 'products.product_id', '=', 'product_detail.product_id')
            ->where('product_detail.size', '=', '38')
            ->orderBy('products.price', 'DESC')
            ->paginate(16);
        Paginator::useBootstrap();
        return view('storePage.Product.price_descending', compact('descending'))->with('i', (request()->input('page', 1) -1) *10);
    }

    public function checkout() {
        $shopping_cart = session()->get('shopping_cart', []);
//        dd($shopping_cart);
        $display_customer = Customer::where('customer_id' ,'=', session('customer_id'))->get();
        if (empty($shopping_cart)) {
            return back()->with('notification', 'Your cart is empty.');
        }
        return view('storePage.Shopping_Cart.checkout', compact('display_customer'));
    }

    public function checkout_process(Request $request) {
            $customer_id = session('customer_id');
            $payment_id = $request->payment_id;
            $order_date = now();
            $create_product_order = DB::table('product_order')->insert([
                'order_date' => $order_date,
                'status' => 'Pending',
                'user_id' => NULL,
                'customer_id' => $customer_id,
                'payment_id' => $payment_id,
                'shipping_id' => NULL,
                'created_at' => now()
            ]);

            $shopping_cart = session()->get('shopping_cart', []);
            if (empty($shopping_cart)) {
                return redirect('/storeIndex/checkout')->with('notification', 'Your cart is empty.');
            }
            if ($create_product_order) {
                $select_order = Product_Order::where('customer_id', '=', $customer_id)->orderBy('order_id', 'desc')->first();
                    foreach ($shopping_cart as $recordData) {
                        DB::table('order_detail')->insert([
                            'order_id' => $select_order->order_id,
                            'product_id' => $recordData['product_id'],
                            'product_name' => $recordData['product_name'],
                            'price' => $recordData['price'],
                            'size' => $recordData['size'],
                            'quantity' => $recordData['quantity']
                        ]);
                session()->forget('shopping_cart');
                    }
            }
            return redirect('storeIndex/order_history')->with('notification', 'New order has been checked out successfully!');
        }

    public function order_history() {
        $order_history = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('storePage.Order_History.order_history', compact('order_history'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function order_history_pending() {
        $order_history = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Pending')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('storePage.Order_History.order_history', compact('order_history'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function order_history_confirmed() {
        $order_history = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Confirmed')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('storePage.Order_History.order_history', compact('order_history'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function order_history_shipping() {
        $order_history = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Shipping')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('storePage.Order_History.order_history', compact('order_history'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function order_history_success() {
        $order_history = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Success')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('storePage.Order_History.order_history', compact('order_history'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function order_history_canceled() {
        $order_history = Product_Order::select(['product_order.order_id', 'product_order.order_date', 'customers.customer_name', 'product_order.status'])->distinct()
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->where('product_order.status', '=', 'Canceled')
            ->orderBy("product_order.order_id", "desc")
            ->paginate(10);
        Paginator::useBootstrap();
        return view('storePage.Order_History.order_history', compact('order_history'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function cancel_order($order_id) {
        $orders = Product_Order::find($order_id);
        $customer_id = $orders->customer_id;
        // if ($customer_id != Auth::user()->order_id)  
        // {
        //     return redirect('/storeIndex');
        // }
        if ($orders->status == 'Confirmed')
        {
            return redirect('/storeIndex/order_history')->with('notification', 'Order has already been confirmed!');
        }
        $orders->status = 'Canceled';
        $orders->save();

        // DB::table('product_order')->where('product_order.order_id', '=', $order_id)->update(['status' => 'Canceled']);
        return redirect('/storeIndex/order_history')->with('notification', 'Order Has Been Canceled Successfully!');
    }

    public function view_order_detail($order_id) {
        $product_order_detail = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("users", "product_order.user_id", "=", "users.user_id")
            ->join("shipping_unit", "product_order.shipping_id", "=", "shipping_unit.shipping_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->where('product_order.order_id', '=', $order_id)
            ->get();
        return view('storePage.Order_History.view_order_detail', compact('product_order_detail'));
    }

    public function view_pending_order($order_id) {
        $product_order_detail = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->where('product_order.order_id', '=', $order_id)->get();
        return view('storePage.Order_History.view_pending_order', compact('product_order_detail'));
    }

    public function view_canceled_order($order_id) {
        $product_order_detail = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
            ->join("customers", "product_order.customer_id", "=", "customers.customer_id")
            ->join("payment_method", "product_order.payment_id", "=", "payment_method.payment_id")
            ->where('product_order.order_id', '=', $order_id)->get();
        return view('storePage.Order_History.view_canceled_order', compact('product_order_detail'));
    }
}
