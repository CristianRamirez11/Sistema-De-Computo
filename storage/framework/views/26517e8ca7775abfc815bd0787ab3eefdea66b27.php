<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($mantenimiento): ?>
    <h3>Informe de mantenimiento #<?php echo e($mantenimiento['id']); ?></h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Codigo</th>
                <th>Equipo al que se le realiza</th>
                <th>Tecnico que lo realiza</th>
                <th>Tipo de mantenimiento</th>
                <th>Descripcion</th>
                <th>Hora</th>

                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($mantenimiento['codigo']); ?></td>
                <td><?php echo e($equipo['modelo']); ?></td>
                <td><?php echo e($tecnico['name']); ?></td>
                <td><?php echo e($mantenimiento['tipo_de_mantenimiento']); ?></td>
                <td><?php echo e($mantenimiento['descripcion']); ?></td>
                <td><?php echo e($mantenimiento['hora']); ?></td>
                <td><a class="btn btn-info" href="<?php echo e(route('mantenimientos.edit',$mantenimiento['id'])); ?>" role="button">Actualizar</a></td>
                <td><?php echo Form::open([
                    'method' => 'DELETE',
                    'route' => ['mantenimientos.destroy', $mantenimiento['id']]
                    ]); ?>

                    <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger']); ?>

                <?php echo Form::close(); ?>

                </td>
            </tr>
        </tbody>
    </table>
    <div class="container">
      <a href="<?php echo e(route('mantenimientos.index')); ?>" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>