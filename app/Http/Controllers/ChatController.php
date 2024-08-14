<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    function index() {
        $users = User::where('id', '!=', auth()->user()->id)->get();
       return view('dashboard', compact('users')); 
    }

    function fetchMessages(Request $request) {
       $contact = User::findOrFail($request->contact_id);

       return response()->json([
        'contact' => $contact
       ]);
    }

    function sendMessage(Request $request) {
       $request->validate([
        'contact_id' => ['required'],
        'message' => ['required', 'string']
       ]);

       $message = new Message();
       $message->form_id = Auth::user()->id;
       $message->to_id  = $request->contact_id;
       $message->message = $request->message;
       $message->save();

       return response($message);
    }
}
