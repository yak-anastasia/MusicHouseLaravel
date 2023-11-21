<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/authorization', function () {
    return view('authorization');
})->name('authorization');
Route::get('/basket', function () {
    return view('basket');
})->name('basket');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/registration', function () {
    return view('registration');
})->name('registration');
Route::get('/catalog', function() {
    return view('products/index');
})->name('catalog');
Route::get('/show', function() {
    return view('products/show');
})->name('show');

Route::resource('products', ProductController::class);

// Route::get('/products',[ProductController::class, 'index']);
