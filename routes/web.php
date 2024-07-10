<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Route Methods
/**
 * 1. Get - if we wanat to get data
 * 2. POST - submit/store data
 * 3. PUT - if update
 * 4. PATCH - if udate
 * 5. DELETE - when we delete something
 */

Route::get('get-route', function() {
    return;
});

Route::post('post-route', function() {
    return;
});

Route::put('put-route', function() {
    return;
});

Route::patch('patch-route', function() {
    return;
});

Route::delete('delete-route', function() {
    return;
});