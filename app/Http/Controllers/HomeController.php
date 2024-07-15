<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {

        DB::table('users')->insert(
            [
                [
                    'name' => 'Artik123',
                    'email' => 'artik123@gmail.com',
                    'password' => '1234'
                ], 
                [
                    'name' => 'Jhohan',
                    'email' => 'johan@gmail.com',
                    'password' => '1234'
                ]
            ]
        );

        return view('welcome');
    }

    function showAboutPage()
    {
        return view('about');
    }
}
