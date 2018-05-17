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
                <td>{{$tecnico['name']}}</td>
                <td>{{$tecnico['cedula']}}</td>
                <td>{{$tecnico['id']}}</td>
                <td>{{$tecnico['telefono']}}</td>
                @if(Auth::user()->rol=="Administrador")
                <td><a class="btn btn-info" href="{{route('tecnicos.edit',$tecnico->id)}}" role="button">Actualizar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['tecnicos.destroy', $tecnico['id']]
                    ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el técnico?")']) !!}
                {!! Form::close() !!}
                </td>
                @endif
            </tr>
        </tbody>
    </table>
    @endif
</div>
@endsection
