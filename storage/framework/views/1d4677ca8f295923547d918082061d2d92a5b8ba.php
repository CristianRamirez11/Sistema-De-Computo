<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($tecnico): ?>
    <h3><?php echo e($tecnico['nombre']); ?></h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
              <th colspan="8"><h3><?php echo e($tecnico['name']); ?></h3></th>

            </tr>
        </thead>
        <tbody>

              <tr>
                <th><h4>Identificación</h4></th>
                <td><?php echo e($tecnico['cedula']); ?></td>
              </tr>
              <tr>
                <th><h4>Correo Electrónico:</h4></th>
                <td><?php echo e($tecnico['email']); ?></td>
              </tr>
              <tr>
                <th><h4>Teléfono</h4></th>
                <td><?php echo e($tecnico['telefono']); ?></td>
              </tr>
              <tr>
                <th><h4>Direccion</h4></th>
                <td><?php echo e($tecnico['direccion']); ?></td>
              </tr>
              <tr>
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
    <?php if(Auth::user()->rol == "Administrador"): ?>
    <div class="container">
      <a href="<?php echo e(route('tecnicos.index')); ?>" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
   <?php endif; ?>
   <?php if(Auth::user()->rol == "Tecnico"): ?>
   <div class="container">
     <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary btn-block" role="button">Volver al inicio</a>
   </div>
  <?php endif; ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>