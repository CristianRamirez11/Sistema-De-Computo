@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de solicitudes que hay en el sistema</h3><br>
    @if(Auth::user()->rol=="Cliente")
    <p>para agregar solicitud haga click <a href="{{url('solicitudes/create')}}">aquí</a></p>
    @endif
    @if(Session::has('flash_message'))
        <article class="alert alert-success">
              {{ Session::get('flash_message') }}
        </article>

    @endif

    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitudes as $solicitud)
            <tr>
                <th scope="row">{{$solicitud->id}}</th>
                <td>{{$solicitud->descripcion}}</td>
                <td>{{$solicitud->fecha}}</td>
                <td>{{$solicitud->hora}}</td>
                <td><a class="btn btn-success" href="{{route('solicitudes.show',$solicitud->id)}}" role="button">Ver</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
