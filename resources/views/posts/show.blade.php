@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary mt-3">Go Back</a>
    <h1 class="mt-3">{{ $post->title }}</h1>
    <div>
        {{ $post->body }}
    </div>
    <hr>
    <small>Written on: {{ $post->created_at }}</small><hr>
    <a href="/post/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

    <a href="/posts/{{ $post->id }}/delete" class="btn btn-danger">Delete</a>
@endsection