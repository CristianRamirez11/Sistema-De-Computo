@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Actualizar datos del tecnico</h3>
    {!! Form::model($tecnico, [
        'method' => 'PUT',
        'route' => ['tecnicos.update', $tecnico->id]
    ]) !!}
    <div class="form-group">

        {!! Form::label('nombre', 'Nombre', ['for' => 'name']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('email', 'Email', ['for' => 'email']) !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('direccion', 'Direccion', ['for' => 'direccion']) !!}
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">

        {!! Form::label('cedula', 'Cedula', ['for' => 'cedula']) !!}
        {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('telefono', 'Telefono', ['for' => 'telefono']) !!}
        {!! Form::tel('telefono', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
      <!--{!! Form::label('Privilegios', 'Privilegios', ['for' => 'rol']) !!}-->
      {!! Form::hidden('rol', 'Tecnico') !!}
    </div>

    {!! Form::submit('Actualizar tecnico', ['class' => 'btn btn-primary']) !!}
    <a href="{{ url('tecnicos') }}" class="btn btn-info">Cancelar</a>
    {!! Form::close() !!}
</div>
@endsection
