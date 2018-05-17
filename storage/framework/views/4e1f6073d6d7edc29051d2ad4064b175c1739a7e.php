<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($solicitud): ?>
    <h3>Informe de solicitud #<?php echo e($solicitud['id']); ?></h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Codigo</th>
                <th>Equipo </th>
                <th>Descripcion</th>


                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($solicitud['id']); ?></td>
                <td><?php echo e($equipo['modelo']); ?></td>
                <td><?php echo e($solicitud['descripcion']); ?></td>
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><a class="btn btn-info" href="<?php echo e(route('solicitudes.edit',$solicitud['id'])); ?>" role="button">Actualizar</a></td>
                <td><?php echo Form::open([
                    'method' => 'DELETE',
                    'route' => ['solicitudes.destroy', $solicitud['id']]
                    ]); ?>

                    <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar la solicitud?")']); ?>

                <?php echo Form::close(); ?>

                </td>
                <?php endif; ?>
            </tr>
        </tbody>
    </table>
    <div class="container">
      <a href="<?php echo e(route('solicitudes.index')); ?>" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>