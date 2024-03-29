<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PostsController::class, 'index'])
     ->name('homepage');

Route::get('/posts', [\App\Http\Controllers\PostsController::class, 'index'])
     ->name('posts.index');

Route::get('/posts/{post}/{slug}', [\App\Http\Controllers\PostsController::class, 'show'])
     ->name('posts.show');

Route::get('/ajax/posts', [\App\Http\Controllers\PostsController::class, 'more'])
->name('ajax.posts.more');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
