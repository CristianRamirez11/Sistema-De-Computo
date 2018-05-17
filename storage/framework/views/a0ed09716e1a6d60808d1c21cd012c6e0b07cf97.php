<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Listado de equipos</h3><br>
    <?php if(Auth::user()->rol == "Administrador"): ?>
    <p>para agregar un nuevo equipo haga click <a href="<?php echo e(url('equipos/create')); ?>">aquí</a></p>
    <?php endif; ?>
    <?php if(Session::has('flash_message')): ?>
        <article class="alert alert-success">
              <?php echo e(Session::get('flash_message')); ?>

        </article>

    <?php endif; ?>
    <div class="table-responsive-xl">
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Serial</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($equipo->id); ?></th>
                <td><?php echo e($equipo->serial); ?></td>
                <td><?php echo e($equipo->marca); ?></td>
                <td><?php echo e($equipo->tipo_computador); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('equipos.show',$equipo->id)); ?>" role="button">Ver</a></td>
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><a class="btn btn-info" href="<?php echo e(route('equipos.edit',$equipo->id)); ?>" role="button">Actualizar</a></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>