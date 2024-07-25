<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.index');
})->name('home');

Route::resource('customers', CustomerController::class);