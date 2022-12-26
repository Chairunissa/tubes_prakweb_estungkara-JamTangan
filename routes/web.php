<?php

use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CasioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RolexController;
use App\Http\Controllers\ChanelController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryMaleController;
use App\Http\Controllers\CategoryFemaleController;

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

// route halaman katalog Casio
Route::get('/casio', [CasioController::class, 'index']);

// route halaman katalog Rolex
Route::get('/rolex', [RolexController::class, 'index']);

// route halaman katalog Chanel
Route::get('/chanel', [ChanelController::class, 'index']);

// route halaman category Male
Route::get('/categorymale', [CategoryMaleController::class, 'index']);

// route halaman category Female
Route::get('/categoryfemale', [CategoryFemaleController::class, 'index']);

//route halaman kontak kami
Route::get('/kontak', [KontakController::class, 'index']);

// route halaman detail
Route::get('/detail', [DetailController::class, 'index']);

// route halaman login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

// route halaman registrasi
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// route halaman admin
Route::get('/Admin', [AdminController::class, 'index']);

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/logout', [LoginController::class, 'logout']);
