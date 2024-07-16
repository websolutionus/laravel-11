<?php

namespace App\Http\Controllers;

use App\Models\MyBlog;
use App\Models\Product;
use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $blogs = MyBlog::Active()->get();
        dd($blogs);

        return view('welcome');
    }

    function showAboutPage()
    {
        return view('about');
    }
}
