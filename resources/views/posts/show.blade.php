@extends('layouts.app')

@section('content')
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="/posts">Go Back</a>
    </nav>
    <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <div class="blog-post-meta">{{$post->created_at}}</div>
        <p class="lead">
            {!!$post->body!!}
        </p>
        <hr>
        <a class="btn btn-outline-primary" href="/posts/{{$post->id}}/edit">Edit</a>

        {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class'=>'float-right'] ) !!}

        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    </div>
    
@endsection