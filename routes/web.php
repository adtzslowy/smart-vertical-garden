<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', fn() => view('admin.dashboard'));
    Route::get('/artikel', fn() => view('admin.artikel.index'));
    Route::get('/kategori', fn() => view('admin.kategori.index'));
    Route::get('/halaman', fn() => view('admin.halaman.index'));
    Route::get('/kontak', fn() => view('admin.kontak.index'));
});
