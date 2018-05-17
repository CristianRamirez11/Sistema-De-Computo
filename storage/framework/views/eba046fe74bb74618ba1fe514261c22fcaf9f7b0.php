<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($equipo): ?>
    <h3><?php echo e($equipo['nombre']); ?></h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Serial</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($equipo['nombre']); ?></td>
                <td><?php echo e($equipo['serial']); ?></td>
                <td><?php echo e($equipo['marca']); ?></td>
                <td><?php echo e($equipo['modelo']); ?></td>
                <td><?php echo e($equipo['tipo']); ?></td>
                <td><a class="btn btn-info" href="<?php echo e(route('equipos.edit',"1")); ?>" role="button">Actualizar</a></td>
                <td><?php echo Form::open(['method' => 'POST', 'url' => 'equipos/delete/1']); ?>

                    <?php echo e(method_field('delete')); ?>

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        </tbody>
    </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>