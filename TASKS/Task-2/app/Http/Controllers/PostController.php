<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Create a post (static example)
    public function create()
    {
        Post::create([
            'title'   => 'My Post',
            'content' => 'Post content'
        ]);

        return 'Post Created!';
    }

    // Read all posts
    public function index()
    {
        return Post::all();
    }

    // Find post by ID
    public function show($id)
    {
        return Post::findOrFail($id);
    }

    // Update post
    public function update($id)
    {
        $post = Post::findOrFail($id);
        $post->title = 'Updated Title';
        $post->save();

        return 'Post Updated!';
    }

    // Delete post
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return 'Post Deleted!';
    }
}
