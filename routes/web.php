<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenugasanController;
use App\Http\Controllers\PerizinanLingkunganController;
use App\Http\Controllers\PersetujuanTeknisController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::controller(DashboardController::class)->group(function () {
//     Route::get('/', 'index')->name('index');
// });



// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// login
Route::get('/auth/login', [LoginController::class, 'index'])->name('login.index');

// Perizinan
Route::prefix('admin')->group(function () {
    Route::get('/pertek/arahan', [PersetujuanTeknisController::class, 'index_arahan'])->name('pertek.index_arahan');
    Route::get('/create/arahan', [PersetujuanTeknisController::class, 'create_arahan'])->name('pertek.create_arahan');
    Route::get('/verifikator/arahan', [PersetujuanTeknisController::class, 'verifikator_arahan'])->name('pertek.verifikator_arahan');
    Route::get('/user/arahan', [PersetujuanTeknisController::class, 'user_arahan'])->name('pertek.user_arahan');
    Route::get('/pertek/emisi', [PersetujuanTeknisController::class, 'index_emisi'])->name('pertek.index_emisi');
    Route::get('/pertek/airlimbah', [PersetujuanTeknisController::class, 'index_airlimbah'])->name('pertek.index_airlimbah');
    Route::get('/pertek/limbahb3', [PersetujuanTeknisController::class, 'index_limbahb3'])->name('pertek.index_limbahb3');
});

// Penugasan
Route::prefix('admin')->group(function () {
    Route::get('/penugasan', [PenugasanController::class, 'index'])->name('penugasan.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});
