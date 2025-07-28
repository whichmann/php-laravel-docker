<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return $posts;
    }

    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('blogs.my-blog', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('blogs.one-post', ['post' => $post]);
    }
}
