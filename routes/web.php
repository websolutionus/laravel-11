<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post', [PostController::class, 'index'])->name('post.index');

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

