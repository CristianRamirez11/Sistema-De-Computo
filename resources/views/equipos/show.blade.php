@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    @if($equipo)
    <h3>Equipo: {{$equipo['modelo']}}</h3>
    <table class="table">
        <tbody>
            <tr>
                <td>Serial</td>
                  <td>{{$equipo['serial']}}</td>
            </tr>
                <th>Marca</th>
                <th>Tipo</th>

                <td>{{$equipo['serial']}}</td>
                <td>{{$equipo['marca']}}</td>
                <td>{{$equipo['tipo_computador']}}</td>
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
    @endif
</div>
@endsection
