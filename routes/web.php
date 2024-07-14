<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'showAboutPage']);

Route::get('/single-action', SingleActionController::class);