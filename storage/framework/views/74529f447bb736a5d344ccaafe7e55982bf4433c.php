<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($usuario): ?>
    <h3><?php echo e($usuario['nombre']); ?></h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($usuario['name']); ?></td>
                <td><?php echo e($usuario['cedula']); ?></td>
                <td><?php echo e($usuario['direccion']); ?></td>
                <td><?php echo e($usuario['telefono']); ?></td>
                <td><a class="btn btn-info" href="<?php echo e(route('admin.edit',$usuario['id'])); ?>" role="button">Actualizar</a></td>
                <td><?php echo Form::open([
                    'method' => 'DELETE',
                    'route' => ['admin.destroy', $usuario['id']]
                    ]); ?>

                    <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el usuario?")']); ?>

                <?php echo Form::close(); ?>

                </td>
            </tr>
        </tbody>
    </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>