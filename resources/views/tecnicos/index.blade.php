@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de técnicos</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Código</th>
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
                <td>Téncico {{$i}}</td>
                <td>12345{{$i}}</td>
                <td>ABC{{$i}}</td>
                <td>7965{{$i}}</td>
                <td><a class="btn btn-success" href="{{route('tecnicos.show',$i)}}" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="{{route('tecnicos.edit',$i)}}" role="button">Actualizar</a></td>
                <td>{!! Form::open(['method' => 'POST', 'url' => 'tecnicos/delete/'.$i]) !!}
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