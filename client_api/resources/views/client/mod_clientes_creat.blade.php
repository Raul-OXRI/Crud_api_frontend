@extends('layout/base')

@section('tituloPagina', 'Crear clientes')

@section('contenido')

<div class="card mt-5">
    <h5 class="card-header"> <span><i class="bi bi-people-fill"></i></span> CREAR USUARIO </h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route("cliente.store") }}" method="post">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="name" id="name" class="form-control">
                <label for="">Email</label>
                <input type="text" name="email" id="email" class="form-control">
                <label for="">Telefono</label>
                <input type="text" name="phone" id="phone" class="form-control">
                <label for="">Direccion</label>
                <input type="text" name="address" id="address" class="form-control">
                <br>
                <a href="{{ route("cliente.index") }}" class="btn btn-secondary">
                    <span><i class="bi bi-arrow-return-left"></i></span> regresar
                </a>
                <button class="btn btn-success">
                    Agregar
                </button>
            </form>
            
        </p>
    </div>
</div>

@endsection