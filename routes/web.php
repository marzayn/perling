<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalSidangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PenugasanController;
use App\Http\Controllers\PerizinanLingkunganController;
use App\Http\Controllers\Persetujuan\AddendumController;
use App\Http\Controllers\Persetujuan\AmdalController;
use App\Http\Controllers\Persetujuan\DelhController;
use App\Http\Controllers\Persetujuan\DplhController;
use App\Http\Controllers\Persetujuan\KerangkaController;
use App\Http\Controllers\Persetujuan\RklController;
use App\Http\Controllers\Persetujuan\UklController;
use App\Http\Controllers\PersetujuanTeknisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RincianTeknisController;
use App\Http\Controllers\SuratArahanController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return response()->view('/frontend/404', [], 404);
});

Route::get('/', function () {
    return view('/frontend/home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/news/detail', function () {
    return view('/frontend/news_detail');
});

Route::get('/news', function () {
    return view('/frontend/news');
});

Route::get('/surat/pertek/penerimaan', function () {
    return view('/pertek/subkel/surat_penerimaan');
});

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/detail', [NewsController::class, 'detail'])->name('news.detail');

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
    Route::get('/pertek/slo', [PersetujuanTeknisController::class, 'index_slo'])->name('pertek.index_slo');
    Route::get('/pertek/detail-slo', [PersetujuanTeknisController::class, 'detail_slo'])->name('pertek.detail_slo');
    Route::get('/pertek/create-arahan', [PersetujuanTeknisController::class, 'create_arahan'])->name('pertek.create_arahan');
    Route::get('/pertek/verifikator/arahan', [PersetujuanTeknisController::class, 'verifikator_arahan'])->name('pertek.verifikator_arahan');
    Route::get('/pertek/user/arahan', [PersetujuanTeknisController::class, 'user_arahan'])->name('pertek.user_arahan');
    Route::get('/pertek/emisi', [PersetujuanTeknisController::class, 'index_emisi'])->name('pertek.index_emisi');
    Route::get('/pertek/emisi/detail', [PersetujuanTeknisController::class, 'detail_emisi'])->name('pertek.detail_emisi');
    Route::get('/pertek/airlimbah', [PersetujuanTeknisController::class, 'index_airlimbah'])->name('pertek.index_airlimbah');
    Route::get('/pertek/limbahb3', [PersetujuanTeknisController::class, 'index_limbahb3'])->name('pertek.index_limbahb3');
});

//rintek
Route::prefix('admin')->group(function () {
    Route::get('/rintek/arahan', [RincianTeknisController::class, 'index_arahan'])->name('rintek.index_arahan');
    Route::get('/rintek/create-arahan', [RincianTeknisController::class, 'create_arahan'])->name('rintek.create_arahan');
    Route::get('/rintek/verifikator/arahan', [RincianTeknisController::class, 'verifikator_arahan'])->name('rintek.verifikator_arahan');
});

//rintek
Route::prefix('admin')->group(function () {
    Route::get('/jadwal', [JadwalSidangController::class, 'index'])->name('jadwal.index');
    Route::get('/jadwal/create', [JadwalSidangController::class, 'create'])->name('jadwal.create');
});

// Penugasan
Route::prefix('admin')->group(function () {
    Route::get('/penugasan', [PenugasanController::class, 'index'])->name('penugasan.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/news', [NewsController::class, 'index_newsvideo'])->name('news.index_newsvideo');
    Route::get('/news/create', [NewsController::class, 'create_newsvideo'])->name('news.create_newsvideo');
});

Route::prefix('admin')->group(function () {
    Route::get('/kerangka', [KerangkaController::class, 'index'])->name('persetujuan.kerangka.index');
    Route::get('/kerangka/create', [KerangkaController::class, 'create'])->name('persetujuan.kerangka.create');
});

Route::prefix('admin')->group(function () {
    Route::get('/amdal', [AmdalController::class, 'index'])->name('persetujuan.amdal.index');
    Route::get('/amdal/detail', [AmdalController::class, 'detail'])->name('persetujuan.amdal.detail');
});

Route::prefix('admin')->group(function () {
    Route::get('/ukl', [UklController::class, 'index'])->name('persetujuan.ukl.index');
    Route::get('/ukl/detail', [UklController::class, 'detail'])->name('persetujuan.ukl.detail');
});

Route::prefix('admin')->group(function () {
    Route::get('/rkl', [RklController::class, 'index'])->name('persetujuan.rkl.index');
    Route::get('/rkl/detail', [RklController::class, 'detail'])->name('persetujuan.rkl.detail');
});

Route::prefix('admin')->group(function () {
    Route::get('/addendum', [AddendumController::class, 'index'])->name('persetujuan.addendum.index');
    Route::get('/addendum/detail', [AddendumController::class, 'detail'])->name('persetujuan.addendum.detail');
});

Route::prefix('admin')->group(function () {
    Route::get('/delh', [DelhController::class, 'index'])->name('persetujuan.delh.index');
    Route::get('/delh/detail', [DelhController::class, 'detail'])->name('persetujuan.delh.detail');
});

Route::prefix('admin')->group(function () {
    Route::get('/dplh', [DplhController::class, 'index'])->name('persetujuan.dplh.index');
    Route::get('/dplh/detail', [DplhController::class, 'detail'])->name('persetujuan.dplh.detail');
});


