<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use  App\Models\Post;
use  App\Models\User;
use  App\Models\Category;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/posts', function () {

    // $posts = Post::with(['author','category'])->latest()->get();
    $posts = Post::latest()->get();

    return view('posts',[
        'title' => 'Blog',
        'posts' => $posts
    ]);
});

Route::get('/posts/{post:slug}', function(Post $post) {

    return view('post',[
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function(User $user) {

    // $posts = $user->posts->load('category','author');

    return view('posts',[
        'title' => count($user->post) . ' Articles by '.$user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/category/{category:slug}', function(Category $category) {

    // $posts = $category->posts->load('category','author');

    return view('posts',[
        'title' => $category->name,
        'posts' => $category->posts
    ]);
});