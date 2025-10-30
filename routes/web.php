<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    include __DIR__ . "/_/admin.php";
});

<<<<<<< HEAD
//Route untuk login
=======
// Route untuk login
>>>>>>> 02b5f9b (added: code)
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class,'loginProses'])->name('login.loginProses');
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/add-admin', [AuthController::class, 'addAdmin']);
