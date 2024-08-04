<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});


Route::get('session', function(Request $request) {
    // request()->session()->put('foo', ['php', 'laravel', 'vue']);
    // session(['cart' => ['product 1', 'product 2', 'product 3']]);
    Session::put('test', 'bar');


    return view('session');
});