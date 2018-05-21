@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($usuario)
    <h3>{{$usuario['nombre']}}</h3>
    <table class="table table-striped">
      <thead class="thead-inverse">
          <tr>
              <th colspan="8"><h3>{{$usuario['name']}}</h3></th>

          </tr>
      </thead>

        <tbody>
            <tr>
                <td><h4>Doc. Identidad:</h4></td>
                <td>{{$usuario['cedula']}}</td>
            </tr>
            <tr>
                <td><h4>Dirección:</h4></td>
                <td>{{$usuario['direccion']}}</td>
            </tr>
            <tr>
                <td><h4>Telefono:</h4></td>
                <td>{{$usuario['telefono']}}</td>
            </tr>
            <tr>
                <td><h4>Correo Electronico:</h4></td>
                <td>{{$usuario['email']}}</td>
            </tr>
            <tr>
                <td><a class="btn btn-info" href="{{route('admin.edit',$usuario['id'])}}" role="button">Actualizar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['admin.destroy', $usuario['id']]
                    ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el usuario?")']) !!}
                {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
    </table>
    <div class="container">
      <a href="{{ route('mantenimientos.index') }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    @endif
</div>
@endsection
