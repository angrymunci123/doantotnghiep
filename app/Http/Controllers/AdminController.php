<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Product_Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index() {
        $product_store_1 = Product::where('products.brand_id', '=', '1')->limit('5')->get();
        $product_store_2 = Product::where('products.brand_id', '=', '2')->limit('5')->get();
        $product_store_3 = Product::where('products.brand_id', '=', '3')->limit('5')->get();
        $product_store_4 = Product::where('products.brand_id', '=', '4')->limit('5')->get();
        return view('adminPage.admin_store.admin_store_page', compact('product_store_1', 'product_store_2'))->with(compact('product_store_3', 'product_store_4'));
    }

    // public function viewStatistics() {
    //     if (!Auth::check())
    //     {
    //         return view('adminAuth.login');
    //     }
    //     return view("adminPage.home");
    // }

    public function admin_list() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $admin_list = User::paginate(10);
        Paginator::useBootstrap();
        return view("adminPage.adminList.admin_list", compact('admin_list'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function admin_info() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $admin_info = User::where("user_id", "=", session('user_id'))->get();
        return view("adminPage.admin_info.admin_info", compact('admin_info'));
    }

    public function other_admin_info($user_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $admin_info = User::where("user_id", "=", $user_id)->get();
        return view("adminPage.adminList.view_admin_info", compact('admin_info'));
    }

    public function add_admin() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        return view("adminPage.adminList.add_admin");
    }

    public function add_admin_process(Request $request) {
        $admin_name = $request->full_name;
        $email = $request->email;
        $password = Hash::make($request->password);
        $address = $request->address;
        $phone_number = $request->phone_number;
        $position = $request->position;
        DB::table('users')->insert([
            'full_name' => $admin_name,
            'email' => $email,
            'password' => $password,
            'phone_number' => $phone_number,
            'address' => $address,
            'position' => $position
        ]);
        return redirect('admin/admin_list')->with('notification', 'Add New Admin Successfully!');
    }

    public function edit_admin_profile($user_id) {
        $admin_info = User::find($user_id);
        return view('adminPage.admin_info.edit_admin_profile', compact('admin_info'));
    }

    public function edit_other_admin_profile($user_id) {
        $admin_info = User::find($user_id);
        return view('adminPage.adminList.edit_admin_info', compact('admin_info'));
    }

    public function update_other_admin_profile(Request $request, $user_id) {
        $customer_name = $request->full_name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $position = $request->position;
        DB::table('users')->where(["user_id" => $user_id])->update([
            'full_name' => $customer_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'address' => $address,
            'position' => $position
        ]);
        session()->put('customer_name', $customer_name);
        return redirect("/admin/admin_list")->with('notification', 'Update Profile Successfully!');
    }

    public function update_admin_profile(Request $request, $user_id) {
        $customer_name = $request->full_name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $position = $request->position;
        DB::table('users')->where(["user_id" => $user_id])->update([
            'full_name' => $customer_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'address' => $address,
            'position' => $position
        ]);
        session()->put('customer_name', $customer_name);
        return redirect("/admin/admin_info")->with('notification', 'Update Profile Successfully!');
    }

    public function change_password() {
        $admin_pass = User::where('user_id', '=', session('user_id'))->first();
        return view('adminPage.admin_info.admin_change_password',compact('admin_pass'));
    }

    public function update_password(Request $request) {
        $user_id = $request->user_id;
        $new_pass = $request->new_password;
        $confirm_pass = $request->confirm_new_password;
            if ($new_pass === $confirm_pass) {
                DB::table('users')->where(["user_id" => $user_id])->update([
                    'password' => Hash::make($confirm_pass)
                ]);
                session()->put('password', $confirm_pass);
                return redirect("/admin/admin_info")->with('notification', 'Update Password Successfully!');
            }
            else {
                return back()->with('notification', 'Incorrect new password or confirm new password! Please try again');
            }
    }

    public function delete_admin ($user_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        $admin = User::findOrFail($user_id);
        $admin->delete();
        return redirect('/admin/admin_list')->with('notification', 'Delete Admin Successfully!');
    }

    public function handleChart()
    {
        $total_products = Product::count();
        $total_brands = Brand::count();
    
        $total_order = Product_Order::where('status', '=', 'Success')->count();
    
        $today_date = Carbon::now()->format('Y-m-d');
        $this_month = Carbon::now()->format('m');
        $this_year = Carbon::now()->format('Y');
    
        $today_orders = Product_Order::whereDate('created_at', $today_date)->where('status', '=', 'Success')->count();
        $month_orders = Product_Order::whereMonth('created_at', $this_month)->where('status', '=', 'Success')->count();
        $year_orders = Product_Order::whereYear('created_at', $this_year)->where('status', '=', 'Success')->count();
        $units_sold = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
                    ->where('status', '=', 'Success')->count();
        $total_order_detail = Order_Detail::count();
            
            // $this_month = Carbon::now()->format('m');
        $month_chart = Product_Order::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
        ->whereYear('created_at', date('Y'))
        ->where('status', '=', 'Success')
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
               'label' => 'Number Of Orders',
               'data' => $data,
               'backgroundColor' => $colors,
            ]
         ];

      return view('adminPage.revenue', compact('labels','datasets','total_products', 'total_brands', 'total_order', 'today_orders', 'month_orders', 'year_orders', 'units_sold'));
        }

}
