@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Buscar cliente</h3>
    {!! Form::open(['method' => 'POST', 'route' => 'clientes.postSearch']) !!}
    <div class="form-group">
        <label for="exampleInputEmail1">Identificación</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese identificación">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
    {!! Form::close() !!}
    </br>
    @if($cliente)
    <h3>Resultado búsqueda</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Ver</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$cliente['nombre']}}</td>
                <td>{{$cliente['identificacion']}}</td>
                <td>{{$cliente['direccion']}}</td>
                <td>{{$cliente['telefono']}}</td>
                <td><a class="btn btn-success" href="{{route('clientes.show',"1")}}" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="{{route('clientes.edit',"1")}}" role="button">Actualizar</a></td>
                <td>{!! Form::open(['method' => 'POST', 'url' => 'clientes/delete/1']) !!}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
    </table>
    @endif
</div>
@endsection