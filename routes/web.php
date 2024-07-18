<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginViewController;
use App\Http\Controllers\RegisterViewController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AutomaticLoginController;
use App\Http\Controllers\Auth\CreateUserController;
use App\Http\Controllers\User\LogoutController;
use App\Http\Controllers\Dashboard\DashboardAdminController;
use App\Http\Controllers\Dashboard\DashboardVendorController;
use App\Http\Controllers\Dashboard\DashboardCustomerController;
use App\Http\Controllers\Dashboard\DashboardShipperController;
use App\Http\Controllers\Brand\BrandController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



 
//Homepage route
Route::get('/',[HomepageController::class,'homepage'])->name('homepage');

//Localization Route
Route::get('lang/{locale}', [LocalizationController::class,'index'])->name('lang');


Route::get('/login', function () {
    return view('auth.login');
});

//Route to the API once the user enters credentials
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/loginAuto',[AutomaticLoginController::class,'login'])->name('loginAuto');

// preventBack middleware helps protect login and registration routes when a user is already logged in
Route::get('/register', [CreateUserController::class, 'create'])->name("register")->middleware('preventBack');
Route::post('/store', [CreateUserController::class, 'store'])->name("store")->middleware('preventBack');
Route::get('/login',[LoginViewController::class,'getViewLogin'])->middleware('preventBack');

//Image display route
Route::get('categoryImage/{id}/{path}',[CategoryController::class, 'categoryImage'])->name('display.category.image');


//middleware admin

Route::middleware(['admin'])->prefix('admin')->group(function () {
  
   Route::get('dashboard',[DashboardAdminController::class,'index'])->name('admin.dashboard');

   //Group route for brand CRUD
    Route::get('brand',[BrandController::class,'index'])->name('brand');
    Route::post('brand/store',[BrandController::class,'store'])->name('brand.store');
    Route::get('brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
    Route::post('brand/update',[BrandController::class,'update'])->name('brand.update');
    Route::get('brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');
    Route::post('brand/image',[BrandController::class, 'uploadImage'])->name('brand.image');
    Route::get('/brand/deleteImage',[BrandController::class, 'deleteImage'])->name('deleteImage');

   //Group route for category CRUD
    Route::get('category',[CategoryController::class,'index'])->name('category');
    Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('category/update',[CategoryController::class,'update'])->name('category.update');
    Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
    Route::post('category/image',[CategoryController::class, 'uploadImage'])->name('category.image');
    Route::get('/category/deleteImage',[CategoryController::class, 'deleteImage'])->name('deleteImage');
});



//middleware vendor
Route::middleware(['vendor'])->group(function () {
    
    Route::prefix('vendor')->group(function () {
        Route::get('index', [DashboardVendorController::class, 'index'])->name('db.vendor.index');

      //Group route for store CRUD
        Route::get('store',[StoreController::class,'index'])->name('store');
        Route::get('store/create',[StoreController::class,'create'])->name('db.store.create');
        Route::post('store/store',[StoreController::class,'store'])->name('store.store');
        Route::get('store/edit/{id}',[StoreController::class,'edit'])->name('store.edit');
        Route::post('store/update',[StoreController::class,'update'])->name('store.update');
        Route::get('store/delete/{id}',[StoreController::class,'delete'])->name('store.delete');
        Route::post('store/image',[StoreController::class, 'uploadImage'])->name('store.image');
        Route::get('store/deleteImage',[StoreController::class, 'deleteImage'])->name('deleteImage');

      //Group route for product CRUD
        Route::get('product',[ProductController::class,'index'])->name('product');
        Route::get('product/create',[ProductController::class,'create'])->name('db.product.create');
        Route::post('product/store',[ProductController::class,'store'])->name('product.store');
        Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
        Route::post('product/update',[ProductController::class,'update'])->name('product.update');
        Route::get('product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
        Route::post('product/image',[ProductController::class, 'uploadImage'])->name('product.image');
        Route::get('product/deleteImage',[ProductController::class, 'deleteImage'])->name('deleteImage');
        
    
    });
     

});

//middleware customer
Route::middleware(['customer'])->prefix('customer')->group(function () {

        Route::get('index', [DashboardCustomerController::class, 'index'])->name('db.customer.index');

});


//middleware shipper
Route::middleware(['shipper'])->prefix('shipper')->group(function () {

        Route::get('index', [DashboardShipperController::class, 'index'])->name('db.shipper.index');

});

//middleware user

Route::middleware(['user'])->group(function () {
    
    Route::post('/logout',[LogoutController::class,'logout'])
    ->name('logout');
});
