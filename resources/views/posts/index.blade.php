@extends('layouts.app')
@section('content')
    <h2>Elenco Post</h2>
@foreach ($posts as $post)
    <div>
        <p>Titolo: {{ $post->title}}</p>
        <p>Articolo: {{ $post->body}}</p>
    </div>
@endforeach
@endsection
