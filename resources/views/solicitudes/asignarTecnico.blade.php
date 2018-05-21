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
      {!! Form::label('nameEquipo', $equipo->modelo)!!}
      {!! Form::hidden('idEquipo', $equipo->id)!!}

    </div>

    <div class="form-group">
      {!! Form::label('fecha', 'Fecha en la que se realizaría el servicio', ['for' => 'fecha']) !!}
      {!! Form::date('fecha', null, ['class' => 'form-control validate', 'readonly' => 'true']) !!}
        <!--<label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" placeholder="Ingrese marca">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('hora', 'Hora para la que solicita el servicio', ['for' => 'hora']) !!}
      {!! Form::time('hora', null, ['class' => 'form-control validate', 'readonly' => 'true']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('descripcion', 'Descripcion del problema', ['for' => 'descripcion']) !!}
      {!! Form::textarea('descripcion', null, ['class' => 'form-control validate', 'readonly' => 'true']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      <!--{!! Form::label('Privilegios', 'Privilegios', ['for' => 'rol']) !!}-->
      <h5>{!! Form::label('Cliente', 'Cliente que hace la solicitud:') !!}</h5>
      {!!Form::label('nombreCliente', $cliente->name)!!}
      {!! Form::hidden('idCliente', $cliente->id) !!}
    </div>

    <div class="form-group">

      {!! Form::label('idTecnico', 'Seleccione el técnico', ['for' => 'idTecnico']) !!}
      {!! Form::select('idTecnico',$tecnicos)!!}
      {!! Form::hidden('estado','atendida')!!}
    </div>




    {!! Form::submit('Asignar Técnico', ['class' => 'btn btn-success'])!!}
    <a href="{{ route('solicitudes.index') }}" class="btn btn-primary" role="button">Volver a la lista</a>
    <br>
    <br>
    
    {!! Form::close() !!}
</div>
@stop
