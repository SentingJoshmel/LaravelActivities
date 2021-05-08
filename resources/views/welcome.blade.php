@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card" >
                    <div class="card-body justify-content-center">
                        <div class="col-md-6">
                            @if ($post->img)
                                <img width="600px"src="{{ asset('/storage/img/'.$post->img) }} ">
                            @else
                                No image available
                            @endif
                        </div>
                        <h5 class="card-title"><strong>Post Title: {{ $post->Title }}</strong></h5>
                        <p class="card-text">Post Description: {{ $post->Description }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection