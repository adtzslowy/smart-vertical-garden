<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Route Admin
|--------------------------------------------------------------------------
| Semua route yang berhubungan dengan dashboard admin.
| Prefix 'admin' sudah otomatis ditambahkan dari RouteServiceProvider.
*/

Route::get('/', action: [DashboardController::class, 'index']);
Route::get('profile', [DashboardController::class, 'profil']);
Route::get('profile/edit/{id}', [DashboardController::class, 'edit']);
Route::put('profile/{id}', [DashboardController::class, 'update']);

// Artikel CRUD
Route::prefix('artikel')->group(function () {
    Route::get('/', [ArtikelController::class, 'index'])->name('admin.artikel.index');
    Route::get('/create', [ArtikelController::class, 'create'])->name('admin.artikel.create');
    Route::post('/', [ArtikelController::class, 'store'])->name('admin.artikel.store');
    Route::get('/edit/{id}', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
    Route::put('/{id}', [ArtikelController::class, 'update'])->name('admin.artikel.update');
    Route::delete('/delete/{id}', [ArtikelController::class, 'destroy'])->name('admin.artikel.destroy');
    Route::get('/show/{id}', [ArtikelController::class, 'show']);
});

// Kategori
Route::get('/kategori', fn() => view('admin.kategori.index'))->name('admin.kategori');

// Halaman
Route::get('/halaman', fn() => view('admin.halaman.index'))->name('admin.halaman');

// Kontak
Route::get('/kontak', fn() => view('admin.kontak.index'))->name('admin.kontak');
