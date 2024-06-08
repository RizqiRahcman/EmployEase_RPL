<?php

use App\Http\Controllers\CvController;
use App\Models\Pekerjaan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyProfController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home',['pekerjaans' => Pekerjaan::all()]);
});

Route::get('/logedin', function () {
    return view('home_login',['pekerjaans' => Pekerjaan::all()]);
})->name('logendin');

Route::get('/Daftar-Perusahaan', [ProfileController::class, 'company'])->name('dafPerusahaan');

Route::get('/Cari-Kerja', [PekerjaanController::class, 'index'])->name('cari_kerja');

// Route::get('/Cari-Kerja-filter', [PekerjaanController::class, 'filter'])->name('apply_filter');

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/signup', function () {
    return view('signup');
});

// Route::get('/Profil-Perusahaan', function () {
//     return view('profilePerusahaan');
// })->name=('profile.perusahaan');

Route::get('/profil', [CvController::class, 'index'])->name('profil.jobseeker');
Route::post('/pengalaman', [CvController::class, 'pengalaman'])->name('post.pengalaman');
Route::post('/pendidikan', [CvController::class, 'pendidikan'])->name('post.pendidikan');

Route::get('/Up-Loker', function () {
    return view('upLoker');
});


// Route::get('/Edit-Profil', function () {
//     return view('editProfil');
// });

// Route::get('/Edit-Company', function () {
//     return view('editProfilCompany');
// });

Route::get('/View-Profil', function () {
    return view('viewprofil_jobseeker');
});

Route::get('/DashLowongan', [DashboardController::class, 'lowongan'])->name('dashboard.lowongan');
Route::get('/Pelamar', [DashboardController::class, 'pelamar'])->name('dashboard.pelamar');
Route::get('/DashComp', [DashboardController::class, 'dashcom'])->name('dashboard.company');

Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/signup', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::middleware(['auth'])->group(function () {
    // Rute untuk menampilkan form lamaran
    Route::get('/lamar/{pekerjaan}', [LamaranController::class, 'create'])->name('lamaran.create');

    // Rute untuk menyimpan data lamaran
    Route::post('/lamar', [LamaranController::class, 'store'])->name('lamaran.store');
});
Route::get('/edit-profil', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/edit-profil-company', [ProfileController::class, 'editcompany'])->name('profilecompany.edit');
Route::post('/profile/update-company', [ProfileController::class, 'updatecompany'])->name('profilecompany.update');

Route::get('/apply/{id}', [PekerjaanController::class, 'showForm'])->name('apply.form');
Route::get('/user/image/{id}', [UserController::class, 'getImage'])->name('user.image');
Route::get('/ajax-autocomplete', [SearchController::class, 'cari']);

Route::post('/pekerjaan', [PekerjaanController::class, 'store'])->name('pekerjaan.store');
// Route::get('/tampilpekerjaan', [PekerjaanController::class, 'page'])->name('pekerjaan.page');
Route::post('/filter-pekerjaan', [PekerjaanController::class, 'filterPekerjaan'])->name('filter.pekerjaan');

Route::delete('/pendidikan/delete/{id}', [CvController::class, 'deletePendidikan'])->name('pendidikan.delete');
Route::delete('/pengalaman/delete/{id}', [CvController::class, 'deletePengalaman'])->name('pengalaman.delete');
Route::delete('/pekerjaan/{id}', [PekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');

Route::get('/profil_perusahaan', [CompanyProfController::class, 'index'])->name('profil.perusahaan');

Route::get('/test', function () {
    return view('profil_com');
});