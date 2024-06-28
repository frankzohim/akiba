<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginViewController;
use App\Http\Controllers\RegisterViewController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\CreateUserController;
use App\Http\Controllers\User\LogoutController;
use App\Http\Controllers\Dashboard\DashboardAdminController;
use App\Http\Controllers\Dashboard\DashboardVendorController;
use App\Http\Controllers\Dashboard\DashboardCustomerController;
use App\Http\Controllers\Dashboard\DashboardShipperController;
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

// preventBack middleware helps protect login and registration routes when a user is already logged in
Route::get('/register', [CreateUserController::class, 'create'])->name("register")->middleware('preventBack');
Route::post('/store', [CreateUserController::class, 'store'])->name("store")->middleware('preventBack');
Route::get('/login',[LoginViewController::class,'getViewLogin'])->middleware('preventBack');



//middleware admin

Route::middleware(['admin'])->prefix('admin')->group(function () {
  
   Route::get('dashboard',[DashboardAdminController::class,'index'])->name('admin.dashboard');

});

//middleware vendor
Route::middleware(['vendor'])->group(function () {
    
    Route::prefix('dashboard')->group(function () {
        Route::get('index', [DashboardVendorController::class, 'index'])->name('db.vendor.index');
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
