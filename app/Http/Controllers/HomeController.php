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
        // Create data in db
        // $user = new User();
        // $user->name = 'Artik';
        // $user->email = 'artik@gmail.com';
        // $user->password = '12345';
        // $user->save();
        $product = new Product();
        $product->name = 'Car';
        $product->description = 'this is a test description';
        $product->price = 100;
        $product->save();

        return view('welcome');
    }

    function showAboutPage()
    {
        return view('about');
    }
}
