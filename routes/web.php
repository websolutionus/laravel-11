<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return "This is a About page";
})->name('my.about');

Route::get('/user/{id}/{slug}', function($id, $slug) {
    return "Hello user " . $id. '-'.$slug;
})->name('user');

Route::group(['prefix' => 'blog', 'as' => 'blog.'], function() {
    Route::get('/create', function() {
        return "Blog Create Page";
    })->name('create');

    Route::get('/edit', function() {
        return "Blog Edit Page";
    })->name('edit');

    Route::get('/show', function() {
        return "Blog Show Page";
    })->name('show');
});