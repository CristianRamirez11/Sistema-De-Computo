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
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><?php echo Form::open([
                    'method' => 'DELETE',
                    'route' => ['mantenimientos.destroy', $mantenimiento['id']]
                    ]); ?>

                    <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el informe?")']); ?>

                <?php echo Form::close(); ?>

                </td>
                <?php endif; ?>
            </tr>
        </tbody>
    </table>
    <?php if(Auth::user()->rol == "Administrador"): ?>
    <div class="container">
      <a href="<?php echo e(route('mantenimientos.index')); ?>" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    <?php endif; ?>
    <?php if(Auth::user()->rol == "Cliente"): ?>
    <div class="container">
      <a href="<?php echo e(route('solicitudes.show', $mantenimiento->codigo)); ?>" class="btn btn-primary btn-block" role="button">Volver a la solicitud</a>
    </div>
    <?php endif; ?>
    <?php if(Auth::user()->rol == "Tecnico"): ?>
    <div class="container">
      <a href="<?php echo e(route('mantenimientos.listMine', Auth::user()->id)); ?>" class="btn btn-primary btn-block" role="button">Volver a la lista</a>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>