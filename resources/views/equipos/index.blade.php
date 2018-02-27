@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de equipos</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
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
            @for ($i = 1; $i <= 10; $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>Equipo {{$i}}</td>
                <td>123DE45{{$i}}</td>
                <td>Marca {{$i}}</td>
                <td>Modelo {{$i}}</td>
                <td>Tipo 1</td>
                <td><a class="btn btn-success" href="{{route('equipos.show',$i)}}" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="{{route('equipos.edit',$i)}}" role="button">Actualizar</a></td>
                <td>{!! Form::open(['method' => 'POST', 'url' => 'equipos/delete/'.$i]) !!}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection