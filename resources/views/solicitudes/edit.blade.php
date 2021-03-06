@extends('layouts.app')

@section('content')

<div class="container">
    </br>
    </br>
    <h3>Crear informe de solicitud</h3>

    @if(Session::has('flash_message'))
        <article class="alert alert-success">
              {{ Session::get('flash_message') }}
        </article>

    @endif
    {!! Form::model($solicitud, [
        'method' => 'PUT',
        'route' => ['solicitudes.update', $solicitud->id]
    ]) !!}

    <div class="form-group">
      {!! Form::label('idEquipo', 'Equipo', ['for' => 'idEquipo']) !!}
      {!! Form::select('idEquipo',$equipos)!!}

    </div>

    <div class="form-group">
      {!! Form::label('fecha', 'Fecha en la que se realizaría el servicio', ['for' => 'fecha']) !!}
      {!! Form::date('fecha', null, ['class' => 'form-control validate']) !!}
        <!--<label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" placeholder="Ingrese marca">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('hora', 'Hora para la que solicita el servicio', ['for' => 'hora']) !!}
      {!! Form::time('hora', null, ['class' => 'form-control validate']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('descripcion', 'Descripcion del problema', ['for' => 'descripcion']) !!}
      {!! Form::textarea('descripcion', null, ['class' => 'form-control validate']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      <!--{!! Form::label('Privilegios', 'Privilegios', ['for' => 'rol']) !!}-->
      {!! Form::hidden('idCliente', Auth::user()->id) !!}
    </div>


    {!! Form::submit('crear informe', ['class' => 'btn btn-success'])!!}
    @if(Auth::user()->rol == "Administrador")
      <a href="{{ route('solicitudes.index') }}" class="btn btn-primary" role="button">Volver a la lista</a>
    @endif
      <a href="{{ route('solicitudes.listMine', Auth::user()->id) }}" class="btn btn-primary" role="button">Volver a la lista</a>
    {!! Form::close() !!}
    <br>
</div>
@endsection
