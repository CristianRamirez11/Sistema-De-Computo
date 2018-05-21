@extends('layouts.app')

@section('content')

<div class="container">
    </br>
    </br>
    <h3>Crear equipo</h3>

    @if(Session::has('flash_message'))
        <article class="alert alert-success">
              {{ Session::get('flash_message') }}
        </article>

    @endif
    {!! Form::open(['route' => 'equipos.store']) !!}
<!--    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id=""  placeholder="Ingrese nombre">
    </div>
  -->

    <div class="form-group">
      {!! Form::label('serial', 'Serial', ['for' => 'serial']) !!}
      {!! Form::number('serial', null, ['class' => 'form-control validate']) !!}
        <!--<label for="exampleInputEmail1">Serial</label>
        <input type="number" class="form-control" id="serial"  placeholder="Ingrese serial">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('idCliente', 'Dueño del equipo', ['for' => 'idCliente']) !!}
      {!! Form::select('idCliente',$clientes)!!}
      <!--
        <label for="exampleInputEmail1">Tipo</label>
        <select class="form-control" id="tipo_computador" name="tipo_computador">
            <option>Laptop</option>
            <option>Notebook</option>
            <option>Escritorio</option>
        </select>
      -->
    </div>
    <div class="form-group">
      {!! Form::label('marca', 'Marca', ['for' => 'Marca']) !!}
      {!! Form::text('marca', null, ['class' => 'form-control validate']) !!}
        <!--<label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" placeholder="Ingrese marca">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('modelo', 'Modelo', ['for' => 'modelo']) !!}
      {!! Form::text('modelo', null, ['class' => 'form-control validate']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      {!! Form::label('color', 'Color', ['for' => 'color']) !!}
      {!! Form::text('color', null, ['class' => 'form-control validate']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>

    <div class="form-group">
      {!! Form::label('capacidad_memoria_RAM', 'Tamaño memoria RAM', ['for' => 'capacidad_memoria_RAM']) !!}
      {!! Form::text('capacidad_memoria_RAM', null, ['class' => 'form-control validate']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>

    <div class="form-group">
      {!! Form::label('capacidad_disco_duro', 'Tamaño Disco Duro', ['for' => 'capacidad_disco_duro']) !!}
      {!! Form::text('capacidad_disco_duro', null, ['class' => 'form-control validate']) !!}
        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>

    <div class="form-group">
      {!! Form::label('tipo_computador', 'Tipo', ['for' => 'tipo_computador']) !!}
      {!! Form::select('tipo_computador',['Laptop' => 'Laptop', 'Notebook'=>'Notebook', 'Escritorio'=>'Escritorio'])!!}
      <!--
        <label for="exampleInputEmail1">Tipo</label>
        <select class="form-control" id="tipo_computador" name="tipo_computador">
            <option>Laptop</option>
            <option>Notebook</option>
            <option>Escritorio</option>
        </select>
      -->
    </div>
    {!! Form::submit('crear equipo', ['class' => 'btn btn-success'])!!}
    {!! Form::close() !!}
</div>
@endsection
