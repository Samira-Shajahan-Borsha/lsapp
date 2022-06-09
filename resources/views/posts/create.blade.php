@extends('layouts.app')

@section('content')
    <h1 class="mt-3">Create Post</h1>
    <form action="{{ route('post.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="title" class="fs-3 fw-semibold">Title:
                <input class="form-control" type="text" name="title" id="" placeholder="Title">
            </label> 
        </div>
        <div class="form-group">
            <label for="body" class="fs-3 fw-semibold">Body:
                <textarea class="form-control" name="body" id="" cols="70" rows="10" placeholder="Body Text"></textarea>
            </label>
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection