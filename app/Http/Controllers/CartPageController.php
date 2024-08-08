<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartPageController extends Controller
{
    function index() {
        $products = Session::get('cart', []);
       return view('pages.cart', compact('products')); 
    }
}
