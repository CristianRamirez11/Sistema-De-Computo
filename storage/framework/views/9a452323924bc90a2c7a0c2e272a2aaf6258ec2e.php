<?php $__env->startSection('content'); ?>

<div class="container">
    </br>
    </br>
    <h3>Crear informe de mantenimiento</h3>

    <?php if(Session::has('flash_message')): ?>
        <article class="alert alert-success">
              <?php echo e(Session::get('flash_message')); ?>

        </article>

    <?php endif; ?>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <?php echo Form::open(['route' => 'mantenimientos.store']); ?>


    <div class="form-group">
      <?php echo Form::label('idEquipo', 'Equipo', ['for' => 'idEquipo']); ?>

      <?php echo Form::select('idEquipo',$equipos); ?>


    </div>

    <div class="form-group">
      <?php echo Form::label('codigo', 'Solicitud', ['for' => 'codigo']); ?>

      <?php echo Form::select('codigo',$solicitudes); ?>

        <!--<label for="exampleInputEmail1">codigo</label>
        <input type="number" class="form-control" id="codigo"  placeholder="Ingrese codigo">
      -->
    </div>
    <div class="form-group">
      <?php echo Form::label('fecha', 'Fecha', ['for' => 'fecha']); ?>

      <?php echo Form::date('fecha', null, ['class' => 'form-control validate']); ?>

        <!--<label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" placeholder="Ingrese marca">
      -->
    </div>
    <div class="form-group">
      <?php echo Form::label('hora', 'Hora', ['for' => 'hora']); ?>

      <?php echo Form::time('hora', null, ['class' => 'form-control validate']); ?>

        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      <?php echo Form::label('tipo_de_mantenimiento', 'Tipo', ['for' => 'tipo_de_mantenimiento']); ?>

      <?php echo Form::select('tipo_de_mantenimiento',['preventivo' => 'preventivo', 'correctivo'=>'correctivo']); ?>


    </div>
    <div class="form-group">
      <?php echo Form::label('descripcion', 'Descripcion', ['for' => 'descripcion']); ?>

      <?php echo Form::textarea('descripcion', null, ['class' => 'form-control validate']); ?>

        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>

    <div class="form-group">
      <?php echo Form::label('estado', 'Estado', ['for' => 'estado']); ?>

      <?php echo Form::select('estado',['pendiente' => 'pendiente', 'realizado'=>'realizado']); ?>


    </div>

    <div class="form-group">
      <!--<?php echo Form::label('Privilegios', 'Privilegios', ['for' => 'rol']); ?>-->
      <?php echo Form::hidden('idTecnico', Auth::user()->id); ?>

    </div>


    <?php echo Form::submit('crear informe', ['class' => 'btn btn-success']); ?>

    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>