@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h2>Bienvenido a CRAL, {{Auth::user()->name}}</h2><br>
    <h3><p>A continuación encontrará las opciones disponibles del sistema:</p></h3>
    @if(Session::has('flash_message'))
        <article class="alert alert-success">
              {{ Session::get('flash_message') }}
        </article>

    @endif
    <table class="table table-dark table-responsive">
        <thead class="thead-dark">
            <tr>

              <td>Informes de Mantenimiento</td>
              <td>Solicitudes</td>
              <td>Equipos</td>

              <td>Clientes</td>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td><a href="{{route('mantenimientos.index')}}" class="btn btn-outline-primary">Ver informes</a></td>
                <td><a href="{{route('solicitudes.index')}}" class="btn btn-outline-primary">Ver solicitudes</a></td>
                <td><a href="{{route('equipos.index')}}" class="btn btn-outline-primary">Ver equipos</a></td>

                <td><a href="{{route('clientes.index')}}" class="btn btn-outline-primary">Ver clientes</a></td>
            </tr>
            <tr>

                <td><a href="{{route('mantenimientos.create')}}" class="btn btn-outline-success">Crear informes</a></td>




            </tr>

        </tbody>
    </table>

</div>
@endsection
