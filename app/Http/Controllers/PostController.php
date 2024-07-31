<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() {
        return response()->file(public_path('uploads/1_BuLDBIovfqIwm2swvYid0A.png'));
    }

    function create() {
        // return redirect()->back();
    }
}
