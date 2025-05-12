<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    });
    Route::resource('books', BookController::class);
});
