@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Actualizar cliente</h3>
    {!! Form::model($cliente, [
        'method' => 'PUT',
        'route' => ['clientes.update', $cliente->id]
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
      {!! Form::hidden('rol', 'Cliente') !!}
    </div>

    {!! Form::submit('Actualizar cliente', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dashboard') }}" class="btn btn-info">Cancelar</a>
    {!! Form::close() !!}
</div>
@endsection
