<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store']);
    }

    public function store(Post $post)
    {
        $post->addComment(request('body'));
        return back();
    }
}