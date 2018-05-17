<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
  <title>Gestión de computo CRAL®</title>
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
            <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">Gestión de computo CRAL®</a>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                  <?php if(Auth::user()->rol=="Administrador"): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="tecnicos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Técnicos</a>
                        <div class="dropdown-menu" aria-labelledby="tecnicos">
                            <a class="dropdown-item" href="<?php echo e(route('tecnicos.create')); ?>">Crear técnico</a>
                            <a class="dropdown-item" href="<?php echo e(route('tecnicos.index')); ?>">Listar ténicos</a>
                            <a class="dropdown-item" href="<?php echo e(route('tecnicos.search')); ?>">Buscar técnico</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="equipos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Equipos</a>
                        <div class="dropdown-menu" aria-labelledby="equipos">
                            <a class="dropdown-item" href="<?php echo e(route('equipos.create')); ?>">Crear equipo</a>
                            <a class="dropdown-item" href="<?php echo e(route('equipos.index')); ?>">Listar equipos</a>
                            <a class="dropdown-item" href="<?php echo e(route('equipos.search')); ?>">Buscar equipo</a>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php if(Auth::user()->rol == "Administrador" || Auth::user()->rol == "Tecnico"): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="informes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informes</a>
                        <div class="dropdown-menu" aria-labelledby="informes">
                        <a class="dropdown-item" href="<?php echo e(route('mantenimientos.listMine', Auth::user()->id)); ?>">Ver mis informes</a>
                        <a class="dropdown-item" href="<?php echo e(route('mantenimientos.create')); ?>">Crear informe</a>
                        <a class="dropdown-item" href="<?php echo e(route('mantenimientos.index')); ?>">Ver informes</a>
                       </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="clientes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>

                        <div class="dropdown-menu" aria-labelledby="clientes">

                          <?php if(Auth::user()->rol == "administrador"): ?>
                            <a class="dropdown-item" href="<?php echo e(route('clientes.create')); ?>">Crear cliente</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="<?php echo e(route('clientes.index')); ?>">Listar clientes</a>
                            <a class="dropdown-item" href="<?php echo e(route('clientes.search')); ?>">Buscar cliente</a>
                        </div>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="solicitudes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solicitudes</a>
                        <div class="dropdown-menu" aria-labelledby="solicitudes">
                          <?php if(Auth::user()->rol == "Cliente"): ?>
                            <a class="dropdown-item" href="<?php echo e(route('solicitudes.create')); ?>">Crear nueva solicitud</a>
                            <a class="dropdown-item" href="<?php echo e(route('solicitudes.listMine', Auth::user()->id)); ?>">Ver mis solicitudes</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="<?php echo e(route('solicitudes.index')); ?>">Listar solicitudes</a>

                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                  <?php if(Auth::user()->rol == "Administrador"): ?>
                    <a class="navbar-right" href="<?php echo e(route('admin.edit', Auth::user()->id)); ?>"><?php echo e(Auth::user()->name); ?> </a>
                    <?php endif; ?>
                    <?php if(Auth::user()->rol == "Tecnico"): ?>
                      <a class="navbar-right" href="<?php echo e(route('tecnicos.edit', Auth::user()->id)); ?>"><?php echo e(Auth::user()->name); ?> </a>
                      <?php endif; ?>
                      <?php if(Auth::user()->rol == "Cliente"): ?>
                        <a class="navbar-right" href="<?php echo e(route('clientes.edit', Auth::user()->id)); ?>"><?php echo e(Auth::user()->name); ?> </a>
                        <?php endif; ?>
                    <a class="btn btn-outline-danger my-2 my-sm-0" role="button" href="<?php echo e(route('logout')); ?>">Cerrar sesión</a>
                </form>
            </div>
        </nav>
        <article>
            <?php echo $__env->yieldContent('content'); ?>
        </article>

    </body>
</html>
