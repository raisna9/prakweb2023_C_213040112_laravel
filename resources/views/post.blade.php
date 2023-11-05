@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->tittle }}</h2>

    <p>BY.<a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}
    
    </article>

    <a href="/Blog">Back to posts </a>
@endsection