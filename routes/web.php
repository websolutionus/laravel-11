<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('customers/trash', [CustomerController::class, 'trashIndex'])->name('customers.trash');
Route::get('customers/restore/{customer}', [CustomerController::class, 'restore'])->name('customers.restore');
Route::delete('customers/trash/{customer}', [CustomerController::class, 'forceDestroy'])->name('customers.force.destroy');

Route::resource('customers', CustomerController::class);