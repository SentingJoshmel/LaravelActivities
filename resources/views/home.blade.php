@extends('layouts.app')


@section('content')

<div class="container">
    @foreach ($posts as $post)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Post Title: {{ $post->Title }}</h5>
          <p class="card-text">Post Description: {{ $post->Description }}</p>
          <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
        </div>
      </div>
    @endforeach
    
</div>
    
@endsection