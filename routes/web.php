<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GeneratePDFController;
use App\Http\Controllers\ExcelMultiplesController;
use App\Http\Controllers\ProductVariationController;
use App\Http\Controllers\NotificationController;
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






Route::get('/notification', [NotificationController::class, 'notification']);
Route::post('/notificationupdate', [NotificationController::class, 'notification_update']);


Route::get('/generate-excel', [ExcelMultiplesController::class, 'generateExcelFile']);




Route::get('order/{id}/customer/{customer_id}/excel', [ExcelController::class, 'exportUsers']);



// form create Order List


Route::get('/only-header', [\App\Http\Controllers\OrdersController::class, 'show']);
Route::get('/only-gaslift', [\App\Http\Controllers\OrdersController::class, 'show_1']);
Route::get('/only-mattress', [\App\Http\Controllers\OrdersController::class, 'show_2']);
Route::get('/only-ottoman-box', [\App\Http\Controllers\OrdersController::class, 'show_3']);
Route::get('/with-diamond', [\App\Http\Controllers\OrdersController::class, 'show_4']);
Route::get('/without-diamond', [\App\Http\Controllers\OrdersController::class, 'show_5']);
Route::get('/diven', [\App\Http\Controllers\OrdersController::class, 'show_6']);
Route::get('/ottoman-diven', [\App\Http\Controllers\OrdersController::class, 'show_7']);
Route::get('/monaco-diven', [\App\Http\Controllers\OrdersController::class, 'show_8']);


Route::get('/order/{id}/customer/{customer_id}/pdf', [GeneratePDFController::class, 'generateInvoice']);
Route::get('/multiplesgenerateInvoice', [GeneratePDFController::class, 'multiplesgenerate'])->name('multiplesgenerateInvoice');


Auth::routes();
Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::get('/order', [\App\Http\Controllers\OrderController::class, 'outer_create'])->name('order_create');



// Route::get('orders', function () {
//     return view('Admin.Order.add');
// })->name('orders');

Route::group(['middleware' => ['web']], function () {
    //Product Variation Routes
    Route::get('productvariation', [ProductVariationController::class, 'index'])->name('productvariation');
    Route::get('createproductvariation', [ProductVariationController::class, 'create'])->name('createproductvariation');
    Route::post('productvariation', [ProductVariationController::class, 'store']);
    Route::get('editproductvariation/{id}', [ProductVariationController::class, 'edit'])->name('editproductvariation');
    Route::put('updateproductvariation/{id}', [ProductVariationController::class, 'update'])->name('updateproductvariation');
    Route::get('deleteproductvariation/{id}', [ProductVariationController::class, 'destroy'])->name('deleteproductvariation');

    //Product Rotues
    Route::get('product_index', [\App\Http\Controllers\ProductController::class, 'index'])->name('product_index');
    Route::get('product_create', [\App\Http\Controllers\ProductController::class, 'create'])->name('product_create');
    Route::post('product_store', [\App\Http\Controllers\ProductController::class, 'store'])->name('product_store');
    Route::get('product_edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product_edit');
    Route::put('product_update/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product_update');
    Route::get('product_delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product_delete');

    //Route for File upload
    Route::get('file', [\App\Http\Controllers\ProductController::class, 'file'])->name('file');
    Route::post('file_Upload', [\App\Http\Controllers\ProductController::class, 'fileUpload'])->name('file_Upload');

    // Customer Routes
    Route::get('customer_index', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer_index');
    Route::get('customer_create', [\App\Http\Controllers\CustomerController::class, 'create'])->name('customer_create');
    Route::post('customer_store', [\App\Http\Controllers\CustomerController::class, 'store'])->name('customer_store');
    Route::get('customer_edit/{id}', [\App\Http\Controllers\CustomerController::class, 'edit'])->name('customer_edit');
    Route::put('customer_update/{id}', [\App\Http\Controllers\CustomerController::class, 'update'])->name('customer_update');
    Route::DELETE('customer_delete/', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer_delete');
    Route::DELETE('/customerDeleteAll', [\App\Http\Controllers\CustomerController::class, 'deleteAll']);
  

    //Coupen Routes
    Route::get('coupen_index', [\App\Http\Controllers\CoupenController::class, 'index'])->name('coupen_index');
    Route::get('coupen_create', [\App\Http\Controllers\CoupenController::class, 'create'])->name('coupen_create');
    Route::post('coupen_store', [\App\Http\Controllers\CoupenController::class, 'store'])->name('coupen_store');
    Route::get('coupen_edit/{id}', [\App\Http\Controllers\CoupenController::class, 'edit'])->name('coupen_edit');
    Route::put('coupen_update/{id}', [\App\Http\Controllers\CoupenController::class, 'update'])->name('coupen_update');
    Route::get('coupen_delete/{id}', [\App\Http\Controllers\CoupenController::class, 'destroy'])->name('coupen_delete');

    //Order Routes
    Route::post('order_store', [\App\Http\Controllers\OrderController::class, 'store'])->name('order_store');
    Route::get('re-order', [\App\Http\Controllers\OrderController::class, 're_order'])->name('re-order');
    Route::post('order_store_two', [\App\Http\Controllers\OrderController::class, 'storetwo'])->name('order_store_two');
    Route::post('order_edit', [\App\Http\Controllers\OrderController::class, 'orders_edit'])->name('order_edit');
    Route::get('order_index', [\App\Http\Controllers\OrderController::class, 'index'])->name('order_index');
    Route::get('order_create', [\App\Http\Controllers\OrderController::class, 'create'])->name('order_create');
    Route::post('order_store', [\App\Http\Controllers\OrderController::class, 'store'])->name('order_store');
    Route::get('order_view/{id}', [\App\Http\Controllers\OrderController::class, 'show'])->name('order_view');
    Route::get('order_edit/{id}', [\App\Http\Controllers\OrderController::class, 'edit'])->name('order_edit');
    Route::put('order_update/{id}', [\App\Http\Controllers\OrderController::class, 'update'])->name('order_update');
    Route::DELETE('order_delete/', [\App\Http\Controllers\OrderController::class, 'destroy'])->name('order_delete');
    Route::get('searching/', [\App\Http\Controllers\OrderController::class, 'searching'])->name('searching');
    Route::DELETE('/myproductsDeleteAll', [\App\Http\Controllers\OrderController::class, 'deleteAll']);
    Route::get('/SerachOrder/{id}', [\App\Http\Controllers\OrderController::class, 'order_search']);

    // admin 
    Route::post('/advance-searching', [\App\Http\Controllers\OrderController::class, 'advance_search'])->name('advance_searching');

    
    //Product Variation Routes
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('createuser', [UserController::class, 'create'])->name('createuser');
    Route::post('storeuser', [UserController::class, 'store'])->name('storeuser');
    Route::get('edituser/{id}', [UserController::class, 'edit'])->name('edituser');
    Route::post('updateuser/{id}', [UserController::class, 'update'])->name('updateuser');
    Route::get('destroyuser/{id}', [UserController::class, 'destroy'])->name('destroyuser');

    //Roles Routes
    Route::get('role', [RoleController::class, 'index'])->name('role');
    Route::get('createrole', [RoleController::class, 'create'])->name('createrole');
    Route::post('storerole', [RoleController::class, 'store'])->name('storerole');
    Route::get('editrole/{id}', [RoleController::class, 'edit'])->name('editrole');
    Route::post('updaterole/{id}', [RoleController::class, 'update'])->name('updaterole');
    Route::get('destroyrole/{id}', [RoleController::class, 'destroy'])->name('destroyrole');

    Route::post('country_product', [ProductController::class, 'country_product'])->name('country_product');
    Route::post('product_variation', [ProductController::class, 'product_variation'])->name('product_variation');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});



Route::get('details', [App\Http\Controllers\DataDetailsController::class, 'index'])->name('details');
Route::get('/create_details', [App\Http\Controllers\DataDetailsController::class, 'create'])->name('createDetails');
Route::post('/store_details', [App\Http\Controllers\DataDetailsController::class, 'store'])->name('storeDetails');
Route::get('link_edit/{id}', [App\Http\Controllers\DataDetailsController::class, 'edit'])->name('link_edit');
Route::put('link_update/{id}', [App\Http\Controllers\DataDetailsController::class, 'update'])->name('link_update');

Route::get('destroylink/{id}', [App\Http\Controllers\DataDetailsController::class, 'destroy'])->name('destroylink');


Route::post('users/users_role_link', [App\Http\Controllers\DataDetailsController::class, 'fetchUsersByRoleData']);
Route::any('users/users_role_data/edit', [App\Http\Controllers\DataDetailsController::class, 'editUsersByRoleData'])->name('users.saveUserRoleedit');



Route::get('PaymentsInvoices', [App\Http\Controllers\PaymentsInvoicesController::class, 'index'])->name('PaymentsInvoices');
Route::get('/create_PaymentsInvoices', [App\Http\Controllers\PaymentsInvoicesController::class, 'create'])->name('createPaymentsInvoices');
Route::post('/store_PaymentsInvoices', [App\Http\Controllers\PaymentsInvoicesController::class, 'store'])->name('storePaymentsInvoices');
Route::get('PaymentsInvoices_edit/{id}', [App\Http\Controllers\PaymentsInvoicesController::class, 'edit'])->name('PaymentsInvoices_edit');
Route::put('PaymentsInvoices_update/{id}', [App\Http\Controllers\PaymentsInvoicesController::class, 'update'])->name('PaymentsInvoices_update');

Route::get('destroyPaymentsInvoices/{id}', [App\Http\Controllers\PaymentsInvoicesController::class, 'destroy'])->name('destroyPaymentsInvoices');

Route::get('/users/users_role/', [App\Http\Controllers\PaymentsInvoicesController::class, 'fetchUsersByRole'])->name('users.saveUserRole');




Route::any('/users/users_role/edit', [App\Http\Controllers\PaymentsInvoicesController::class, 'editUsersByRole'])->name('users.saveUserRoleedit');











