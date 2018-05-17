<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Listado de mantenimientos</h3><br>
    <p>para agregar un nuevo mantenimiento haga click <a href="<?php echo e(url('mantenimientos/create')); ?>">aquí</a></p>

    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Codigo Mantenimiento</th>
                <th>Fecha realizacion</th>
                <th>Tipo de mantenimiento</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mantenimientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mantenimiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($mantenimiento->id); ?></th>
                <td><?php echo e($mantenimiento->codigo); ?></td>
                <td><?php echo e($mantenimiento->fecha); ?></td>
                <td><?php echo e($mantenimiento->tipo_de_mantenimiento); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('mantenimientos.show',$mantenimiento->id)); ?>" role="button">Ver</a></td>
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><a class="btn btn-info" href="<?php echo e(route('mantenimientos.edit',$mantenimiento->id)); ?>" role="button">Actualizar</a></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>