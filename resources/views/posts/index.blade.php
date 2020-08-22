@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    @if (count($posts) > 0)
    @foreach ($posts as $post)
    <div class="jumbotron">
        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</h3>
        <small>written on {{ $post->created_at }} by{{ $post->user->name }}</small>
    </div>
    @endforeach
    {{ $posts->Links() }}
    @else
    <p>No posts found</p>
   @endif
@endsection