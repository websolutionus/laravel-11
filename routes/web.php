<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/relation', function() {
    $users = User::all();
    return view('test', compact('users'));
});