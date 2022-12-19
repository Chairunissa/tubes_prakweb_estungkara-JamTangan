<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// route halaman produk
Route::get('/', function () {
    return view('produk', [
        "title" => "Produk"
    ]);
});

// route halaman katalog
Route::get('/admin', function () {
    return view('katalog', [
        "title" => "Katalog"
    ]);
});

// route halaman category
Route::get('/category', function () {
    return view('category', [
        "title" => "Category"
    ]);
});

// route halaman detail
Route::get('/detail', function () {
    return view('detail', [
        "title" => "Detail"
    ]);
});

// route halaman login
Route::get('/login', [LoginController::class, 'index']);

// route halaman registrasi
Route::get('/register', [RegisterController::class, 'index']);
