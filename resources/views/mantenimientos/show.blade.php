@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($mantenimiento)
    <h3>Informe de mantenimiento #{{$mantenimiento['id']}}</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Codigo</th>
                <th>Equipo al que se le realiza</th>
                <th>Tecnico que lo realiza</th>
                <th>Tipo de mantenimiento</th>
                <th>Descripcion</th>
                <th>Hora</th>

                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$mantenimiento['codigo']}}</td>
                <td>{{$equipo['modelo']}}</td>
                <td>{{$tecnico['name']}}</td>
                <td>{{$mantenimiento['tipo_de_mantenimiento']}}</td>
                <td>{{$mantenimiento['descripcion']}}</td>
                <td>{{$mantenimiento['hora']}}</td>
                <td><a class="btn btn-info" href="{{route('mantenimientos.edit',$mantenimiento['id'])}}" role="button">Actualizar</a></td>
                @if(Auth::user()->rol=="Administrador")
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['mantenimientos.destroy', $mantenimiento['id']]
                    ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el informe?")']) !!}
                {!! Form::close() !!}
                </td>
                @endif
            </tr>
        </tbody>
    </table>
    @if(Auth::user()->rol == "Administrador")
    <div class="container">
      <a href="{{ route('mantenimientos.index') }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    @endif
    @if(Auth::user()->rol == "Cliente")
    <div class="container">
      <a href="{{ route('solicitudes.show', $mantenimiento->codigo) }}" class="btn btn-primary btn-block" role="button">Volver a la solicitud</a>
    </div>
    @endif
    @if(Auth::user()->rol == "Tecnico")
    <div class="container">
      <a href="{{ route('mantenimientos.listMine', Auth::user()->id) }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    @endif
    @endif
</div>
@endsection
