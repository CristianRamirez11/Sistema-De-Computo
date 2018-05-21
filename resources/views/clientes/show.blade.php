@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($cliente)
    <h3>{{$cliente['nombre']}}</h3>
    <table class="table">
      <thead class="thead-inverse">
          <tr>
              <th colspan="8"><h3>{{$cliente['name']}}</h3></th>

          </tr>
      </thead>
        <tbody>
            <tr>
                <td><h4>Identificación</h4></td>
                <td>{{$cliente['cedula']}}</td>
            </tr>
            <tr>
                <td><h4>Dirección</h4></td>
                <td>{{$cliente['direccion']}}</td>
            </tr>
            <tr>
                <td><h4>Teléfono</h4></td>
                <td>{{$cliente['telefono']}}</td>
           </tr>
           <tr>
               <td><h4>Correo Electrónico</h4></td>
               <td>{{$cliente['email']}}</td>
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
    @if(Auth::user()->rol == "Administrador")
    <div class="container">
      <a href="{{ route('clientes.index') }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    @endif

    @if(Auth::user()->rol == "Cliente")
    <div class="container">
      <a href="{{ route('dashboard') }}" class="btn btn-primary btn-block" role="button">Volver al inicio</a>
    </div>
   @endif
    @endif

</div>
@endsection
