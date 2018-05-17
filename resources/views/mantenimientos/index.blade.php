@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de mantenimientos</h3><br>
    <p>para agregar un nuevo mantenimiento haga click <a href="{{url('mantenimientos/create')}}">aquí</a></p>

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
                @if(Auth::user()->rol=="Administrador")
                <td><a class="btn btn-info" href="{{route('mantenimientos.edit',$mantenimiento->id)}}" role="button">Actualizar</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
