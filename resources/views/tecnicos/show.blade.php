@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($tecnico)
    <h3>{{$tecnico['nombre']}}</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Código</th>
                <th>Teléfono</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$tecnico['nombre']}}</td>
                <td>{{$tecnico['identificacion']}}</td>
                <td>{{$tecnico['codigo']}}</td>
                <td>{{$tecnico['telefono']}}</td>
                <td><a class="btn btn-info" href="{{route('tecnicos.edit',"1")}}" role="button">Actualizar</a></td>
                <td>{!! Form::open(['method' => 'POST', 'url' => 'tecnicos/delete/1']) !!}
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