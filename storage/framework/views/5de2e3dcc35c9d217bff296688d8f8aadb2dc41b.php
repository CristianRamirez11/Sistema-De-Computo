<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Crear equipo</h3>
    <?php echo Form::open(['method' => 'POST', 'route' => 'equipos.store']); ?>

    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingrese nombre">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Serial</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingrese serial">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Marca</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese marca">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Modelo</label>
        <input type="text" class="form-control"  placeholder="Ingrese modelo">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tipo</label>
        <select class="form-control" id="exampleSelect1">
            <option>Tipo 1</option>
            <option>Tipo 2</option>
            <option>Tipo 3</option>
            <option>Tipo 4</option>
            <option>Tipo 5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Crear</button>
    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>