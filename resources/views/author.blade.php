@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Author : {{ $user }}</h1>

@foreach ($posts as $p)

<article class="mb-5">
    <h2>
        <a href="/posts/{{ $p->slug }}">
            {{ $p->title }}</a>
        </h2>

    <h5>By: {{ $p->author->name }}</h5>

    <p>{{ $p->excerpt }}</p>

    <h5>Created at: {{ date('d F Y' , strtotime($p->updated_at)) }}</h5>
</article>

@endforeach

<a href="/blog">Back To Post</a>

@endsection