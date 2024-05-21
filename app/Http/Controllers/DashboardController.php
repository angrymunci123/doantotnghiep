<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Product_Order;
use Carbon\Carbon;

class DashboardController extends Controller
{
   public function index() 
   {
    $total_products = Product::count();
    $total_brands = Brand::count();

    $total_order = Product_Order::where('status', '=', 'Success')->count();
    dd($total_order);

    $today_date = Carbon::now()->format('Y-m-d');
    $this_month = Carbon::now()->format('m');
    $this_year = Carbon::now()->format('Y');

    $today_orders = Product_Order::whereDate('created_at', $today_date)->where('status', '=', 'Success')->count();
    $month_orders = Product_Order::whereMonth('created_at', $this_month)->where('status', '=', 'Success')->count();
    $year_orders = Product_Order::whereYear('created_at', $this_year)->where('status', '=', 'Success')->count();
    $units_sold = Product_Order::join("order_detail", "product_order.order_id", "=", "order_detail.order_id")
                ->where('status', '=', 'Success')->count();
    $total_order_detail = Order_Detail::count();

       $month_chart = Product_Order::selectRaw('MONTH(created_at) as month, CAST(COUNT(*) AS UNSIGNED) as count')
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
               'backgroundColor' => $colors,
               'dataType' => 'integer' 
            ]
         ];

      return view('adminPage.revenue', compact('labels','datasets','total_products', 'total_brands', 'total_order', 'today_orders', 'month_orders', 'year_orders', 'units_sold'));

   }
}
