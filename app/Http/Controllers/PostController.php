<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    $posts = Post::all();
    return view('posts.index', ['posts' => $posts]);
}
