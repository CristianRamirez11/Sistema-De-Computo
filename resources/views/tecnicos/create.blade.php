@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Crear técnico</h3>
    {!! Form::open(['method' => 'POST', 'route' => 'tecnicos.store']) !!}
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingrese nombre">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Identificación</label>
            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingrese identificación">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Código</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese código">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Teléfono</label>
            <input type="text" class="form-control"  placeholder="Ingrese teléfono">
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
       {!! Form::close() !!}
</div>
@endsection