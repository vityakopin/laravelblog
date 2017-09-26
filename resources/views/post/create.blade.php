@extends('layouts.master')

@section('content')
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title of post">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <input type="text" class="form-control" id="body" placeholder="Body of post">
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Publicate
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection