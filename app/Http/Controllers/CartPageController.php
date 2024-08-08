<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartPageController extends Controller
{
    function index() {
       return view('pages.cart'); 
    }
}
