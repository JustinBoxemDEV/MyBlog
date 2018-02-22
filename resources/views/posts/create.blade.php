{{ Form::open(array('route' => 'posts.store')) }}
    @include('posts.form');
{{ Form::close() }}