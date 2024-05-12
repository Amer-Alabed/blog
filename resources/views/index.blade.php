@extends('layouts.app')

@section('content')
<div class="container-fluid bg-myself d-flex align-items-center justify-content-center" style="
    background: url('/images/4142125.jpg') center center /cover no-repeat;
    height: 100vh;
    background-attachment: fixed

">
    <div class="text-center">
        <h1 class="mt-5">Welcome to MY BLOG</h1>
        <a href="/blog" class="btn btn-primary btn-lg mt-3">Start Reading</a>
    </div>
</div>
{{-- 
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <img class="img-fluid rounded-circle shadow-lg" src="images/cat.jpeg" alt="">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div>
                <h2 class="text-primary">What the pet needs</h2>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <a href="/" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Blog Category</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="category">UI|UX</div>
        </div>
        <div class="col-md-3">
            <div class="category">BACKEND LARAVEL</div>
        </div>
        <div class="col-md-3">
            <div class="category">FRONTEND</div>
        </div>
        <div class="col-md-3">
            <div class="category">DESIGNER</div>
        </div>
    </div>
</div>

<main class="container mt-4">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <h2 class="text-center mb-4">Recent Posts</h2>
            <div class="card mb-3 bg-light">
                <div class="card-body">
                    <h5 class="card-title text-primary">Post Title 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean eu leo quam.</p>
                    <a href="/" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</main> --}}
@endsection