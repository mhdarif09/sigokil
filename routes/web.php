<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SellerProductController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UmkmRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\QRISController;

Route::get('/', [IndexController::class, 'index'])->name('home');


Route::middleware(['auth', CheckRole::class.':umkm'])->group(function () {
    Route::get('/seller/products', [SellerProductController::class, 'index'])->name('seller.products.index');
    Route::get('/seller/products/create', [SellerProductController::class, 'create'])->name('seller.products.create');
    Route::post('/seller/products', [SellerProductController::class, 'store'])->name('seller.products.store');
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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'show'])->name('product.show');
Route::post('/product/{id}/order', [HomeController::class, 'order'])->name('product.order');

// landing page register
Route::get('auth/lp-register', function () {
    return view('auth.lp-register');
})->name('auth.lp-register');

// UMKM Registration
Route::get('register-umkm', [UmkmRegisterController::class, 'showRegistrationForm'])->name('register-umkm');
Route::post('register-umkm', [UmkmRegisterController::class, 'register'])->name('register.umkm');

// Login untuk UMKM
Route::get('/login/{type}', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login/{type}', [LoginController::class, 'login'])->name('login.submit');

Route::resource('/checkout', CheckoutController::class)->only([
    'create', 'store'
]);


Route::get('/qris-payment/{order}', [QRISController::class, 'show'])->name('qris.payment');


Route::get('/orders/{order}', [CheckoutController::class, 'show'])->name('orders.show');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');