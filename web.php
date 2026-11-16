<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', [CarController::class, 'home'])->name('home');
Route::resource('cars', CarController::class);
