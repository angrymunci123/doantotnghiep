<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $brand = Brand::paginate(10);
        Paginator::useBootstrap();
        return view('adminPage.brandManagement.brand_management', compact('brand'))->with('i', (request()->input('page', 1) -1) *5);
    }

    public function addBrand() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        return view("adminPage.brandManagement.create");
    }

    public function saveBrand(Request $request) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $brand_name = $request->brand_name;
        $date_founded = $request->date_founded;
        $country = $request->country;
        $phone_number = $request->phone_number;
        $email = $request->email;
        DB::table('brands')->insert([
            'brand_name' => $brand_name,
            'date_founded' => $date_founded,
            'country' => $country,
            'phone_number' => $phone_number,
            'email' => $email,
        ]);
        return redirect("/admin/brand_management")->with('notification', 'Add New Brand Successfully!');;
    }

    public function editBrand($brand_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $brand = Brand::find($brand_id);
        return view('adminPage.brandManagement.edit', compact('brand'));
    }

    public function updateBrand(Request $request, $brand_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $brand_name = $request->brand_name;
        $date_founded = $request->date_founded;
        $country = $request->country;
        $phone_number = $request->phone_number;
        $email = $request->email;
        DB::table('brands')->where("brand_id", "=", "$brand_id")->update([
            'brand_name' => $brand_name,
            'date_founded' => $date_founded,
            'country' => $country,
            'phone_number' => $phone_number,
            'email' => $email,
        ]);
        return redirect('/admin/brand_management')->with('notification', 'Update Brand Successfully!');
    }

    public function deleteBrand($brand_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $brand = Brand::findOrFail($brand_id);
        $brand->delete();
        return redirect('/admin/brand_management')->with('notification', 'Delete Brand Successfully!');
    }
}
