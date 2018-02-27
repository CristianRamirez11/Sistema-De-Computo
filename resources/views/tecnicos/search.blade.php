@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Buscar técnico</h3>
    {!! Form::open(['method' => 'POST', 'route' => 'tecnicos.postSearch']) !!}
    <div class="form-group">
        <label for="exampleInputEmail1">Código</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese código">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
    {!! Form::close() !!}
    </br>
    @if($tecnico)
    <h3>Resultado búsqueda</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Código</th>
                <th>Teléfono</th>
                <th>Ver</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$tecnico['nombre']}}</td>
                <td>{{$tecnico['identificacion']}}</td>
                <td>{{$tecnico['codigo']}}</td>
                <td>{{$tecnico['telefono']}}</td>
                <td><a class="btn btn-success" href="{{route('tecnicos.show',"1")}}" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="{{route('tecnicos.edit',"1")}}" role="button">Actualizar</a></td>
                <td>{!! Form::open(['method' => 'POST', 'url' => 'tecnicos/delete/1']) !!}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
    </table>
    @endif
</div>
@endsection