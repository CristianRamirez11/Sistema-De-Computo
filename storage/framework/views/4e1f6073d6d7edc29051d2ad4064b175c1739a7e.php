<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>

    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th colspan="8"><h3>Informe de solicitud #<?php echo e($solicitud['id']); ?></h3></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><h4>Codigo:</h4></td>
                <td><?php echo e($solicitud['id']); ?></td>
            </tr>
            <tr>
                <td><h4>Equipo:</h4> </td>
                <td><?php echo e($equipo['modelo']); ?></td>
            </tr>
            <tr>
                <td><h4>Descripcion:</h4></td>
                <td><?php echo e($solicitud['descripcion']); ?></td>
            </tr>
            <tr>
                <td><h4>Estado de la solicitud:</h4></td>
                <td><?php echo e($solicitud['estado']); ?></td>
            </tr>
            <tr>
                <td><h4>Técnico asignado:</h4></td>
                <td><?php echo e($tecnico->name); ?></td>
            </tr>
            <tr>
                <td><h4>Informe de mantenimiento:</h4></td>
                <?php if($solicitud->idMantenimiento>0): ?>
                <td><a class="btn btn-info" href="<?php echo e(route('mantenimientos.show',$solicitud['idMantenimiento'])); ?>" role="button">Ver informe</a></td>

                <?php else: ?>
                <td>Aún no se ha generado el informe</td>
                <?php endif; ?>
            </tr>
            <tr>
                  <?php if(Auth::user()->rol=="Cliente"): ?>
                <td><a class="btn btn-info" href="<?php echo e(route('solicitudes.edit',$solicitud['id'])); ?>" role="button">Actualizar</a></td>
                  <?php endif; ?>
                  <?php if(Auth::user()->rol=="Administrador"): ?>
                  <td><a class="btn btn-info" href="<?php echo e(route('solicitudes.asignarTecnico',$solicitud['id'])); ?>" role="button">Asignar técnico</a></td>
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
    <?php if(Auth::user()->rol == "Administrador"): ?>
    <div class="container">
      <a href="<?php echo e(route('solicitudes.index')); ?>" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
   <?php endif; ?>
   <?php if(Auth::user()->rol == "Cliente"): ?>
   <div class="container">
     <a href="<?php echo e(route('solicitudes.listMine',Auth::user()->id)); ?>" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
   </div>
   <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>