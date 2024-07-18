<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    function index() {
        return view('file-upload');
    }

    function store(Request $request) {

        // $file = Storage::disk('local')->put('/', $request->file('file'));
        // $file = $request->file('file')->store('/', 'local');
        $file = $request->file('file')->store('/', 'public');


        dd($file);
    }
}
