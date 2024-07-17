<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        return view('contact');
    }

    function contactSubmit(Request $request) {
        $request->validate([
            'name' => 'required|max:20|min:2',
            'email' => 'required|email'
        ]);

        dd($request->all());
    }
}
