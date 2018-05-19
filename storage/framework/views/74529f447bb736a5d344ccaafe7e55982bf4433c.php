<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($usuario): ?>
    <h3><?php echo e($usuario['nombre']); ?></h3>
    <table class="table table-striped">

        <tbody>
            <tr>
                <td>Nombre:</td>
                <td><?php echo e($usuario['name']); ?></td>
            </tr>
            <tr>
                <td>Doc. Identidad:</td>
                l<td><?php echo e($usuario['cedula']); ?></td>
            </tr>
            <tr>
                <td>Dirección:</td>
                <td><?php echo e($usuario['direccion']); ?></td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td><?php echo e($usuario['telefono']); ?></td>
            </tr>
            <tr>
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