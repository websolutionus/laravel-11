<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/join', function() {
    $usersWithOrders = \DB::table('users')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.*', 'orders.*')
        ->get();

    dd($usersWithOrders);
});