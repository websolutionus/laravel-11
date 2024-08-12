<?php

use App\Events\NewMessage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('messages', function () {
    return view('messages');
});

Route::get('send-message', function () {
    event(new NewMessage("this is a new message!"));

    dd('Message Sent!');
});
