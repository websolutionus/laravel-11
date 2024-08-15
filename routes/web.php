<?php

use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('test', SampleController::class);


Route::get('test', function() {
    dd(app());
});

Route::get('get', function() {
    app()->make('first_class');
});