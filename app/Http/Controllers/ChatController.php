<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    function index() {
        $users = User::where('id', '!=', auth()->user()->id)->get();
       return view('dashboard', compact('users')); 
    }
}
