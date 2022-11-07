@extends('layouts.main')

@section('container')
    
@foreach ($posts as $p)

<article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/posts/{{ $p->slug }}" class="text-decoration-none">
            {{ $p->title }}</a>
        </h2>

        <p>By: <a href="posts/authors/{{ $p->author->username }}" class="text-decoration-none">{{ $p->author->name }}</a> in <a href="posts/categories/{{ $p->category->slug }}" class="text-decoration-none">{{ $p->category->name }}</a></p>

    <p>{{ $p->excerpt }}</p>

    <a href="/posts/{{ $p->slug }}" class="text-decoration-none">Read More ...</a>

    <h5>Created at: {{ date('d F Y' , strtotime($p->updated_at)) }}</h5>
</article>

@endforeach

@endsection