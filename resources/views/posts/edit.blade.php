@extends('layouts.app')

@section('content')
    <h1 class="mt-3">Edit Post</h1>
    <form action="{{ route('post.update', $post->id) }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="title" class="fs-3 fw-semibold">Title:
                <input class="form-control" type="text" name="title" value="{{ $post->title }}" id="" placeholder="Title" size="100">
            </label> 
        </div>
        <div class="form-group">
            <label for="body" class="fs-3 fw-semibold">Body:
                <textarea class="form-control" id="" cols="70" name="body" rows="10" placeholder="Body Text">{{ $post->body }}</textarea>
            </label>
        </div><br>
        <button type="submit" class="btn btn-primary">Update</button>
       

    </form>
@endsection