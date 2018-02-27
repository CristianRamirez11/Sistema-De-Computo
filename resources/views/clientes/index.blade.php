@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de clientes</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
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
            @for ($i = 1; $i <= 10; $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>Cliente {{$i}}</td>
                <td>12345{{$i}}</td>
                <td>Calle 4{{$i}}</td>
                <td>7965{{$i}}</td>
                <td><a class="btn btn-success" href="{{route('clientes.show',$i)}}" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="{{route('clientes.edit',$i)}}" role="button">Actualizar</a></td>
                <td>{!! Form::open(['method' => 'POST', 'url' => 'clientes/delete/'.$i]) !!}
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