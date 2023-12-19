<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarouselController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/authorization', function() {
    return view('authorization');
})->name('authorization');
Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts');
Route::get('/orders', function() {
    return view('orders');
})->name('orders');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/admin', function(){
    return view('admin');
})->name('admin')->middleware('admin');

Route::get('/', [CarouselController::class, 'index'])->name('index');

Route::resource('products', ProductController::class);

Route::post('/products/filter', [ProductController::class, 'filter'])->name('products.filter');

Route::resource('categories', CategoryController::class)->middleware('admin');

Route::middleware('guest')->group(function() {
    Route::get('/registration', [AuthController::class, 'regForm'])->name('regForm');
    Route::post('/reg', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
