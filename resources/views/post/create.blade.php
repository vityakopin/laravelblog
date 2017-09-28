@extends('layouts.master')

@section('content')
    <div class="col-sm-8">
            <form method="post" action="/posts/">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" required id="title" name="title" placeholder="Title of post">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea type="text" class="form-control" id="body" name="body" placeholder="Body of post"></textarea>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Publicate
                    </label>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
                </div>
                @include('layouts.errors')
            </form>
    </div><!-- create form  -->
@endsection