<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenugasanController;
use App\Http\Controllers\PerizinanLingkunganController;
use App\Http\Controllers\PersetujuanTeknisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RincianTeknisController;
use App\Http\Controllers\SuratArahanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/frontend/home');
});

Route::get('/news/detail', function () {
    return view('/frontend/news_detail');
});

Route::get('/news', function () {
    return view('/frontend/news');
});

Route::get('/surat', [SuratArahanController::class, 'show']);
Route::post('/surat/save', [SuratArahanController::class, 'save'])->name('surat.save');
Route::get('/surat/exportPDF', [SuratArahanController::class, 'exportPDF'])->name('surat.exportPDF');


// Route::controller(DashboardController::class)->group(function () {
//     Route::get('/', 'index')->name('index');
// });



// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// login
Route::get('/auth/login', [LoginController::class, 'index'])->name('login.index');

// Pertek
Route::prefix('admin')->group(function () {
    Route::get('/pertek/arahan', [PersetujuanTeknisController::class, 'index_arahan'])->name('pertek.index_arahan');
    Route::get('/pertek/create-arahan', [PersetujuanTeknisController::class, 'create_arahan'])->name('pertek.create_arahan');
    Route::get('/pertek/verifikator/arahan', [PersetujuanTeknisController::class, 'verifikator_arahan'])->name('pertek.verifikator_arahan');
    Route::get('/pertek/user/arahan', [PersetujuanTeknisController::class, 'user_arahan'])->name('pertek.user_arahan');
    Route::get('/pertek/emisi', [PersetujuanTeknisController::class, 'index_emisi'])->name('pertek.index_emisi');
    Route::get('/pertek/airlimbah', [PersetujuanTeknisController::class, 'index_airlimbah'])->name('pertek.index_airlimbah');
    Route::get('/pertek/limbahb3', [PersetujuanTeknisController::class, 'index_limbahb3'])->name('pertek.index_limbahb3');
});

//rintek
Route::prefix('admin')->group(function () {
    Route::get('/rintek/arahan', [RincianTeknisController::class, 'index_arahan'])->name('rintek.index_arahan');
    Route::get('/rintek/create-arahan', [RincianTeknisController::class, 'create_arahan'])->name('rintek.create_arahan');
    Route::get('/rintek/verifikator/arahan', [RincianTeknisController::class, 'verifikator_arahan'])->name('rintek.verifikator_arahan');
});

// Penugasan
Route::prefix('admin')->group(function () {
    Route::get('/penugasan', [PenugasanController::class, 'index'])->name('penugasan.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});
