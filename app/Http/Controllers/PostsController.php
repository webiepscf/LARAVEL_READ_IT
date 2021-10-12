<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')
                     ->take(10)
                     ->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function more(Request $request) {
        $posts = Post::orderBy('created_at', 'desc')
                     ->take(10)
                     ->offset($request->offset)
                     ->get();
        return view('posts._list', compact('posts'));
    }
}
