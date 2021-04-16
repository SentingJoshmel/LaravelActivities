@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="Title" type="text" class="form-control" name="Title" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="Description" type="text" class="form-control" name="Description" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
