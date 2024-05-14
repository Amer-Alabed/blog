@extends('layouts.app')

@section('content')

<div class="container mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-4">
            <img src="/images/{{ $post->image_path }}" class="img-fluid" alt="Blog Image">
        </div>
        <div class="col-md-8">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">
                <small class="text-muted">
                    By: {{ $post->user->name }} | Created at: {{ date('Y-m-d', strtotime($post->created_at)) }}
                </small>
            </p>
            <p class="card-text">{{ $post->description }}</p>
            @if(Auth::user() && Auth::user()->id == $post->user_id)
            <a href="/blog/{{ $post->slug }}/edit" class="btn btn-primary">Edit Post</a>

            <form action="/blog/{{$post->slug}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete Post</button>
            </form>



            @endif
        </div>
    </div>
</div>

@endsection
