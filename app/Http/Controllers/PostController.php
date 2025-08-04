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
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('blogs.my-blog', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        $post->load('space');
        return view('blogs.one-post', ['post' => $post]);
    }

    public function createPost()
    {
        $spaces = Space::all();
        return view('blogs.add-post', ["spaces" => $spaces]);
    }

    public function deletePost(Post $post)
    {
        $post->delete();
        return redirect()->route('all-my-posts')->with('success', 'Post deleted successfully!');
    }
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