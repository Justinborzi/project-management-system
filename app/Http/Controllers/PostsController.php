<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function show($slug) {
        return view('blog.posts', [
            "posts" => Post::where('slug', $slug)->firstOrFail()
        ]);
    }

    public function showAll() {
        return view('blog.index', [
            "posts" => Post::all()     
        ]);
    }
}
