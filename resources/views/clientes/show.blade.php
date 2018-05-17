@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($cliente)
    <h3>{{$cliente['nombre']}}</h3>
    <table class="table">
        <tbody>
            <tr>
                <td><h4>Nombre</h4></td>
                <td>{{$cliente['name']}}</td>
            </tr>
            <tr>
                <td>Identificación</td>
                <td>{{$cliente['cedula']}}</td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td>{{$cliente['direccion']}}</td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td>{{$cliente['telefono']}}</td>
           </tr>
            <tr>
              @if(Auth::user()->rol=="Administrador")
              <td><a class="btn btn-info" href="{{route('clientes.edit',$cliente['id'])}}" role="button">Actualizar</a></td>

              <td>{!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['clientes.destroy', $cliente['id']]
                  ]) !!}
                  {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el cliente?")']) !!}
              {!! Form::close() !!}
              </td>
              @endif
            </tr>
        </tbody>
    </table>
    @endif
</div>
@endsection
