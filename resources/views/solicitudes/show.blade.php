@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($solicitud)
    <h3>Informe de solicitud #{{$solicitud['id']}}</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Codigo</th>
                <th>Equipo </th>
                <th>Descripcion</th>


                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$solicitud['id']}}</td>
                <td>{{$equipo['modelo']}}</td>
                <td>{{$solicitud['descripcion']}}</td>
                @if(Auth::user()->rol=="Administrador")
                <td><a class="btn btn-info" href="{{route('solicitudes.edit',$solicitud['id'])}}" role="button">Actualizar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['solicitudes.destroy', $solicitud['id']]
                    ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar la solicitud?")']) !!}
                {!! Form::close() !!}
                </td>
                @endif
            </tr>
        </tbody>
    </table>
    <div class="container">
      <a href="{{ route('solicitudes.index') }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    @endif
</div>
@endsection
