@extends('layouts.app')
@section('content')
    user index

    <ul>
        <li>{{ $user->name}}</li>
        <li>{{ $user->email}}</li>
        <li>{{ $user->avatar->avatar}}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" name="" value="Cancella Utente">
    </form>

    <h2>Post che ha scritto </h2>
    @foreach($user->posts as $post)
        <div>
            <p>Titolo: {{ $post->title}}</p>
            <p>Post: {{ $post->body}}</p>
        </div>
    @endforeach
@endsection
