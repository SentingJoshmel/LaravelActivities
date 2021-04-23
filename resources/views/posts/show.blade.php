@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Post</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <label for="num" class="col-md-4 col-form-label text-md-right">Post Number</label>
                            <div class="col-md-6">
                                <input id="num" type="text" class="form-control" name="num" disabled value={{ $post->id }}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Title" class="col-md-4 col-form-label text-md-right">Title</label>
                            <div class="col-md-6">
                                <input id="Title" type="text" class="form-control" name="Title" disabled value={{ $post->Title }}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea id="Description" type="text" class="form-control" name="Description" disabled >{{ $post->Description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="created" class="col-md-4 col-form-label text-md-right">Created at</label>
                            <div class="col-md-6">
                                <input id="created" type="datetime" class="form-control" name="created" disabled value={{ $post->created_at }}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">Post Image</label>
                            <div class="col-md-6">
                                @if ($post->img)
                                    <img width="270px"src="{{ asset('/storage/img/'.$post->img) }} ">
                                @else
                                    No image available
                                @endif
                            </div>
                        </div>

                        <a class="btn button btn-info" href="/posts">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
