@extends('layouts.app')

@section('content')

<div class="container">
    </br>
    </br>
    <h3>Crear informe de mantenimiento</h3>

    @if(Session::has('flash_message'))
        <article class="alert alert-success">
              {{ Session::get('flash_message') }}
        </article>

    @endif
    {!! Form::open(['route' => 'mantenimientos.store']) !!}

    <div class="form-group">
      {!! Form::label('idEquipo', 'Equipo', ['for' => 'idEquipo']) !!}
      {!! Form::select('idEquipo',$equipos)!!}

    </div>

    <div class="form-group">
      {!! Form::label('codigo', 'Solicitud', ['for' => 'codigo']) !!}
      {!! Form::select('idSolicitud',$solicitudes)!!}
        <!--<label for="exampleInputEmail1">codigo</label>
        <input type="number" class="form-control" id="codigo"  placeholder="Ingrese codigo">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('fecha', 'Fecha', ['for' => 'fecha']) !!}
      {!! Form::date('fecha', null, ['class' => 'form-control validate']) !!}
        <!--<label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" placeholder="Ingrese marca">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('hora', 'Hora', ['for' => 'hora']) !!}
      {!! Form::time('hora', null, ['class' => 'form-control validate']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('tipo_de_mantenimiento', 'Tipo', ['for' => 'tipo_de_mantenimiento']) !!}
      {!! Form::select('tipo_de_mantenimiento',['preventivo' => 'preventivo', 'correctivo'=>'correctivo'])!!}

    </div>
    <div class="form-group">
      {!! Form::label('descripcion', 'Descripcion', ['for' => 'descripcion']) !!}
      {!! Form::textarea('descripcion', null, ['class' => 'form-control validate']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>

    <div class="form-group">
      {!! Form::label('estado', 'Estado', ['for' => 'estado']) !!}
      {!! Form::select('estado',['pendiente' => 'pendiente', 'realizado'=>'realizado'])!!}

    </div>

    <div class="form-group">
      <!--{!! Form::label('Privilegios', 'Privilegios', ['for' => 'rol']) !!}-->
      {!! Form::hidden('idTecnico', Auth::user()->id) !!}
    </div>


    {!! Form::submit('crear informe', ['class' => 'btn btn-success'])!!}
    {!! Form::close() !!}
</div>
@endsection
