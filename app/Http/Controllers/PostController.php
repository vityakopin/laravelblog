<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();

        return view('post.index', compact('posts', 'archives'));
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
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = new Post(request([
            'title',
            'body'
        ]));
        auth()->user()->addPost($post);
        return redirect('/posts');
    }
}
