<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($cliente): ?>
    <h3><?php echo e($cliente['nombre']); ?></h3>
    <table class="table">
      <thead class="thead-inverse">
          <tr>
              <th colspan="8"><h3><?php echo e($cliente['name']); ?></h3></th>

          </tr>
      </thead>
        <tbody>
            <tr>
                <td><h4>Identificación</h4></td>
                <td><?php echo e($cliente['cedula']); ?></td>
            </tr>
            <tr>
                <td><h4>Dirección</h4></td>
                <td><?php echo e($cliente['direccion']); ?></td>
            </tr>
            <tr>
                <td><h4>Teléfono</h4></td>
                <td><?php echo e($cliente['telefono']); ?></td>
           </tr>
           <tr>
               <td><h4>Correo Electrónico</h4></td>
               <td><?php echo e($cliente['email']); ?></td>
          </tr>

            <tr>
              <?php if(Auth::user()->rol=="Administrador"): ?>
              <td><a class="btn btn-info" href="<?php echo e(route('clientes.edit',$cliente['id'])); ?>" role="button">Actualizar</a></td>

              <td><?php echo Form::open([
                  'method' => 'DELETE',
                  'route' => ['clientes.destroy', $cliente['id']]
                  ]); ?>

                  <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el cliente?")']); ?>

              <?php echo Form::close(); ?>

              </td>
              <?php endif; ?>
            </tr>
        </tbody>
    </table>
    <div class="container">
      <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>