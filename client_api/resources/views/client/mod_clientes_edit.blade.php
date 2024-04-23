@extends('layout/base')

@section('tituloPagina', 'Editar cliente')

@section('contenido')

<h1>Editar cliente</h1>
<form action="{{ route('cliente.update')}}" method="POST">
    @csrf
    <input type="hidden" name="id" id="id" value="{{ $cliente['id'] }}"> 
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ $cliente['name'] }}">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ $cliente['email'] }}">
    <label for="phone">Telefono</label>
    <input type="text" name="phone" id="phone" value="{{ $cliente['phone'] }}">
    <label for="address">Direccion</label>
    <input type="text" name="address" id="address" value="{{ $cliente['address'] }}">
    <button type="submit">Guardar</button>
</form>


@endsection
