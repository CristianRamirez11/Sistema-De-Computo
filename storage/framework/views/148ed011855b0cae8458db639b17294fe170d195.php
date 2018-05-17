<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Actualizar técnico</h3>
    <?php echo Form::open(['method' => 'POST', 'url' => 'tecnicos/update/1']); ?>

    <?php echo e(method_field('put')); ?>


    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingrese nombre">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Identificación</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingrese identificación">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Código</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese código">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Teléfono</label>
        <input type="text" class="form-control"  placeholder="Ingrese teléfono">
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>