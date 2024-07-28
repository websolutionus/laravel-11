<?php

use App\Models\Address;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function() {
    $users = User::all();
    return view('test', compact('users'));
});

Route::get('/posts', function() {

    // Post::insert([
    //     [
    //         'user_id' => 1,
    //         'name' => 'Learn Laravel'
    //     ],
    //     [
    //         'user_id' => 1,
    //         'name' => 'Learn Javascript'
    //     ],
    //     [
    //         'user_id' => 2,
    //         'name' => 'Learn PHP'
    //     ],

    // ]);

    $posts = Post::all();
    return view('post', compact('posts'));
});