<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        return view('contact');
    }

    function contactSubmit(Request $request) {
        echo $request->name;
    }
}
