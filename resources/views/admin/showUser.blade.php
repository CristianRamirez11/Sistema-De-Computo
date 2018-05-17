@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($usuario)
    <h3>{{$usuario['nombre']}}</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$usuario['name']}}</td>
                <td>{{$usuario['cedula']}}</td>
                <td>{{$usuario['direccion']}}</td>
                <td>{{$usuario['telefono']}}</td>
                <td><a class="btn btn-info" href="{{route('admin.edit',$usuario['id'])}}" role="button">Actualizar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['admin.destroy', $usuario['id']]
                    ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el usuario?")']) !!}
                {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
    </table>
    @endif
</div>
@endsection
