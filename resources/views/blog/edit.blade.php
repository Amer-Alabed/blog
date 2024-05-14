@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Updata Post</div>

                <div class="card-body">
                    <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="content">Description</label>
                            <textarea class="form-control" id="content" name="description" rows="5" required> {{ $post->description }} </textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Updata</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
