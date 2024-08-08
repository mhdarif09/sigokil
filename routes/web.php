<?php

use Illuminate\Support\Facades\Route;
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
use App\Http\Controllers\PenghasilanController;

Route::get('/', [IndexController::class, 'index'])->name('home');


Route::middleware(['auth', CheckRole::class.':umkm'])->group(function () {
    Route::get('/seller/products', [SellerProductController::class, 'index'])->name('seller.products.index');
    Route::get('/seller/products/create', [SellerProductController::class, 'create'])->name('seller.products.create');
    Route::post('/seller/products', [SellerProductController::class, 'store'])->name('seller.products.store');
});


Route::get('/seller', [SellerController::class, 'index'])->name('seller.index');

Route::get('/cart', [CartController::class, 'index'])->name('keranjang.cart');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');


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
Route::get('/qris/accept/{orderId}', [QRISController::class, 'accept'])->name('qris.accept');
Route::get('/qris/reject/{orderId}', [QRISController::class, 'reject'])->name('qris.reject');

Route::get('/qris/pembayaranberhasil', function () {
    return view('qris.pembayaranberhasil');
})->name('qris.pembayaranberhasil');

Route::get('/penghasilan-saya', [PenghasilanController::class, 'index'])->name('seller.penghasilan.penghasilansaya');

// View Saldo Saya
Route::get('/saldo-saya', [PenghasilanController::class, 'saldoSaya'])->name('seller.penghasilan.saldosaya');

// View and Handle Tarik Dana
Route::get('/tarik-dana', [PenghasilanController::class, 'tarikDanaView'])->name('seller.penghasilan.tarikdana.view');
Route::post('/tarik-dana', [PenghasilanController::class, 'tarikDana'])->name('seller.penghasilan.tarikdana');

// View and Handle Tambah Rekening
Route::get('/tambah-rekening', [PenghasilanController::class, 'tambahRekeningView'])->name('seller.penghasilan.tambahrekening.view');
Route::post('/tambah-rekening', [PenghasilanController::class, 'tambahRekening'])->name('seller.penghasilan.tambahrekening');

Route::get('/orders/{order}', [CheckoutController::class, 'show'])->name('orders.show');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');


Route::get('/laporan', function () {
    return view('admin.laporan');
});
Route::get('/laporan-tinggi', function () {
    return view('admin.laporan-tinggi');
});
Route::get('/laporan-sedang', function () {
    return view('admin.laporan-sedang');
});
Route::get('/laporan-rendah', function () {
    return view('admin.laporan-rendah');
});
Route::get('/form-laporan', function () {
    return view('admin.form-laporan');
});

Route::get('/help', [HomeController::class, 'help'])->name('help');

Route::get('/form-respon', function () {
    return view('admin.form-respon');
});