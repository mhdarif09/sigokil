<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/Beranda', function () {
    return view('Beranda');
});

Route::get('/cart', function () {
    return view('keranjang.cart');
});

Route::get('/checkout', function () {
    return view('keranjang.checkout');
});

Route::get('/seller', function () {
    return view('seller.index');
});

Route::get('/pembayaran', function () {
    return view('keranjang.pembayaran');
});

Route::get('/keranjang', function () {
    return view('keranjang.home');
});

Route::get('/Pesanan_saya', function () {
    return view('Pesanan_saya');
});

Route::get('/pembayaranberhasil', function (){
    return view('keranjang.pembayaranberhasil');
});

Route::get('/penghasilan', function (){
    return view('seller.penghasilansaya');
});

Route::get('/saldo', function (){
    return view('seller.saldosaya');
});

Route::get('/akun', function (){
    return view('akun.index');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

