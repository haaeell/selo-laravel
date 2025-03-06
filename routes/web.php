<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BayiController;
use App\Http\Controllers\IbuHamilController;
use App\Http\Controllers\LansiaController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'landingpage'])->name('landingpage');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('bayi', BayiController::class);
    Route::resource('ibu-hamil', IbuHamilController::class);
    Route::resource('lansia', LansiaController::class);
    Route::resource('dokumentasi', DokumentasiController::class);
  
});

Route::get('/home/dokumentasi', [HomepageController::class, 'dokumentasi'])->name('home.dokumentasi');
Route::get('/home/dokumentasi/{id}', [HomepageController::class, 'detailDokumentasi'])->name('home.dokumentasi.detail');
Route::get('/home/organisasi/{nama}', [HomepageController::class, 'organisasi'])->name('home.organisasi');
Route::get('/home/kontak', [HomepageController::class, 'kontak'])->name('home.kontak');
