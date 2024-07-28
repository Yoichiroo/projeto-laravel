@extends('master')

@section('content')

@if(session()->has('message')) 
    {{ session()->get('message') }}
@endif

<h2>Create</h2>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="firstName" id="firstName" placeholder='Seu primeiro nome'>
    <input type="text" name="lastName" id="lastName" placeholder='Seu último nome'>
    <input type="text" name="email" id="email" placeholder='Seu email'>
    <input type="text" name="password" id="password" placeholder='Sua senha'>
    
    <button type="submit">Enviar</button>
</form>

@endsection