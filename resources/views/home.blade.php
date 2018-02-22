@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><h2>Posts overview</h2></div>
                <div class="card-body">
                    @foreach($posts as $post)
                        <div class="jumbotron">
                            <h1 class="display-4">{{ $post->title }}</h1>
                            <p class="lead">{{ str_limit($post->content, 75) }}</p>
                            <hr class="my-4">
                            <p class="lead">
                                <a href="{{ url('/posts/' . $post->id . '') }}"><button class="btn btn-primary btn-lg">See post</button></a>
                            @if(Auth::user()->is_admin == 1 or Auth::id() == $post->User->id)
                                <a href="{{ url('/posts/' . $post->id . '/edit') }}"><button class="btn btn-warning btn-lg">Edit post</button></a>
                                {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) !!}
                                    <td>
                                        <button class="btn btn-danger btn-lg" onclick="return confirm('Are u sure u want to delete this post?')">Delete post</button>
                                    </td>
                                {!! Form::close() !!}
                            @endif
                            </p>
                            <p>Posted on {{$post->created_at}} by {{ $post->User->username}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
