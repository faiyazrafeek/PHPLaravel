@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <nav class="blog-pagination">
                        <a class="btn btn-primary" href="/posts/create">Create Post</a>
                    </nav>
                    <h3 class="">Blog Posts</h3>
                    @if (count($posts)>0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Title</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td scope="row">{{$post->title}}</td>
                                        <td><a class="btn btn-outline-secondary" href="/posts/{{$post->id}}/edit">Edit</a></td>
                                        <td>
                                            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class'=>'float-right'] ) !!}

                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
