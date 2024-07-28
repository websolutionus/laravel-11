<?php

use App\Models\Address;
use App\Models\Post;
use App\Models\Tag;
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

    // Tag::insert([
    //     [
    //         'name' => 'Php'
    //     ],
    //     [
    //         'name' => 'Javascript'
    //     ],
    //     [
    //         'name' => 'Laravel'
    //     ],

    // ]);

    $post = Post::first();
    // $tag = Tag::first();

    // $post->tags()->sync([2,3]);

    $posts = Post::all();
    return view('post', compact('posts'));
});

Route::get('tags', function() {
    $tags = Tag::all();
    return view('tag', compact('tags'));
});