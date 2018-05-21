<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($equipo): ?>
    <table class="table">
      <thead class="thead-inverse">
          <tr>
              <th colspan="8"><h3>Equipo: <?php echo e($equipo['modelo']); ?></h3></th>

          </tr>
      </thead>
        <tbody>
            <tr>
                <td><h4>Serial</h4></td>
                <td><?php echo e($equipo['serial']); ?></td>
            </tr>
            <tr>
                <th><h4>Marca</h4></th>
                <td><?php echo e($equipo['marca']); ?></td>
            </tr>
            <tr>
                <th><h4>Tipo</h4></th>
                <td><?php echo e($equipo['tipo_computador']); ?></td>
            </tr>
            <tr>
                <th><h4>Pertnece a:</h4></th>
                <td><?php echo e($cliente['name']); ?></td>
            </tr>
                <tr>
                <td><a class="btn btn-info" href="<?php echo e(route('equipos.edit',$equipo['id'])); ?>" role="button">Actualizar</a></td>
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><?php echo Form::open([
                    'method' => 'DELETE',
                    'route' => ['equipos.destroy', $equipo['id']]
                    ]); ?>

                    <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el equipo?")']); ?>

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