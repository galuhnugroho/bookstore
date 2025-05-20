<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('login', [AuthController::class, 'attemptLogin'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', [AuthController::class, 'registerPage'])->name('registerPage');
Route::post('register', [AuthController::class, 'attemptRegister'])->name('register');

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    });
    Route::resource('books', BookController::class);
});
