@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Buscar equipo</h3>
    {!! Form::open(['method' => 'POST', 'route' => 'equipos.postSearch']) !!}
    <div class="form-group">
        <label for="exampleInputEmail1">Serial</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese serial">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
    {!! Form::close() !!}
    </br>
    @if($equipo)
    <h3>Resultado búsqueda</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Serial</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Ver</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$equipo['nombre']}}</td>
                <td>{{$equipo['serial']}}</td>
                <td>{{$equipo['marca']}}</td>
                <td>{{$equipo['modelo']}}</td>
                <td>{{$equipo['tipo']}}</td>
                <td><a class="btn btn-success" href="{{route('equipos.show',"1")}}" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="{{route('equipos.edit',"1")}}" role="button">Actualizar</a></td>
                <td>{!! Form::open(['method' => 'POST', 'url' => 'equipos/delete/1']) !!}
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