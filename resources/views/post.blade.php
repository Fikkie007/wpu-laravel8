@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post->title }}</h2>
    <p>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>
<br><br>
<a href="/blog" class="display-block mt-3">Back To Post</a>

@endsection