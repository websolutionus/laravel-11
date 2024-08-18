<?php

use App\Facades\Notification;
use App\Http\Controllers\SampleController;
use App\Services\NotificationService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('test', SampleController::class);


// Route::get('test', function() {
//     dd(app());
// });

Route::get('get', function() {
    // $notification = app(NotificationService::class);
    // dd($notification->send('Hello', 'test@example.com'));
    // notification::send('Hello', 'test@example.com');
    $notification = Notification::send('Hello', 'test@example.com');
    dd($notification);
});

