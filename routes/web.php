<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SellerProductController;
use App\Http\Middleware\CheckRole;

Route::get('/', function () {
    return view('index');
});


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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

