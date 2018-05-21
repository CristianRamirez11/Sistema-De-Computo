@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($tecnico)
    <h3>{{$tecnico['nombre']}}</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
              <th colspan="8"><h3>{{$tecnico['name']}}</h3></th>

            </tr>
        </thead>
        <tbody>

              <tr>
                <th><h4>Identificación</h4></th>
                <td>{{$tecnico['cedula']}}</td>
              </tr>
              <tr>
                <th><h4>Correo Electrónico:</h4></th>
                <td>{{$tecnico['email']}}</td>
              </tr>
              <tr>
                <th><h4>Teléfono</h4></th>
                <td>{{$tecnico['telefono']}}</td>
              </tr>
              <tr>
                <th><h4>Direccion</h4></th>
                <td>{{$tecnico['direccion']}}</td>
              </tr>
              <tr>
                @if(Auth::user()->rol=="Administrador")
                <td><a class="btn btn-info" href="{{route('tecnicos.edit',$tecnico->id)}}" role="button">Actualizar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['tecnicos.destroy', $tecnico['id']]
                    ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el técnico?")']) !!}
                {!! Form::close() !!}
                </td>
                @endif
            </tr>
        </tbody>
    </table>
    @if(Auth::user()->rol == "Administrador")
    <div class="container">
      <a href="{{ route('tecnicos.index') }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
   @endif
   @if(Auth::user()->rol == "Tecnico")
   <div class="container">
     <a href="{{ route('dashboard') }}" class="btn btn-primary btn-block" role="button">Volver al inicio</a>
   </div>
  @endif
    @endif
</div>
@endsection
