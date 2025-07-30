<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Fetch all posts
    public function index()
    {
        return response()->json(Post::all());
    }

    // Add a new post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'body' => 'required|string',
            'space_id' => 'required|integer|exists:spaces,id',
        ]);

        $post = Post::create($validated);

        return response()->json($post, 201);
    }

    // Delete a post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json(null, 204);
    }
}