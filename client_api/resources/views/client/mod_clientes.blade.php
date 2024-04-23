@extends('layout/base')

@section('tituloPagina', 'Clientes')

@section('contenido')

<div class="card mt-5">
  <h5 class="card-header"> CRUD CON LARAVEL</h5>
  <div class="card-body">
      <div class="row">
          <div class="col-sm-12">
            <!--aqui va el mensaje-->
          </div>
      </div>
      <h5 class="card-tittle text-center"> listado de clientes</h5>
      <p>
          <a href="{{ route("cliente.create") }}" class="btn btn-primary">
              <span><i class="bi bi-person-fill-add"></i></span> Agregar nuevo registro
          </a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $cliente)
                    <tr>
                        <td>{{ $cliente['id'] }}</td>
                        <td>{{ $cliente['name'] }}</td>
                        <td>{{ $cliente['email'] }}</td>
                        <td>{{ $cliente['phone'] }}</td>
                        <td>{{ $cliente['address'] }}</td>
                        <td>
                          <a href="{{ route("cliente.view", $cliente['id']) }}">ver</a>
                          <a href="{{ route("cliente.delete", $cliente['id']) }}">borrar</a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
      </p>
  </div>
</div>


@endsection