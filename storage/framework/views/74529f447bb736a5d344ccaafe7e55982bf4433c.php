<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($usuario): ?>
    <h3><?php echo e($usuario['nombre']); ?></h3>
    <table class="table table-striped">
      <thead class="thead-inverse">
          <tr>
              <th colspan="8"><h3><?php echo e($usuario['name']); ?></h3></th>

          </tr>
      </thead>

        <tbody>
            <tr>
                <td><h4>Doc. Identidad:</h4></td>
                <td><?php echo e($usuario['cedula']); ?></td>
            </tr>
            <tr>
                <td><h4>Dirección:</h4></td>
                <td><?php echo e($usuario['direccion']); ?></td>
            </tr>
            <tr>
                <td><h4>Telefono:</h4></td>
                <td><?php echo e($usuario['telefono']); ?></td>
            </tr>
            <tr>
                <td><h4>Correo Electronico:</h4></td>
                <td><?php echo e($usuario['email']); ?></td>
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
    <div class="container">
      <a href="<?php echo e(route('mantenimientos.index')); ?>" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>