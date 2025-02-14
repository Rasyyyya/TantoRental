<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('components.index');
});

Route::resource('cars', CarController::class);
Route::get('/', [CarController::class, 'index'])->name('home');