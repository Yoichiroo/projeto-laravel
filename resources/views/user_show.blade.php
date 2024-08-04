@extends('master')

@section('content')
    <h2>Usuário - {{$user -> firstName}}</h2>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button>
    </form>
@endsection