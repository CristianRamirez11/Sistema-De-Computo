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
    <?php echo Form::model($mantenimiento, [
        'method' => 'PUT',
        'route' => ['mantenimientos.update', $mantenimiento->id]
    ]); ?>


    <div class="form-group">
      <?php echo Form::label('idEquipo', 'Equipo', ['for' => 'idEquipo']); ?>

      <?php echo Form::select('idEquipo',$equipos); ?>


    </div>
    <?php if(Auth::user()->rol=="Administrador"): ?>
    <div class="form-group">
      <?php echo Form::label('idTecnico', 'Tecnico que realiza el mantenimiento', ['for' => 'idTecnico']); ?>

      <?php echo Form::select('idTecnico',$tecnicos); ?>


    </div>
    <?php endif; ?>

    <div class="form-group">
      <?php echo Form::label('codigo', 'codigo', ['for' => 'codigo']); ?>

      <?php echo Form::number('codigo', null, ['class' => 'form-control validate']); ?>

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

    <a href="<?php echo e(route('mantenimientos.index')); ?>" class="btn btn-danger" role="button">Cancelar</a>

    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>