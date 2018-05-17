@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de usuarios</h3><br>
    <p>para agregar un nuevo usuario haga click <a href="{{route('admin.create')}}">aquí</a></p>
    @if(Session::has('flash_message'))
        <article class="alert alert-success">
              {{ Session::get('flash_message') }}
        </article>

    @endif


    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <th scope="row">{{$usuario['id']}}</th>
                <td>{{$usuario['name']}}</td>
                <td>{{$usuario['telefono']}}</td>
                <td>{{$usuario['direccion']}}</td>
                <td>{{$usuario['telefono']}}</td>
                <td><a class="btn btn-success" href="{{route('admin.show',$usuario['id'])}}" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="{{route('admin.edit',$usuario['id'])}}" role="button">Actualizar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
