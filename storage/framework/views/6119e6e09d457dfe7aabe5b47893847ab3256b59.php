<?php $__env->startSection('content'); ?>

<div class="container">
    </br>
    </br>
    <h3>Crear equipo</h3>

    <?php if(Session::has('flash_message')): ?>
        <article class="alert alert-success">
              <?php echo e(Session::get('flash_message')); ?>

        </article>

    <?php endif; ?>
    <?php echo Form::open(['route' => 'equipos.store']); ?>

<!--    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id=""  placeholder="Ingrese nombre">
    </div>
  -->
    <div class="form-group">
      <?php echo Form::label('serial', 'Serial', ['for' => 'serial']); ?>

      <?php echo Form::number('serial', null, ['class' => 'form-control validate']); ?>

        <!--<label for="exampleInputEmail1">Serial</label>
        <input type="number" class="form-control" id="serial"  placeholder="Ingrese serial">
      -->
    </div>
    <div class="form-group">
      <?php echo Form::label('marca', 'Marca', ['for' => 'Marca']); ?>

      <?php echo Form::text('marca', null, ['class' => 'form-control validate']); ?>

        <!--<label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" placeholder="Ingrese marca">
      -->
    </div>
    <div class="form-group">
      <?php echo Form::label('modelo', 'Modelo', ['for' => 'modelo']); ?>

      <?php echo Form::text('modelo', null, ['class' => 'form-control validate']); ?>

        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>
    <div class="form-group">
      <?php echo Form::label('color', 'Color', ['for' => 'color']); ?>

      <?php echo Form::text('color', null, ['class' => 'form-control validate']); ?>

        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>

    <div class="form-group">
      <?php echo Form::label('capacidad_memoria_RAM', 'Tamaño memoria RAM', ['for' => 'capacidad_memoria_RAM']); ?>

      <?php echo Form::text('capacidad_memoria_RAM', null, ['class' => 'form-control validate']); ?>

        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>

    <div class="form-group">
      <?php echo Form::label('capacidad_disco_duro', 'Tamaño Disco Duro', ['for' => 'capacidad_disco_duro']); ?>

      <?php echo Form::text('capacidad_disco_duro', null, ['class' => 'form-control validate']); ?>

        <!--<label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo"  placeholder="Ingrese modelo">
      -->
    </div>

    <div class="form-group">
      <?php echo Form::label('tipo_computador', 'Tipo', ['for' => 'tipo_computador']); ?>

      <?php echo Form::select('tipo_computador',['Laptop' => 'Laptop', 'Notebook'=>'Notebook', 'Escritorio'=>'Escritorio']); ?>

      <!--
        <label for="exampleInputEmail1">Tipo</label>
        <select class="form-control" id="tipo_computador" name="tipo_computador">
            <option>Laptop</option>
            <option>Notebook</option>
            <option>Escritorio</option>
        </select>
      -->
    </div>
    <?php echo Form::submit('crear equipo', ['class' => 'btn btn-success']); ?>

    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>