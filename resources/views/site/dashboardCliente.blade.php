@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h2>Bienvenido a CRAL, {{Auth::user()->name}}</h2><br>
    <h3><p>A continuación encontrará las opciones disponibles del sistema:</p></h3>
    <table class="table table-dark">
        <thead class="thead-dark">
            <tr>
              <td>Solicitudes</td>
              <td>Equipos</td>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td><a href="{{route('solicitudes.listMine', Auth::user()->id)}}" class="btn btn-outline-primary">Mis solicitudes</a></td>
                <td><a href="{{route('equipos.index')}}" class="btn btn-outline-primary">Ver equipos</a></td>

            </tr>
            <tr>

                <td><a href="{{route('solicitudes.index')}}" class="btn btn-outline-success">Crear solicitudes</a></td>

            </tr>

        </tbody>
    </table>

</div>
@endsection
