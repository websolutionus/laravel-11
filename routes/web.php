<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});


Route::get('cache', function() {
    $users = Cache::rememberForever('users', function () {
        return User::all();
    });

    // $users = null;

    if(Cache::has('users')) {
        dd('data is in cache');
    }

    // $users = Cache::pull('users');
    return view('cache', compact('users'));
});