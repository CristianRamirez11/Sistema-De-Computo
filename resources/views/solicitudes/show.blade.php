@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>

    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th colspan="8"><h3>Informe de solicitud #{{$solicitud['id']}}</h3></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><h4>Codigo:</h4></td>
                <td>{{$solicitud['id']}}</td>
            </tr>
            <tr>
                <td><h4>Equipo:</h4> </td>
                <td>{{$equipo['modelo']}}</td>
            </tr>
            <tr>
                <td><h4>Descripcion:</h4></td>
                <td>{{$solicitud['descripcion']}}</td>
            </tr>
            <tr>
                <td><h4>Estado de la solicitud:</h4></td>
                <td>{{$solicitud['estado']}}</td>
            </tr>
            <tr>
                <td><h4>Técnico asignado:</h4></td>
                <td>{{$tecnico->name}}</td>
            </tr>
            <tr>
                <td><h4>Informe de mantenimiento:</h4></td>
                @if($solicitud->idMantenimiento>0)
                <td><a class="btn btn-info" href="{{route('mantenimientos.show',$solicitud['idMantenimiento'])}}" role="button">Ver informe</a></td>

                @else
                <td>Aún no se ha generado el informe</td>
                @endif
            </tr>
            <tr>
                  @if(Auth::user()->rol=="Cliente")
                <td><a class="btn btn-info" href="{{route('solicitudes.edit',$solicitud['id'])}}" role="button">Actualizar</a></td>
                  @endif
                  @if(Auth::user()->rol=="Administrador")
                  <td><a class="btn btn-info" href="{{route('solicitudes.asignarTecnico',$solicitud['id'])}}" role="button">Asignar técnico</a></td>
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
    @if(Auth::user()->rol == "Administrador")
    <div class="container">
      <a href="{{ route('solicitudes.index') }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
   @endif
   @if(Auth::user()->rol == "Cliente")
   <div class="container">
     <a href="{{ route('solicitudes.listMine',Auth::user()->id) }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
   </div>
   @endif
</div>
@endsection
