<?php

use App\Http\Controllers\PostController;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('send-mail', function() {
    return view('send-mail');
});

Route::post('send-mail', function(Request $request) {
    // Mail::raw($request->message, function($message) use ($request) {
    //     $message->to($request->email)
    //     ->subject('Laravel Test Email');
    // });

    // with queue
    Mail::to($request->email)->queue(new SendMail($request->message));

    // without queue
    Mail::to($request->email)->send(new SendMail($request->message));

    dd("Email Sent");
})->name('send.mail');