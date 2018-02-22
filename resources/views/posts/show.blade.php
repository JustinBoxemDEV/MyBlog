@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><h2>Post information</h2></div>
                    <div class="card-body">
                        <div class="jumbotron">
                            <h1 class="display-4">{{ $post->title }}</h1>
                            <p class="lead">{{ $post->content }}</p>
                            <hr class="my-4">
                            <p class="lead">
                                Posted on {{ $post->created_at }} by {{ $post->User->username }}
                                <br>
                                <a href="{{ url('/posts/' . $post->id . '/edit') }}" class="btn btn-warning btn-lg">Edit</a>
                                <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Home</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection