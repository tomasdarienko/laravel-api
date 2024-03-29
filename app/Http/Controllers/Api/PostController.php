<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return response()->json([

            'success' => true,
            'results' => $posts,

        ]);
    }
    public function show($slug){
        $post = Post::with('type','technologies')->where('slug',$slug)->first();

        return response()->json([
            'success'=> true,
            'post'=> $post
        ]);
    }
}
