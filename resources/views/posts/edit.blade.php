<h3 id="nav" class="page-header">Edit</h3>

<div class="panel panel-default">
    <div class="panel-body">
        {!! Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'put', 'class' => 'val-form', 'data-toggle' => 'validator')) !!}

        @include('posts.form')
        {!! Form::close() !!}
    </div>
</div>