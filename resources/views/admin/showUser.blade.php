@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($usuario)
    <h3>{{$usuario['nombre']}}</h3>
    <table class="table table-striped">

        <tbody>
            <tr>
                <td>Nombre:</td>
                <td>{{$usuario['name']}}</td>
            </tr>
            <tr>
                <td>Doc. Identidad:</td>
                <td>{{$usuario['cedula']}}</td>
            </tr>
            <tr>
                <td>Dirección:</td>
                <td>{{$usuario['direccion']}}</td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td>{{$usuario['telefono']}}</td>
            </tr>
            <tr>
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
