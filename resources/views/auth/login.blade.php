@extends('layouts.welcome')

@section('content')
<div class="container full-height centrado-vertical" >
    <h3 class="text-center">Inicio de sesión</h3>
    @if(Session::has('flash_message'))
        <article class="alert alert-success">
              {{ Session::get('flash_message') }}
        </article>

    @endif
    <div class="row centrado-horizontal">
        <div class="col-6 align-self-center">
            <form class="form-horizontal " role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">

                        <label for="email" class="control-label">Correo electrónico</label>

                    <div class="col-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Contraseña</label>

                    <div class="col-12">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group margin-bottom-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            Iniciar sesión
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
