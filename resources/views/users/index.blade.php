@extends('layouts.app')
@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    user index

    <h2>Elenco Utenti </h2>
    @foreach($user as $user)
        <ul>
            <li>{{ $user->name}}</li>
            <li>{{ $user->email}}</li>
            <li>{{ $user->avatar->avatar}}</li>
            <li><a href="{{ route('users.show', $user->id)}}">dettagli</a></li>
        </ul>
    @endforeach
@endsection
