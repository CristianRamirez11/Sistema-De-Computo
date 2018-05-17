@extends('layouts.app')


@section('content')

<div class="container">
<h2 style="color:#1780BD">Crear nuevo usuario</h2>
<p class="lead"></p>
<hr>

{!! Form::open(['route' => 'admin.store']) !!}

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

        {!! Form::label('password', 'Contraseña', ['for' => 'password', 'step' => '0']) !!}
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">

        {!! Form::label('password_confirmation', 'Confirmar Contraseña',['for' => 'password_confirmation']) !!}
        {!! Form::password('password_confirmation', null,['class' => 'form-control']) !!}
    </div>

    <div class="input field col s3">
      {!! Form::label('Privilegios', 'Privilegios', ['for' => 'rol']) !!}
      {!! Form::select('rol', array('Administrador' => 'Administrador', 'Cliente' => 'Cliente', 'Tecnico' => 'Tecnico')) !!}
    </div>

    {!! Form::submit('Crear usuario', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.index') }}" class="btn btn-info">Cancelar</a>
    {!! Form::close() !!}
</div>
@stop
