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
                <td><?php echo e($tecnico['name']); ?></td>
                <td><?php echo e($tecnico['cedula']); ?></td>
                <td><?php echo e($tecnico['id']); ?></td>
                <td><?php echo e($tecnico['telefono']); ?></td>
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><a class="btn btn-info" href="<?php echo e(route('tecnicos.edit',$tecnico->id)); ?>" role="button">Actualizar</a></td>
                <td><?php echo Form::open([
                    'method' => 'DELETE',
                    'route' => ['tecnicos.destroy', $tecnico['id']]
                    ]); ?>

                    <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el técnico?")']); ?>

                <?php echo Form::close(); ?>

                </td>
                <?php endif; ?>
            </tr>
        </tbody>
    </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>