@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Crear cliente</h3>
    {!! Form::open(['method' => 'POST', 'route' => 'clientes.store']) !!}
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingrese nombre">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Identificación</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingrese identificación">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Dirección</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese dirección">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Teléfono</label>
        <input type="text" class="form-control"  placeholder="Ingrese teléfono">
    </div>

    <button type="submit" class="btn btn-success">Crear</button>
    {!! Form::close() !!}
</div>
@endsection