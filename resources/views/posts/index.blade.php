@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0 )
    <div class="list-group">
        @foreach($posts as $post)
            <a href="/posts/{{$post->id}}" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$post->title}}</h5>
                <small>{{$post->created_at}}</small>
              </div>
              <!--<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>-->
              <small>by {{$post->user->name}}</small>
            </a>
        @endforeach
    </div>
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection


