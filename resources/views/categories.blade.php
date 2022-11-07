@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories</h1>

@foreach ($categories as $p)

<ul>
    <li>
    <h2>
        <a href="posts/categories/{{ $p->slug }}">
            {{ $p->name }}</a>
        </h2>
    </li>
    </ul>

@endforeach
<br><br>
<a href="/blog">Back To Post</a>

@endsection