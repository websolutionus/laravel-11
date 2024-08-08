<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductPageController::class, 'index'])->name('home');
Route::get('/product-details/{id}', [ProductPageController::class, 'show'])->name('product-details');
// cart routes
Route::post('/add-to-cart/{id}', [AddToCartController::class, 'store'])->name('add-to-cart');
Route::get('/dashboard', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('product', ProductController::class);
