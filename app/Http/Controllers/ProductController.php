<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Brand;
use App\Models\Product_Detail;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        if (!Auth::check())
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        return view('adminPage.home');
    }


    public function productManagement() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $inner_join = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', '38')
            ->orderBy("products.product_id", "desc")
            ->paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.productManagement.product_management', compact('inner_join'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function adidas() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $inner_join = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', '38')
            ->where('brands.brand_name', '=', 'Adidas')
            ->orderBy("products.product_id", "desc")
            ->paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.productManagement.product_management', compact('inner_join'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function balenciaga() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $inner_join = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', '38')
            ->where('brands.brand_name', '=', 'Balenciaga')
            ->orderBy("products.product_id", "desc")
            ->paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.productManagement.product_management', compact('inner_join'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function converse() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $inner_join = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', '38')
            ->where('brands.brand_name', '=', 'Converse')
            ->orderBy("products.product_id", "desc")
            ->paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.productManagement.product_management', compact('inner_join'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function nike() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $inner_join = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', '38')
            ->where('brands.brand_name', '=', 'Nike')
            ->orderBy("products.product_id", "desc")
            ->paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.productManagement.product_management', compact('inner_join'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function puma() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $inner_join = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', '38')
            ->where('brands.brand_name', '=', 'Puma')
            ->orderBy("products.product_id", "desc")
            ->paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.productManagement.product_management', compact('inner_join'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function vans() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $inner_join = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', '38')
            ->where('brands.brand_name', '=', 'Vans')
            ->orderBy("products.product_id", "desc")
            ->paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.productManagement.product_management', compact('inner_join'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function price_asc() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $inner_join = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', '38')
            ->orderBy("products.price", "asc")
            ->paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.productManagement.product_management', compact('inner_join'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function price_desc() {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $inner_join = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', '38')
            ->orderBy("products.price", "desc")
            ->paginate(5);
        Paginator::useBootstrap();
        return view('adminPage.productManagement.product_management', compact('inner_join'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function addProduct()
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $brand = Brand::all();
        $warehouse = Warehouse::all();
        return view('adminPage.productManagement.create')->with("brand", $brand)->with("warehouse", $warehouse);
    }

    public function saveProduct(Request $request)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        $brand = $request->brand_id;
        $warehouse = $request->warehouse_id;
        $productName = $request->product_name;
        $price = $request->price;
        DB::table('products')->insert([
            'brand_id' => $brand,
            'warehouse_id' => $warehouse,
            'product_name' => $productName,
            'price' => $price,
        ]);
        return redirect('/admin/product_management')->with('notification', 'Add New Product Successfully!');
    }

    public function addProduct_Detail()
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $product = Product::orderBy('products.product_id', "ASC")->get(['product_id', 'product_name']);
        return view('adminPage.productManagement.productDetail.create', compact('product'));
    }

    public function saveProduct_Detail(Request $request)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        $product_id = $request->product_id;
        $size = $request->size;
        $quantity = $request->quantity;
        $image = time().$request->image->getClientOriginalName();
        $request->image->move(public_path('image'), $image);
        $description = $request->description;
        DB::table('product_detail')->insert([
            'product_id' => $product_id,
            'size' => $size,
            'quantity' => $quantity,
            'image' => $image,
            'description' => $description
        ]);
        return redirect('/admin/product_management')->with('notification', 'Add New Product Successfully!');
    }

    public function editProduct($product_id)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        $product = Product::where('product_id', '=', $product_id)->first();
        $brand = Brand::all();
        $warehouse = Warehouse::all();
        return view('adminPage.productManagement.edit', compact('product', 'brand', 'warehouse'));
    }

    public function editProduct_Detail($product_detail_id)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        $product = Product_Detail::join('products', 'products.product_id', '=', 'product_detail.product_id')
            ->findOrFail($product_detail_id);
        return view('adminPage.productManagement.productDetail.edit', compact('product'));
    }

    public function updateProduct(Request $request, $product_id)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        $brand = $request->brand_id;
        $warehouse = $request->warehouse_id;
        $productName = $request->product_name;
        $price = $request->price;
        DB::table('products')->where("product_id", "=", "$product_id")->update([
            'brand_id' => $brand,
            'warehouse_id' => $warehouse,
            'product_name' => $productName,
            'price' => $price
        ]);
        return redirect('/admin/product_management')->with('notification', 'Update Product Successfully!');
    }

    public function updateProduct_Detail(Request $request, $product_detail_id)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        $product_id = $request->product_id;
        $size = $request->size;
        $quantity = $request->quantity;
        $image = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('image'), $image);
        $description = $request->description;
        DB::table('product_detail')->where("product_detail_id", "=", "$product_detail_id")->update([
            'product_id' => $product_id,
            'size' => $size,
            'quantity' => $quantity,
            'image' => $image,
            'description' => $description
        ]);
        return redirect('admin/product_management')->with('notification', 'Update Product Detail Successfully!');
    }

    public function deleteProduct($product_id)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        $product = Product::findOrFail($product_id);
        $product->delete();
        return redirect('/admin/product_management')->with('notification', 'Delete Product Successfully!');
    }

    public function deleteProduct_Detail($product_detail_id)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }

        $product = Product_Detail::findOrFail($product_detail_id);
        $product->delete();
        return redirect('/admin/product_management')->with('notification', 'Delete Product Detail Successfully!');
    }

    public function viewProduct(Request $request, $product_id)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $prd_size = $request->size;
        $product_detail = Product::where("products.product_id", "=", $product_id)
            ->join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.size', '=', $prd_size)
            ->get(['brands.brand_name', 'warehouses.product_source', 'products.product_id', 'products.product_name',
                'products.price', 'product_detail.size', 'product_detail.quantity', 'product_detail.image',
                'product_detail.product_detail_id', 'product_detail.description']);
        $product_size = Product_Detail::where("product_detail.product_id", "=", $product_id)
            ->join('products', 'products.product_id', '=', 'product_detail.product_id')->get(['product_detail.product_detail_id','product_detail.product_id', 'product_detail.size']);
        return view('adminPage.productManagement.view_product', compact('product_detail', 'product_size'));
    }

    public function viewProduct_with_size(Request $request, $product_id)
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        $prd_detail_id = $request->product_detail_id;
        $prd_size = $request->size;
        $product_detail = Product::join("product_detail", "products.product_id", "=", "product_detail.product_id")
            ->join("brands", "products.brand_id", "=", "brands.brand_id")
            ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
            ->where('product_detail.product_detail_id', '=', $prd_detail_id)
            ->where('product_detail.size', '=', $prd_size)
            ->get(['brands.brand_name', 'warehouses.product_source', 'products.product_id', 'products.product_name',
                'products.price', 'product_detail.size', 'product_detail.quantity', 'product_detail.image',
                'product_detail.product_detail_id', 'product_detail.description']);
        $product_size = Product_Detail::join('products', 'product_detail.product_id', '=', 'products.product_id')
            ->where("product_detail.product_id", "=", $product_id)
            ->get(['product_detail.product_detail_id','product_detail.product_id', 'product_detail.size']);
        return view('adminPage.productManagement.productDetail.view_product_detail', compact('product_detail','product_size'));
    }

    public function searchProduct()
    {
        if (!Auth::check())
        {
            return view('adminAuth.login');
        }
        if (isset($_GET['keywords'])) {
            $search_text = $_GET['keywords'];
            $search_product = Product::where('product_name', 'LIKE', "%$search_text%")
                ->join("product_detail", "products.product_id", "=", "product_detail.product_id")
                ->join("brands", "products.brand_id", "=", "brands.brand_id")
                ->join("warehouses", "products.warehouse_id", "=", "warehouses.warehouse_id")
                ->where('product_detail.size', '=', '38')
                ->orderBy("products.product_id", "desc")
                ->paginate(5);
            Paginator::useBootstrap();
            return view('adminPage.Search.search_product', compact('search_product'), ['keywords' => $search_product])->with('i', (request()->input('page', 1) - 1) * 5);
        }
        else {
            return view('adminPage.Search.search_product');
        }
    }
}
