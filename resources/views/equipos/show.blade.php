@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($equipo)
    <table class="table">
      <thead class="thead-inverse">
          <tr>
              <th colspan="8"><h3>Equipo: {{$equipo['modelo']}}</h3></th>

          </tr>
      </thead>
        <tbody>
            <tr>
                <td><h4>Serial</h4></td>
                <td>{{$equipo['serial']}}</td>
            </tr>
            <tr>
                <th><h4>Marca</h4></th>
                <td>{{$equipo['marca']}}</td>
            </tr>
            <tr>
                <th><h4>Tipo</h4></th>
                <td>{{$equipo['tipo_computador']}}</td>
            </tr>
            <tr>
                <th><h4>Pertnece a:</h4></th>
                <td>{{$cliente['name']}}</td>
            </tr>
                <tr>
                <td><a class="btn btn-info" href="{{route('equipos.edit',$equipo['id'])}}" role="button">Actualizar</a></td>
                @if(Auth::user()->rol=="Administrador")
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['equipos.destroy', $equipo['id']]
                    ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el equipo?")']) !!}
                </td>
                @endif
            </tr>
        </tbody>
    </table>
    @if(Auth::user()->rol=="Administrador")
    <div class="container">
      <a href="{{ route('equipos.index') }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    @endif
    <div class="container">
      <a href="{{ route('equipos.listMine', Auth::user()->id) }}" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    @endif
</div>
@endsection
