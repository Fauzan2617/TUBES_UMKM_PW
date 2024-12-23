<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

Route::get('/', [\App\Http\Controllers\home::class,'index']);
Route::get('/home', [\App\Http\Controllers\home::class,'index']);



// LOGIN DAN REGISTER
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// BAGIAN USER
route::get('/about', fn() => view('about'));

Route::get('/halamanproduct', [\App\Http\Controllers\halamanproduct::class,'index']);

Route::get('/detailproduct', [\App\Http\Controllers\detailproduct::class,'index']);

//crud show user
Route::get('halamanproduct', [ProductController::class, 'index_user'])->name('halamanproduct');



// Bagian Admin
Route::get('views_admin/dashboardhome', [\App\Http\Controllers\dashboardhome::class,'index']);

Route::get('views_admin/crudproduk', [\App\Http\Controllers\crudproduk::class,'index']);

Route::get('views_admin/produk', [\App\Http\Controllers\produk::class,'index']);

Route::get('views_admin/profile', [\App\Http\Controllers\profile_admin::class,'index']);

Route::get('views_admin/update-delete', [\App\Http\Controllers\update_delete::class,'index']);


// sistem crud / admin
Route::get('views_admin/crudproduk', [ProductController::class, 'create'])->name('views_admin.crudproduk');

Route::post('views_admin/crudproduk', [ProductController::class, 'store'])->name('views_admin.produk');

//crud show admin
Route::get('views_admin/produk', [ProductController::class, 'index'])->name('views_admin.produk');