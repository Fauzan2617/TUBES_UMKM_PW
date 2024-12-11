<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', fn () => view('home'));
Route::get('/home', fn () => view('home'));


// LOGIN DAN REGISTER
Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);




// BAGIAN USER
route::get('/about', fn() => view('about'));

Route::get('/halamanproduct', fn () => view('halamanproduct'));

Route::get('/detailproduct', fn () => view('detailproduct'));





// Bagian Admin
Route::get('views_admin/dashboardhome', fn () => view('views_admin.dashboardhome'));

Route::get('views_admin/crudproduk', fn () => view('views_admin.crudproduk'));

Route::get('views_admin/produk', fn ()=> view('views_admin.produk'));

Route::get('views_admin/profile', fn ()=> view('views_admin.profile'));

Route::get('views_admin/update-delete', fn ()=> view('views_admin.update-delete'));
