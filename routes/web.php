<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view ('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "active" => "about",
    ]);
});

Route::get('/posts', function () {
    return view ('posts', [
        "title" => "Blog",
        "active" => "posts",
    ]);
});

Route::get('/categories', function () {
    return view ('categories', [
        "title" => "Category",
        "active" => "categories",
    ]);
});

Route::get('/login', [LoginController::class, 'index']);