<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Listado de clientes</h3><br>
    <p>para agregar un nuevo cliente haga click <a href="<?php echo e(url('clientes/create')); ?>">aquí</a></p>
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
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($cliente['id']); ?></th>
                <td><?php echo e($cliente['name']); ?></td>
                <td><?php echo e($cliente['telefono']); ?></td>
                <td><?php echo e($cliente['direccion']); ?></td>
                <td><?php echo e($cliente['telefono']); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('clientes.show',$cliente['id'])); ?>" role="button">Ver</a></td>
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><a class="btn btn-info" href="<?php echo e(route('clientes.edit',$cliente['id'])); ?>" role="button">Actualizar</a></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>