<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function(){
    $title = "Contact Page!";
    $description = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod cupiditate cumque doloribus temporibus, quasi quae reiciendis qui, inventore consectetur a vitae debitis? Magni facilis quisquam dolore sapiente sed nisi accusamus!";

    $books = ["Deep work", "Steal like a artist", "Story Brand"];

    return view('contact.index', ['title' => $title, 'description' => $description, 'books' => $books]);
});