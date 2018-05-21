@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de mantenimientos</h3><br>
    @if(Auth::user()->rol == "Tecnico")
    <p>para agregar un nuevo mantenimiento haga click <a href="{{url('mantenimientos/create')}}">aquí</a></p>
    @endif
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Codigo Mantenimiento</th>
                <th>Fecha realizacion</th>
                <th>Tipo de mantenimiento</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mantenimientos as $mantenimiento)
            <tr>
                <th scope="row">{{$mantenimiento->id}}</th>
                <td>{{$mantenimiento->codigo}}</td>
                <td>{{$mantenimiento->fecha}}</td>
                <td>{{$mantenimiento->tipo_de_mantenimiento}}</td>
                <td><a class="btn btn-success" href="{{route('mantenimientos.show',$mantenimiento->id)}}" role="button">Ver</a></td>

                <td><a class="btn btn-info" href="{{route('mantenimientos.edit',$mantenimiento->id)}}" role="button">Actualizar</a></td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
