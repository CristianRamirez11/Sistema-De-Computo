@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de clientes</h3><br>
    <p>para agregar un nuevo cliente haga click <a href="{{url('clientes/create')}}">aquí</a></p>
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
            @foreach ($clientes as $cliente)
            <tr>
                <th scope="row">{{$cliente['id']}}</th>
                <td>{{$cliente['name']}}</td>
                <td>{{$cliente['telefono']}}</td>
                <td>{{$cliente['direccion']}}</td>
                <td>{{$cliente['telefono']}}</td>
                <td><a class="btn btn-success" href="{{route('clientes.show',$cliente['id'])}}" role="button">Ver</a></td>
                @if(Auth::user()->rol=="Administrador")
                <td><a class="btn btn-info" href="{{route('clientes.edit',$cliente['id'])}}" role="button">Actualizar</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
