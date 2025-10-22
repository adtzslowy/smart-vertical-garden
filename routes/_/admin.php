<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArtikelController;

/*
|--------------------------------------------------------------------------
| Route Admin
|--------------------------------------------------------------------------
| Semua route yang berhubungan dengan dashboard admin.
| Prefix 'admin' sudah otomatis ditambahkan dari RouteServiceProvider.
*/

Route::get('/', fn() => view('admin.dashboard'))->name('admin.dashboard');

// Artikel CRUD
Route::prefix('artikel')->group(function () {
    Route::get('/', [ArtikelController::class, 'index'])->name('admin.artikel.index');
    Route::get('/create', [ArtikelController::class, 'create'])->name('admin.artikel.create');
    Route::post('/store', [ArtikelController::class, 'store'])->name('admin.artikel.store');
    Route::get('/edit/{id}', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
    Route::post('/update/{id}', [ArtikelController::class, 'update'])->name('admin.artikel.update');
    Route::delete('/delete/{id}', [ArtikelController::class, 'destroy'])->name('admin.artikel.destroy');
});

// Kategori
Route::get('/kategori', fn() => view('admin.kategori.index'))->name('admin.kategori');

// Halaman
Route::get('/halaman', fn() => view('admin.halaman.index'))->name('admin.halaman');

// Kontak
Route::get('/kontak', fn() => view('admin.kontak.index'))->name('admin.kontak');
