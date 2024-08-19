<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // if (! in_array(request('locale'), ['en', 'hi'])) {
    //     return dd('Invalid locale');
    // }

    app()->setLocale(request('locale'));
    return view('welcome');
})->name('home');
