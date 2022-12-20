<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KatalogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Models\Produk;

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
Route::resource('/', HomeController::class);
Route::get('/produk', [ProdukController::class, 'index']);

// route halaman katalog
Route::get('/catalog', [KatalogController::class, 'index']);

// route halaman category
Route::get('/category', [CategoryController::class, 'index']);


// route halaman detail
Route::get('/detail', [DetailController::class, 'index']);

// route halaman login
Route::get('/login', [LoginController::class, 'index']);

// route halaman registrasi
Route::get('/register', [RegisterController::class, 'index']);
