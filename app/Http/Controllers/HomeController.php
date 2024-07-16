<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        User::create([
            'name' => 'test user 123',
            'email' => 'test123@gmail.com',
            'password' => '12312',
            'remember_token' => 'test123124'
        ]);

        User::insert([
            [
                'name' => 'test user 2',
                'email' => 'testuser2@gmail.com',
                'password' => '1234'
            ],
            [
                'name' => 'test user 3',
                'email' => 'testuser3@gmail.com',
                'password' => '1234'
            ],
        ]);


        return view('welcome');
    }

    function showAboutPage()
    {
        return view('about');
    }
}
