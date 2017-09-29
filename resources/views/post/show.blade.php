@extends('layouts.master')

@section('content')
    <div class="col-sm-8">
        @include('post.post')

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        {{$comment->user->name}} on
                        {{$comment->created_at->diffForHumans()}}: &nbsp
                        {{$comment->body}}
                        <div class="col-md-offset-4">
                            <form action="/posts/{{$comment->id}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit">
                                    <i class="glyphicon-user"></i> Delete
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="card-block">
            <form action="/posts/{{$post->id}}/comment" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea class="form-control" name="body" id="body" rows="10"
                              placeholder="Your comment here"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
            </form>
        </div>
    </div>
@endsection