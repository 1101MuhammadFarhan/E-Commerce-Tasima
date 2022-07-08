<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\ProductController;
use App\http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\OrderRekapController;
use App\http\Controllers\Admin\ProfilUsahaController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserOrderController;
use App\Http\Controllers\Frontend\UserProfilController;
use App\Http\Controllers\Admin\RekapPenjualanController;
use App\http\Controllers\Frontend\UserProductController;
use App\Http\Controllers\Frontend\UpdatePasswordController;
use App\http\Controllers\Frontend\UserProfilUsahaController;
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

// Route::get('/',[FrontendController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('home');
Route::get('/user-dashboard','Frontend\FrontendController@index');

Route::get('/user-produk','Frontend\UserProductController@index');
Route::get('/user-profilUsaha', 'Frontend\UserProfilUsahaController@index');
Route::get('/user-produk/{id_produk}', [UserProductController::class, 'viewproduk']);

Route::get('/user-ProfilUser', [UserProfilController::class, 'index']);
Route::get('/user-editProfilUser', [UserProfilController::class, 'edit']);
Route::put('/user-updateProfilUser', [UserProfilController::class, 'update'])->name('profile.update');
Route::get('/user-editPasswordProfilUser', [UpdatePasswordController::class, 'edit'])->name('password.edit');
Route::put('/user-editPasswordProfilUser', [UpdatePasswordController::class, 'update']);

Route::post('add-to-cart', [CartController::class, 'addProduct']);
Route::post('delete-cart-item', [CartController::class, 'deleteProduk']);
Route::post("update-cart", [CartController::class, 'updatecart']);

Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'viewcart']);
    Route::get('checkout', [CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class, 'placeorder']);
    Route::get('my-orders', [UserOrderController::class, 'index']);
    Route::get('view-order/{id}', [UserOrderController::class, 'view']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard','Admin\FrontendController@index');

    Route::get('produk','Admin\ProductController@index');
    Route::get('add-produk','Admin\ProductController@add');
    Route::post('insert-produk', 'Admin\ProductController@insert');
    Route::get('edit-prod/{id_produk}', [ProductController::class ,'edit']);
    Route::put('update-produk/{id_produk}', [ProductController::class, 'update']);
    Route::get('/delete-produk/{id_produk}', [ProductController::class, 'delete']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard','Admin\FrontendController@index');

    Route::get('profil-usaha', 'Admin\ProfilUsahaController@index');
    Route::get('add-profil-usaha','Admin\ProfilUsahaController@add');
    Route::post('insert-profil-usaha', 'Admin\ProfilUsahaController@insert');
    Route::get('edit-profil-usaha/{idProfil_Usaha}', [ProfilUsahacontroller::class ,'edit']);
    Route::put('update-profil-usaha/{idProfil_Usaha}', [ProfilUsahacontroller::class, 'update']);

    Route::get('users', [FrontendController::class, 'users']);

    Route::get('orders',[OrderRekapController::class, 'index']);
    Route::get('orders-produksi',[OrderRekapController::class, 'produksi']);
    Route::get('orders-pengiriman',[OrderRekapController::class, 'pengiriman']);
    Route::get('orders-sampai',[OrderRekapController::class, 'sampai']);
    Route::get('admin/view-orders/{id}',[OrderRekapController::class, 'view']);
    Route::put('update-order/{id}', [OrderRekapController::class, 'updateorder']);

    Route::get('rekap-penjualan',[OrderRekapController::class, 'rekap']);
    Route::get('grafik',[OrderRekapController::class, 'grafik']);

});
