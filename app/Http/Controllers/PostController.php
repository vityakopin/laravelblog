<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('post.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::create(request(['title','body']));
        return redirect('/posts');
    }
}
