<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        return view('contact');
    }

    function contactSubmit(Request $request) {
        $request->validate(
            [
                // 'name' => 'required|max:20|min:2',
                'name' => ['required', 'max:20', 'min:2'],

                'email' => 'required|email'
            ],
            [
                'name.required' => 'Hey please fill the name field',
                'name.max' => 'the max length of name have to be 20',
                'name.min' => 'the min length of name have to be 2',
                'email.required' => 'Hey email is required'
            ]
        );

        dd($request->all());
    }
}
