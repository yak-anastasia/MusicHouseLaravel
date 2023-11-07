<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SqlController;

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
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/product', function () {
    return view('product');
})->name('product');
Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/sql', [SqlController::class, 'index']);
