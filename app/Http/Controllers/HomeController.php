<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {

        $products = DB::table('products')->avg('price');

        dd($products);
        

        return view('welcome');
    }

    function showAboutPage()
    {
        return view('about');
    }
}
