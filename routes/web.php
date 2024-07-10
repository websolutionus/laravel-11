<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return "This is a About page";
});

Route::get('/user/{id}/{slug}', function($id, $slug) {
    return "Hello user " . $id. '-'.$slug;
});