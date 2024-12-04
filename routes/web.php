<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/halamanproduct', function () {
    return view('halamanproduct');
})->name('halamanproduct');
Route::get('/detailproduct', function () {
    return view('detailproduct');
})->name('detailproduct');


// Bagian Admin
Route::get('views_admin/dashboardhome', function () {
    return view('/views_admin/dashboardhome');
})->name('/views_admin/dashboardhome');
