<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')
            ->latest()
            ->simplePaginate(5);
        return view('post.index', [
            'posts' => $posts
    ]);
    }
    public function create()
    {
        return view('post.create');
    }
    public function show(Post $post)
    {
        return view('post.show', ['post' => $post]);
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required']
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => 1
        ]);
        return redirect('/posts');
    }
    public function edit(Post $post)
    {
        return view('post.edit', ['post' => $post]);
    }
    public function update(Post $post)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required']
        ]);
        //auth (on hold)

        $post->update([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => 1
        ]);
        return redirect('/posts/'. $post->id);
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
