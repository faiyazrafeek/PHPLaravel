@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
    <h1 class="display-4">Welcome to {{ config('app.name', 'Laravel') }}</h1>
    <p>Blog post managemnt system using Laravel</p>
    <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </div>
@endsection
