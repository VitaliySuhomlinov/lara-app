<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts\Save as SaveRequest; 
use App\Models\Post;
use Illuminate\Http\Request;
#use Illuminate\Auth\Events\Validated;

class Posts extends Controller
{
    public function index()
    {
        $posts = Post::all();
    
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $post_types = config('post-types');
        return view('posts.create', [
            'post_types' => $post_types
        ]);
    }

    public function store(SaveRequest $request)
    {
        $post = Post::create($request->validated());
        return redirect("/posts/" . $post->id); #it is bad solution
    }

    public function show(string $id)
    {
        $post = Post::findOrfail($id);
        
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit(string $id)
    {
        $post = Post::findOrfail($id);
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(SaveRequest $request, string $id)
    {
        $post = Post::findOrfail($id);
        $post->update($request->validated());
        return redirect()->route('posts.show', $id);
    }

    public function destroy(string $id)
    {
        $post = Post::findOrfail($id);
        $post->delete();
        return redirect("/posts");
    }
}
