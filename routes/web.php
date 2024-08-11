<?php

use App\Jobs\SendWelcomeEmail;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send', function() {
    $user = User::find(1);
    dispatch(new SendWelcomeEmail($user));
    dd('Email sent');
});