<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminPosts extends Controller
{
    /**
     * [index description]
     * @param  integer $limit [description]
     * @return [type]         [description]
     */
    public function index() {
      return view('admin.posts.index');
    }
    
}
