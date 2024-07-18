<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;
use Illuminate\Support\Facades\File as HandleFile;

class FileUploadController extends Controller
{
    function index() {
        $file = File::find(12);
        HandleFile::delete(storage_path($file->file_path));
        $file->delete();

        $files = File::all();
        return view('file-upload', ['files' => $files]);
    }

    function store(Request $request) {

        // $file = Storage::disk('local')->put('/', $request->file('file'));
        // $file = $request->file('file')->store('/', 'local');

        $file = $request->file('file');
        $customName = 'laravel_'. Str::uuid();
        $ext = $file->getClientOriginalExtension();
        $fileName = $customName. '.' . $ext;

        $path = $file->storeAs('/', $fileName, 'dir_public');

        $fileStore = new File();
        $fileStore->file_path = '/uploads/'.$path;
        $fileStore->save();

        dd('stored');
    }

    function download() {
        return Storage::disk('local')->download('uMQzEuODGcuqtSdepuRkq8Sa4GxBi3jSc07JfyzC.png');
    }
}
