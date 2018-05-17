<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">


        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo e(asset("css/site.css")); ?>"

    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Gestión de computo CRAL®</a>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="tecnicos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Técnicos</a>
                        <div class="dropdown-menu" aria-labelledby="tecnicos">
                            <a class="dropdown-item" href="<?php echo e(route('tecnicos.create')); ?>">Crear técnico</a>
                            <a class="dropdown-item" href="<?php echo e(route('tecnicos')); ?>">Listar ténicos</a>
                            <a class="dropdown-item" href="<?php echo e(route('tecnicos.search')); ?>">Buscar técnico</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="equipos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Equipos</a>
                        <div class="dropdown-menu" aria-labelledby="equipos">
                            <a class="dropdown-item" href="<?php echo e(route('equipos.create')); ?>">Crear equipo</a>
                            <a class="dropdown-item" href="<?php echo e(route('equipos')); ?>">Listar equipos</a>
                            <a class="dropdown-item" href="<?php echo e(route('equipos.search')); ?>">Buscar equipo</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="clientes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
                        <div class="dropdown-menu" aria-labelledby="clientes">
                            <a class="dropdown-item" href="<?php echo e(route('clientes.create')); ?>">Crear cliente</a>
                            <a class="dropdown-item" href="<?php echo e(route('clientes')); ?>">Listar clientes</a>
                            <a class="dropdown-item" href="<?php echo e(route('clientes.search')); ?>">Buscar cliente</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                    <a class="btn btn-outline-danger my-2 my-sm-0" role="button" href="<?php echo e(route('login')); ?>">Cerrar sesión</a>
                </form>
            </div>
        </nav>
        <article>
            <?php echo $__env->yieldContent('content'); ?>
        </article>

    </body>
</html>
