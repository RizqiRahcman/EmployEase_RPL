<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/Daftar-Perusahaan', function () {
    return view('dafPerusahaan');
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

Route::get('/Search', function () {
    return view('cariKerja');
});

Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');