<?php

use App\Models\Address;
use App\Models\Country;
use App\Models\Post;
use App\Models\State;
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


Route::get('location', function() {
    // $country = new Country(['name' => 'United States']);
    // $country->save();

    // $state = new State(['name' => 'Califonia']);
    // $country->states()->save($state);

    // $state->cities()->createMany([
    //     ['name' => 'Los Angeles'],
    //     ['name' => 'San Francisco']
    // ]);

    $country = Country::first();

    return view('location', compact('country'));
});

Route::get('image', function() {
    // $user = User::find(1);
    // $user->image()->create([
    //     'path' => '/upload/user_one.jpg'
    // ]);

    $user = User::find(1);
    // $post->image()->create([
    //     'path' => '/upload/post_one.jpg'
    // ]);

    return $user->image;


    // dd($user);
});