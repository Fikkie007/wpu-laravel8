@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Author : {{ $user }}</h1>

@foreach ($posts as $p)

<article class="mb-5">
    <h2>
        <a href="/posts/{{ $p->slug }}">
            {{ $p->title }}</a>
        </h2>

        <p>By: <a href="/authors/{{ $p->author->username }}" class="text-decoration-none">{{ $p->author->name }}</a> in 
            <a href="/posts/categories/{{ $p->category->slug }}" class="text-decoration-none">{{ $p->category->name }}</a></p>

    <p>{{ $p->excerpt }}</p>

    <h5>Created at: {{ date('d F Y' , strtotime($p->updated_at)) }}</h5>
</article>

@endforeach

<a href="/blog">Back To Post</a>

@endsection