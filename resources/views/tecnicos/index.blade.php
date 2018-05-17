@extends('layouts.app')

@section('content')
<div class="container">
    </br>
    </br>
    <h3>Listado de tecnicos</h3><br>
    <p>para agregar un nuevo tecnico haga click <a href="{{url('tecnicos/create')}}">aquí</a></p>
    @if(Session::has('flash_message'))
        <article class="alert alert-success">
              {{ Session::get('flash_message') }}
        </article>

    @endif


    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tecnicos as $tecnico)
            <tr>
                <th scope="row">{{$tecnico['id']}}</th>
                <td>{{$tecnico['name']}}</td>
                <td>{{$tecnico['telefono']}}</td>
                <td>{{$tecnico['direccion']}}</td>
                <td>{{$tecnico['telefono']}}</td>
                <td><a class="btn btn-success" href="{{route('tecnicos.show',$tecnico['id'])}}" role="button">Ver</a></td>
                @if(Auth::user()->rol=="Administrador")
                <td><a class="btn btn-info" href="{{route('tecnicos.edit',$tecnico['id'])}}" role="button">Actualizar</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
