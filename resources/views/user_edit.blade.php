@extends('master')

@section('content')

@if(session()->has('message')) 
    {{ session()->get('message') }}
@endif

<h2>Edit</h2>
<form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
    @csrf
    @method('PUT') 
    <input type="text" name="firstName" id="firstName" value="{{ old('firstName', $user->firstName) }}">
    <input type="text" name="lastName" id="lastName" value="{{ old('lastName', $user->lastName) }}">
    <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}">
    
    <button type="submit">Enviar</button>
</form>

@endsection