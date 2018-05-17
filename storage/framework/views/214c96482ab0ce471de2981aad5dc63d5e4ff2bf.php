<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Listado de tecnicos</h3><br>
    <p>para agregar un nuevo tecnico haga click <a href="<?php echo e(url('tecnicos/create')); ?>">aquí</a></p>
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
            <?php $__currentLoopData = $tecnicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tecnico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($tecnico['id']); ?></th>
                <td><?php echo e($tecnico['name']); ?></td>
                <td><?php echo e($tecnico['telefono']); ?></td>
                <td><?php echo e($tecnico['direccion']); ?></td>
                <td><?php echo e($tecnico['telefono']); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('tecnicos.show',$tecnico['id'])); ?>" role="button">Ver</a></td>
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><a class="btn btn-info" href="<?php echo e(route('tecnicos.edit',$tecnico['id'])); ?>" role="button">Actualizar</a></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>