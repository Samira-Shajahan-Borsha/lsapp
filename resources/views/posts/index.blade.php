@extends('layouts.app')

@section('content')
    <h1 class="mt-3">Posts</h1>
    @if(count($posts) > 0 )
        @foreach ($posts as $post)
            <div class="container">
                <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                <small>Written on {{ date_format(date_create($post->created_at), 'd/M/Y h:i:s a') }}</small>
            </div>
        @endforeach
    {{-- {{ $posts->links() }} --}}
    @else
        <p>No posts found</p>
    @endif


@endsection