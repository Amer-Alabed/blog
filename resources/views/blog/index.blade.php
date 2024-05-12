@extends('layouts.app')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session()->get('success') }}
</div>
@endif
<div class="container">
    @if (Auth::check())
        <div>
            <a href="/blog/create" class="btn btn-secondary">Create Post</a>
        </div>
    @endif
    <h1 class="mt-5 mb-4">All Posts</h1>
    @foreach ($posts as $post)
    <div class="card mb-4">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/{{$post->image_path}}" class="img-fluid" alt="Blog Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text"><small class="text-muted">By: {{ $post->user->name }} | Created at: {{ date('Y-m-d', strtotime($post->created_at)) }}</small></p>
                    <p class="card-text">{{$post->discription}}</p>

                    <a href="/blog/{{$post->slug}}" class="btn btn-primary">Read More</a>

                </div>
            </div>
        </div>
    </div>
    @endforeach
    
</div>

@endsection
