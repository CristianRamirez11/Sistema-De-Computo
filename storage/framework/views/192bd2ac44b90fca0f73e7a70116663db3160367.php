<?php $__env->startSection('content'); ?>

<div class="container">
    </br>
    </br>
    <h3>Crear informe de solicitud</h3>

    <?php if(Session::has('flash_message')): ?>
        <article class="alert alert-success">
              <?php echo e(Session::get('flash_message')); ?>

        </article>

    <?php endif; ?>
    <?php echo Form::model($solicitud, [
        'method' => 'PUT',
        'route' => ['solicitudes.update', $solicitud->id]
    ]); ?>


    <div class="form-group">
      <?php echo Form::label('idEquipo', 'Equipo', ['for' => 'idEquipo']); ?>

      <?php echo Form::label('nameEquipo', $equipo->modelo); ?>

      <?php echo Form::hidden('idEquipo', $equipo->id); ?>


    </div>

    <div class="form-group">
      <?php echo Form::label('fecha', 'Fecha en la que se realizaría el servicio', ['for' => 'fecha']); ?>

      <?php echo Form::date('fecha', null, ['class' => 'form-control validate', 'readonly' => 'true']); ?>

        <!--<label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" placeholder="Ingrese marca">
      -->
    </div>
    <div class="form-group">
      <?php echo Form::label('hora', 'Hora para la que solicita el servicio', ['for' => 'hora']); ?>

      <?php echo Form::time('hora', null, ['class' => 'form-control validate', 'readonly' => 'true']); ?>

        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      <?php echo Form::label('descripcion', 'Descripcion del problema', ['for' => 'descripcion']); ?>

      <?php echo Form::textarea('descripcion', null, ['class' => 'form-control validate', 'readonly' => 'true']); ?>

        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      <!--<?php echo Form::label('Privilegios', 'Privilegios', ['for' => 'rol']); ?>-->
      <h5><?php echo Form::label('Cliente', 'Cliente que hace la solicitud:'); ?></h5>
      <?php echo Form::label('nombreCliente', $cliente->name); ?>

      <?php echo Form::hidden('idCliente', $cliente->id); ?>

    </div>

    <div class="form-group">

      <?php echo Form::label('idTecnico', 'Seleccione el técnico', ['for' => 'idTecnico']); ?>

      <?php echo Form::select('idTecnico',$tecnicos); ?>

      <?php echo Form::hidden('estado','atendida'); ?>

    </div>




    <?php echo Form::submit('Asignar Técnico', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo e(route('solicitudes.index')); ?>" class="btn btn-primary" role="button">Volver a la lista</a>
    <br>
    <br>
    
    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>