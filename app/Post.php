<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        $postId = $this->getAttribute('id');
        $comment = new Comment([
            'body' => $body,
            'post_id' => $postId
        ]);
        auth()->user()->addComment($comment);
    }
}
