<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//1. Admin login
Route::get('/login', [AuthController::class, "loginAdmin"])->name("loginAdmin");

Route::post('/login/login_adminProcess', [AuthController::class, "login_adminProcess"])->name("login_adminProcess");



//2. Admin Page
Route::get('/admin', [ProductController::class, "index"]);

Route::get('/admin/statistics', [AdminController::class, "handleChart"]);

Route::get('/admin/admin_info', [AdminController::class, "admin_info"])->name("admin_info");

Route::get('/admin/admin_list/view_admin_info/admin_id={user_id}', [AdminController::class, "other_admin_info"])->name("other_admin_info");

Route::get('/admin/edit_admin_info/admin_id={user_id}', [AdminController::class, "edit_admin_profile"])->name("edit_admin_profile");

Route::get('/admin/logoutProcess', [AuthController::class, "logoutAdmin"])->name("logoutAdmin");

Route::get('/admin/logoutProcess_Store', [AuthController::class, "logoutAdmin_Store"])->name("logoutAdmin_Store");



//Admin List
Route::get('/admin/admin_list', [AdminController::class, "admin_list"])->name("admin_list");

Route::get('/admin/admin_list/add_admin', [AdminController::class, "add_admin"])->name("add_admin");

Route::post('/admin/admin_list/add_admin_process', [AdminController::class, "add_admin_process"])->name("add_admin_process");



//Admin profile
Route::get('/admin/admin_info/edit_profile/admin_id={user_id}', [AdminController::class, "edit_admin_profile"])->name("edit_admin_profile");

Route::post('/admin/admin_info/update_profile/admin_id={user_id}', [AdminController::class, "update_admin_profile"])->name("update_admin_profile");

Route::get('/admin/admin_info/change_password', [AdminController::class, "change_password"])->name("change_password");

Route::post('/admin/admin_info/change_password_process', [AdminController::class, "update_password"]);

Route::get('/admin/user_statistics', [AdminController::class, "handleChart"]);


//Other Admin
Route::get('/admin/admin_list/edit_profile/admin_id={user_id}', [AdminController::class, "edit_other_admin_profile"])->name("edit_other_admin_profile");

Route::post('/admin/admin_list/update_profile/admin_id={user_id}', [AdminController::class, "update_other_admin_profile"])->name("update_other_admin_profile");

Route::post('/admin/admin_list/delete_admin/admin_id={user_id}', [AdminController::class, "delete_admin"])->name("delete_admin");



//Product Management
Route::get('/admin/product_management', [ProductController::class, "productManagement"]);

Route::get('/admin/product_management/adidas', [ProductController::class, "adidas"]);

Route::get('/admin/product_management/balenciaga', [ProductController::class, "balenciaga"]);

Route::get('/admin/product_management/converse', [ProductController::class, "converse"]);

Route::get('/admin/product_management/nike', [ProductController::class, "nike"]);

Route::get('/admin/product_management/puma', [ProductController::class, "puma"]);

Route::get('/admin/product_management/vans', [ProductController::class, "vans"]);

Route::get('/admin/product_management/price_asc', [ProductController::class, "price_asc"]);

Route::get('/admin/product_management/price_desc', [ProductController::class, "price_desc"]);

Route::get('/admin/product_management/add_product', [ProductController::class, "addProduct"])->name("addProduct");

Route::post('/admin/product_management/save_product', [ProductController::class, "saveProduct"])->name("saveProduct");

Route::get('/admin/product_management/edit_product/{product_id}', [ProductController::class, "editProduct"])->name("editProduct");

Route::get('/admin/product_management/edit_product_detail/{product_detail_id}', [ProductController::class, "editProduct_Detail"])->name("editProduct_Detail");

Route::post('/admin/product_management/update_product/{product_id}', [ProductController::class, "updateProduct"])->name("updateProduct");

Route::post('/admin/product_management/update_product_detail/{product_detail_id}', [ProductController::class, "updateProduct_Detail"])->name("updateProduct_Detail");

Route::post('/admin/product_management/delete_product/{product_id}', [ProductController::class, "deleteProduct"])->name("deleteProduct");

Route::get('/admin/product_management/view_product/product_id={product_id}/product_detail_id={product_detail_id}/size={size}', [ProductController::class, "viewProduct"])->name("viewProduct");

Route::get('/admin/product_management/view_product_detail/product_id={product_id}/product_detail_id={product_detail_id}/size={size}', [ProductController::class, "viewProduct_with_size"])->name("viewProduct_with_size");

Route::get('/admin/product_management/search_product', [ProductController::class, "searchProduct"])->name("searchProduct");

Route::get('/admin/product_management/add_product_detail', [ProductController::class, "addProduct_Detail"])->name("addProduct_Detail");

Route::post('/admin/product_management/save_product_detail', [ProductController::class, "saveProduct_Detail"])->name("saveProduct_Detail");

Route::post('/admin/product_management/delete_product_detail/product_detail_id={product_detail_id}', [ProductController::class, "deleteProduct_Detail"])->name("deleteProduct_Detail");




//Brand Management
Route::get('/admin/brand_management', [BrandController::class, "index"])->name("index");

Route::get('/admin/brand_management/add_brand', [BrandController::class, "addBrand"])->name("addBrand");

Route::post('/admin/brand_management/save_brand', [BrandController::class, "saveBrand"])->name("saveBrand");

Route::get('/admin/brand_management/edit_brand/{brand_id}', [BrandController::class, "editBrand"])->name("editBrand");

Route::post('/admin/brand_management/update_brand/{brand_id}', [BrandController::class, "updateBrand"])->name("updateBrand");

Route::post('/admin/brand_management/delete_brand/{brand_id}', [BrandController::class, "deleteBrand"])->name("deleteBrand");



//Warehouse Management
Route::get('/admin/warehouse_management', [WarehouseController::class, "index"])->name("index");

Route::get('/admin/warehouse_management/add_warehouse', [WarehouseController::class, "addWarehouse"])->name("addWarehouse");

Route::post('/admin/warehouse_management/save_warehouse', [WarehouseController::class, "saveWarehouse"])->name("saveWarehouse");

Route::get('/admin/warehouse_management/edit_warehouse/{warehouse_id}', [WarehouseController::class, "editWarehouse"])->name("editWarehouse");

Route::post('/admin/warehouse_management/update_warehouse/{warehouse_id}', [WarehouseController::class, "updateWarehouse"])->name("updateWarehouse");

Route::post('/admin/warehouse_management/delete_warehouse/{warehouse_id}', [WarehouseController::class, "deleteWarehouse"])->name("deleteWarehouse");



//Order Management
Route::get('/admin/order_management', [OrderController::class, "index"])->name("index");

Route::get('/admin/order_management/pending', [OrderController::class, "order_pending"])->name('order_pending');

Route::get('/admin/order_management/confirmed', [OrderController::class, "order_confirmed"])->name("order_confirmed");

Route::get('/admin/order_management/shipping', [OrderController::class, "order_shipping"])->name("order_shipping");

Route::get('/admin/order_management/success', [OrderController::class, "order_success"])->name("order_success");

Route::get('/admin/order_management/canceled', [OrderController::class, "order_canceled"])->name("order_canceled");

Route::get('/admin/order_management/view_order/order_id={order_id}', [OrderController::class, "view_order"])->name("view_order");

Route::get('/admin/order_management/view_pending_order/order_id={order_id}', [OrderController::class, "view_pending_order"])->name("view_pending_order");

Route::get('/admin/order_management/view_canceled_order/order_id={order_id}', [OrderController::class, "view_canceled_order"])->name("view_canceled_order");

Route::get('/admin/order_management/confirm_product/order_id={order_id}', [OrderController::class, "confirm_order"])->name("confirm_order");

Route::post('/admin/order_management/confirm_order_process/order_id={order_id}', [OrderController::class, "confirm_order_process"])->name("confirm_order_process");

Route::post('/admin/order_management/cancel_order/order_id={order_id}', [OrderController::class, "cancel_order"])->name("cancel_order");




//3. Store Page
Route::get('storeIndex', [StoreController::class, "index"])->name("index");

Route::get('/storeIndex/contact', [StoreController::class, "contact"])->name("contact");

Route::get('/storeIndex/introduce', [StoreController::class, "introduce"])->name("introduce");

Route::get('/storeIndex/shopping_guide', [StoreController::class, "shopping_guide"])->name("shopping_guide");



//login/register/logout
Route::get('/storeIndex/login', [CustomerController::class, "loginCustomer"])->name("loginCustomer");

Route::get('/storeIndex/register', [CustomerController::class, "register_customer"])->name("register_customer");

Route::post('/storeIndex/register_process', [CustomerController::class, "register_customer_process"])->name("register_customer_process");

Route::get('/storeIndex/logout', [CustomerController::class, "logout_customer"])->name("logout_customer");

Route::post('/storeIndex/login_customerProcess', [CustomerController::class, "login_customerProcess"])->name("login_customerProcess");



//Product Store
Route::get('/storeIndex/product/Balenciaga', [StoreController::class, "balenciaga"])->name("balenciaga");

Route::get('/storeIndex/product/Adidas', [StoreController::class, "adidas"])->name("adidas");

Route::get('/storeIndex/product/Converse', [StoreController::class, "converse"])->name("converse");

Route::get('/storeIndex/product/Nike', [StoreController::class, "nike"])->name("nike");

Route::get('/storeIndex/product/Puma', [StoreController::class, "puma"])->name("puma");

Route::get('/storeIndex/product/Vans', [StoreController::class, "vans"])->name("vans");

Route::get('/storeIndex/product', [StoreController::class, "all_products"])->name("all_products");



//Search Product
Route::get('/storeIndex/search_product', [StoreController::class, "search_products"])->name("search_products");



//View Product
Route::get('/storeIndex/product/view_product/product_id={product_id}/product_detail_id={product_detail_id}/size={size}', [StoreController::class, "view_product_detail"])->name("view_product_detail");



//Shopping cart
Route::get('/storeIndex/cart', function () {
    return view('storePage.Shopping_Cart.cart2');
});

Route::get('/storeIndex/add_to_cart', [StoreController::class, "add_to_cart"])->name("add_to_cart");

Route::post('/storeIndex/cart/remove_from_cart/{product_id}', [StoreController::class, "remove_from_cart"])->name("remove_from_cart");

Route::patch('/storeIndex/cart/update_cart', [StoreController::class, "update_cart"])->name("update_cart");

Route::get('/storeIndex/checkout', [StoreController::class, "checkout"])->name("checkout");

Route::post('/storeIndex/checkout_process', [StoreController::class, "checkout_process"])->name("checkout_process");

Route::get('/storeIndex/customer_profile', [CustomerController::class, "customer_profile"])->name('customer_profile');

Route::get('/storeIndex/customer_profile/edit_customer_profile', [CustomerController::class, "change_profile"])->name('change_profile');



//Filter by price ascending/descending
Route::get('/storeIndex/product/price_ascending', [StoreController::class, "product_price_ascending"])->name("product_price_ascending");

Route::get('/storeIndex/product/price_descending', [StoreController::class, "product_price_descending"])->name("product_price_descending");



//Customer Profile
Route::get('/storeIndex/customer_profile', [CustomerController::class, "customer_profile"])->name('customer_profile');

Route::get('/storeIndex/customer_profile/edit_customer_profile/{customer_id}', [CustomerController::class, "edit_profile"])->name('edit_profile');

Route::post('/storeIndex/customer_profile/edit_customer_profile/process/{customer_id} ', [CustomerController::class, "update_profile"]);



//Change Password
Route::get('/storeIndex/customer_profile/change_password/{customer_id}', [CustomerController::class, "change_password"])->name('change_password');

Route::post('/storeIndex/customer_profile/change_password/process/{customer_id}', [CustomerController::class, "update_password"]);



//Order history
Route::get('/storeIndex/order_history', [StoreController::class, "order_history"])->name('order_history');

Route::get('/storeIndex/order_history/pending', [StoreController::class, "order_history_pending"])->name('order_history_pending');

Route::get('/storeIndex/order_history/confirmed', [StoreController::class, "order_history_confirmed"])->name('order_history_confirmed');

Route::get('/storeIndex/order_history/shipping', [StoreController::class, "order_history_shipping"])->name('order_history_shipping');

Route::get('/storeIndex/order_history/success', [StoreController::class, "order_history_success"])->name('order_history_success');

Route::get('/storeIndex/order_history/canceled', [StoreController::class, "order_history_canceled"])->name('order_history_canceled');

Route::post('/storeIndex/order_history/cancel_order/order_id={order_id}', [StoreController::class, "cancel_order"])->name('cancel_order');

Route::get('/storeIndex/order_history/view_order/order_id={order_id}', [StoreController::class, "view_order_detail"])->name('view_order_detail');

Route::get('/storeIndex/order_history/view_pending_order/order_id={order_id}', [StoreController::class, "view_pending_order"])->name('view_pending_order');

Route::get('/storeIndex/order_history/view_canceled_order/order_id={order_id}', [StoreController::class, "view_canceled_order"])->name('view_canceled_order');








