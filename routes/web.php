<?php

use App\Models\Pekerjaan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\ApplicationController;

Route::get('/', function () {
    return view('home',['pekerjaans' => Pekerjaan::all()]);
});

Route::get('/logedin', function () {
    return view('home_login',['pekerjaans' => Pekerjaan::all()]);
})->name('logendin');

Route::get('/Daftar-Perusahaan', function () {
    return view('dafPerusahaan');
});

Route::get('/Cari-Kerja', [PekerjaanController::class, 'index'])->name('cari_kerja');

// Route::get('/Cari-Kerja-filter', [PekerjaanController::class, 'filter'])->name('apply_filter');

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


Route::get('/Up-Loker', function () {
    return view('upLoker');
});

Route::get('/Pelamar', function () {
    return view('pelamar');
});

Route::get('/Edit-Profil', function () {
    return view('editProfil');
});

Route::get('/Edit-Company', function () {
    return view('editProfilCompany');
});

Route::get('/DashComp', function () {
    return view('dashboardComp');
})->name('dashboard.company');

Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/signup', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/Form-Lamaran', [ApplicationController::class, 'index'])->name('index');
Route::get('/lamar/{pekerjaan}', [ApplicationController::class, 'create'])->name('lamaran.create');
Route::get('/user/image/{id}', [UserController::class, 'getImage'])->name('user.image');
Route::get('/ajax-autocomplete', [SearchController::class, 'cari']);

Route::post('/pekerjaan', [PekerjaanController::class, 'store'])->name('pekerjaan.store');
// Route::get('/tampilpekerjaan', [PekerjaanController::class, 'page'])->name('pekerjaan.page');
Route::post('/filter-pekerjaan', [PekerjaanController::class, 'filterPekerjaan'])->name('filter.pekerjaan');