@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>

@foreach ($posts as $p)

<article class="mb-5">
    <h2>
        <a href="/posts/{{ $p->slug }}">
            {{ $p->title }}</a>
        </h2>

    <a href="/authors/{{ $p->author->username }}"><h5>By: {{ $p->author->name }}</h5>
    </a>

    <p>{{ $p->excerpt }}</p>

    <h5>Created at: {{ date('d F Y' , strtotime($p->updated_at)) }}</h5>
</article>

@endforeach

<a href="/blog">Back To Post</a>

@endsection