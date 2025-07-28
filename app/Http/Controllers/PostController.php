<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return $posts;
    }
}
