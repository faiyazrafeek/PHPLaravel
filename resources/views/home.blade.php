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
                        <a class="btn btn-primary" href="/posts">Create Post</a>
                    </nav>
                    <h3 class="">Blog Posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
