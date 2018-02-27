@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($equipo)
    <h3>{{$equipo['nombre']}}</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Serial</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
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