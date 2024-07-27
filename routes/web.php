<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/join', function() {
    // $usersWithOrders = \DB::table('users')
    //     ->join('orders', 'users.id', '=', 'orders.user_id')
    //     ->select('users.*', 'orders.*')
    //     ->get();

    // $usersWithOrders = \DB::table('users')
    //     ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
    //     ->select('users.name', 'orders.product_name')
    //     ->get();

    $ordersWithUsers = \DB::table('orders')
        ->rightJoin('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.product_name', 'users.name')
        ->get();

    dd($ordersWithUsers);
});