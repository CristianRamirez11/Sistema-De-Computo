<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">


        {{-- Styles --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset("css/site.css") }}"

    </head>
    <body>
        <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleContainer" aria-controls="navbarsExampleContainer" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Gestión de computo CRAL®</a>

                <div class="collapse navbar-collapse" id="navbarsExampleContainer">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('inicio')}}">Inicio </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('quienesSomos')}}">¿Quiénes somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('nuestrosServicios')}}">Nuestros servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contactanos')}}">Contáctanos</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-md-0">
                    <a class="btn btn-outline-success my-2 my-sm-0" role="button" href="{{route('login')}}">Iniciar sesión</a>                    </form>
                </div>
            </div>
        </nav>
        <article>
            @yield('content')
        </article>

    </body>
</html>
