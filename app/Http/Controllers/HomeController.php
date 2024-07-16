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
        // Product::find(1)->delete();
        $products = Product::onlyTrashed()->get();
        dd($products);

        return view('welcome');
    }

    function showAboutPage()
    {
        return view('about');
    }
}
