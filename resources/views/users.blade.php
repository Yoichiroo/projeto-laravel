@extends('master')

@section('content')

    <a href="{{ route('users.create') }}">Criar</a>

    <hr>

    <h2>Usuários</h2>

    <ul>
        @foreach ($users as $user)
        <li>{{ $user->firstName }} | <a href=" {{ route('users.edit', ['user'=>$user->id]) }}">Editar</a> | <a href="">Deletar</a></li>
        @endforeach
    </ul>
@endsection