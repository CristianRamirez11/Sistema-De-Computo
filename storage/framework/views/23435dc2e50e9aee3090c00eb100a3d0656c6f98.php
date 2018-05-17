<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Listado de clientes</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Ver</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i <= 10; $i++): ?>
            <tr>
                <th scope="row"><?php echo e($i); ?></th>
                <td>Cliente <?php echo e($i); ?></td>
                <td>12345<?php echo e($i); ?></td>
                <td>Calle 4<?php echo e($i); ?></td>
                <td>7965<?php echo e($i); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('clientes.show',$i)); ?>" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="<?php echo e(route('clientes.edit',$i)); ?>" role="button">Actualizar</a></td>
                <td><?php echo Form::open(['method' => 'POST', 'url' => 'clientes/delete/'.$i]); ?>

                    <?php echo e(method_field('delete')); ?>

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>