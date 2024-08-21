<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\BlogStoreRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index() {
        $posts = Blog::all();
        return response()->json($posts, 200);
    }

    function store(BlogStoreRequest $request) {
        $post = new Blog();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->author_id = $request->author_id;
        $post->save();
        return response()->json($post, 201);
    }

    function show($id) {
        $post = Blog::findOrFail($id);
        return response()->json($post, 200);
    }

    function update(Request $request, $id) {
        
        $post = Blog::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->author_id = $request->author_id;
        $post->save();
        return response()->json(['message' => 'Updated Successfully'], 200);
    }

    function destroy($id) {
       $post = Blog::findOrFail($id);
       $post->delete();
       
       return response()->json(['message' => 'Deleted Successfully'], 200);
    }
}
