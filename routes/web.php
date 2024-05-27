<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/logedin', function () {
    return view('home_login');
});

Route::get('/Daftar-Perusahaan', function () {
    return view('dafPerusahaan');
});

Route::get('/Cari-Kerja', function () {
    return view('cari_kerja');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/Company-Profile', function () {
    return view('profilePerusahaan');
});

Route::get('/profil', function () {
    return view('profil_jobseeker');
});

Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/signup', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');

Route::get('/user/image/{id}', [UserController::class, 'getImage'])->name('user.image');
