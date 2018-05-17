<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Listado de solicitudes que hay en el sistema</h3><br>
    <?php if(Auth::user()->rol=="Cliente"): ?>
    <p>para agregar solicitud haga click <a href="<?php echo e(url('solicitudes/create')); ?>">aquí</a></p>
    <?php endif; ?>
    <?php if(Session::has('flash_message')): ?>
        <article class="alert alert-success">
              <?php echo e(Session::get('flash_message')); ?>

        </article>

    <?php endif; ?>

    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($solicitud->id); ?></th>
                <td><?php echo e($solicitud->fecha); ?></td>
                <td><?php echo e($solicitud->hora); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('solicitudes.show',$solicitud->id)); ?>" role="button">Ver</a></td>
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><a class="btn btn-info" href="<?php echo e(route('solicitudes.edit',$solicitud->id)); ?>" role="button">Actualizar</a></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>