<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SellerProductController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartController;

<<<<<<< HEAD
Route::get('/', [IndexController::class, 'index'])->name('home');
=======
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

>>>>>>> 0caf3644662b89ca4e7d102a37cf8e379de4a351


Route::middleware(['auth', CheckRole::class.':seller'])->group(function () {
    Route::get('/seller/products', [SellerProductController::class, 'index'])->name('seller.products.index');
    Route::get('/seller/products/create', [SellerProductController::class, 'create'])->name('seller.products.create');
    Route::post('/seller/products', [SellerProductController::class, 'store'])->name('seller.products.store');
});
Route::get('/cart', function () {
    return view('keranjang.cart');
});

Route::get('/checkout', function () {
    return view('keranjang.checkout');
});

Route::get('/seller', [SellerController::class, 'index'])->name('seller.index');

Route::get('/pembayaran', function () {
    return view('keranjang.pembayaran');
});

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.home');


Route::get('/Pesanan_saya', function () {
    return view('Pesanan_saya');
});

Route::get('/pembayaranberhasil', function (){
    return view('keranjang.pembayaranberhasil');
});

Route::get('/penghasilan', function (){
    return view('seller.penghasilan.penghasilansaya');
});

Route::get('/saldo', function (){
    return view('seller.penghasilan.saldosaya');
});

Route::get('/tarikdana', function (){
    return view('seller.penghasilan.tarikdana');
});

Route::get('/akun', function (){
    return view('akun.index');
});
<<<<<<< HEAD
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'show'])->name('product.show');
Route::post('/product/{id}/order', [HomeController::class, 'order'])->name('product.order');

// cart

// Cart Routes
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'show'])->name('cart');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [CartController::class, 'processCheckout'])->name('checkout.process');
=======

Route::get('/rekeningbaru', function (){
    return view('seller.penghasilan.rekeningbank_saldosaya');
});
Auth::routes();
>>>>>>> 0caf3644662b89ca4e7d102a37cf8e379de4a351
