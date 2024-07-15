<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {

        $blogs = DB::table('blogs')->pluck('title', 'id')->toArray();
        dd($blogs);

        return view('welcome');
    }

    function showAboutPage()
    {
        return view('about');
    }
}
