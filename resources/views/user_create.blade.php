@extends('master')

@section('content')

@if(session()->has('message')) 
    {{ session()->get('message') }}
@endif

<h2>Edit</h2>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="firstName" id="firstName">
    <input type="text" name="lastName" id="lastName">
    <input type="text" name="email" id="email" >
    
    <button type="submit">Enviar</button>
</form>

@endsection