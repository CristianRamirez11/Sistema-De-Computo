<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Listado de usuarios</h3><br>
    <p>para agregar un nuevo usuario haga click <a href="<?php echo e(route('admin.create')); ?>">aquí</a></p>
    <?php if(Session::has('flash_message')): ?>
        <article class="alert alert-success">
              <?php echo e(Session::get('flash_message')); ?>

        </article>

    <?php endif; ?>


    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($usuario['id']); ?></th>
                <td><?php echo e($usuario['name']); ?></td>
                <td><?php echo e($usuario['telefono']); ?></td>
                <td><?php echo e($usuario['direccion']); ?></td>
                <td><?php echo e($usuario['telefono']); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('admin.show',$usuario['id'])); ?>" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="<?php echo e(route('admin.edit',$usuario['id'])); ?>" role="button">Actualizar</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>