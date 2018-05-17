@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de equipos</h3><br>
    @if(Auth::user()->rol == "Administrador")
    <p>para agregar un nuevo equipo haga click <a href="{{url('equipos/create')}}">aquí</a></p>
    @endif
    @if(Session::has('flash_message'))
        <article class="alert alert-success">
              {{ Session::get('flash_message') }}
        </article>

    @endif
    <div class="table-responsive-xl">
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Serial</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipos as $equipo)
            <tr>
                <th scope="row">{{$equipo->id}}</th>
                <td>{{$equipo->serial}}</td>
                <td>{{$equipo->marca}}</td>
                <td>{{$equipo->tipo_computador}}</td>
                <td><a class="btn btn-success" href="{{route('equipos.show',$equipo->id)}}" role="button">Ver</a></td>
                @if(Auth::user()->rol=="Administrador")
                <td><a class="btn btn-info" href="{{route('equipos.edit',$equipo->id)}}" role="button">Actualizar</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
