<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});


Route::get('cache', function() {
    Cache::put('post', 'post title one', $seconds = 5);
    $value = Cache::get('post');

    dd($value);
});