<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPosts;

  // ROUTE PAR DEFAUT
  // PATTERN: /
  // CTRL: Posts
  // ACTION: index
    Route::get('/admin/posts', [AdminPosts::class, 'index'])->name('admin.posts.index');
