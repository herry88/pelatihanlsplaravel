<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('home');
});

<<<<<<< HEAD

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//rute baru
Route::resource('category', App\Http\Controllers\CategoryController::class)->middleware('is_admin');


//rute product
<<<<<<< HEAD
Route::resource('product', App\Http\Controllers\ProductController::class);
=======
//route admin
Route::resource('home',App\Http\Controllers\HomeController::class);

//rute baru
Route::resource('category', App\Http\Controllers\CategoryController::class)->middleware('isAdmin');


//rute product
Route::resource('product', App\Http\Controllers\ProductController::class)->middleware('isAdmin');
>>>>>>> 70a5d6ea5410ea4e58b9b5c40bfbd17e36771484

Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('transaksi',App\Http\Controllers\OrderController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

=======
Route::resource('product', App\Http\Controllers\ProductController::class)->middleware('is_admin');
//rute order
Route::resource('order', App\Http\Controllers\OrderController::class)->middleware('is_admin');
>>>>>>> multiAuth
