@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><h2>Post form</h2></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">{{ Form::label('title', 'Title: ') }}</div>
                            <div class="col-lg-6">{{ Form::text('title')}}</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">{{ Form::label('content', 'Content: ') }}</div>
                            <div class="col-lg-6">{{ Form::textarea('content')}}</div>
                        </div>
                        <button class="btn btn-success btn-lg" type="submit">Save changes</button>
                    <!-- Cancel Button -->
                        <a href="{{ url('/') }}" class="btn btn-danger btn-lg"  data-toggle="confirmation" role="button">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection