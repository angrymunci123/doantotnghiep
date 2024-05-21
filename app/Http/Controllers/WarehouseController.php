<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class WarehouseController extends Controller
{
    public function index() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $warehouse = Warehouse::paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.warehouseManagement.warehouse_management', compact('warehouse'))->with('i', (request()->input('page', 1) -1) *5);
    }

    public function addWarehouse() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        return view("adminPage.warehouseManagement.create");
    }

    public function saveWarehouse(Request $request) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $request_data = $request->all();
        warehouse::create($request_data);
        return redirect("/admin/warehouse_management")->with('notification', 'Add New warehouse Successfully!');;
    }

    public function editWarehouse($warehouse_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $warehouse = warehouse::find($warehouse_id);
        return view('adminPage.warehouseManagement.edit', compact('warehouse'));
    }

    public function updateWarehouse(Request $request, $warehouse_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $warehouse = warehouse::find($warehouse_id);
        $input = $request->all();
        $warehouse->update($input);
        return redirect('/admin/warehouse_management')->with('notification', 'Update warehouse Successfully!');
    }

    public function deleteWarehouse($warehouse_id) {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $warehouse = warehouse::findOrFail($warehouse_id);
        $warehouse->delete();
        return redirect('/admin/warehouse_management')->with('notification', 'Delete warehouse Successfully!');
    }
}
