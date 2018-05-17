<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($tecnico): ?>
    <h3><?php echo e($tecnico['nombre']); ?></h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Código</th>
                <th>Teléfono</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($tecnico['nombre']); ?></td>
                <td><?php echo e($tecnico['identificacion']); ?></td>
                <td><?php echo e($tecnico['codigo']); ?></td>
                <td><?php echo e($tecnico['telefono']); ?></td>
                <td><a class="btn btn-info" href="<?php echo e(route('tecnicos.edit',"1")); ?>" role="button">Actualizar</a></td>
                <td><?php echo Form::open(['method' => 'POST', 'url' => 'tecnicos/delete/1']); ?>

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