<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h2>Bienvenido a CRAL, <?php echo e(Auth::user()->name); ?></h2><br>
    <h3><p>A continuación encontrará las opciones disponibles del sistema:</p></h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
              <th>Usuarios</th>
              <th>Informes de Mantenimiento</th>
              <th>Solicitudes</th>
              <th>Equipos</th>
              <th>Tecnicos</th>
              <th>Clientes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="<?php echo e(route('admin.index')); ?>" class="btn btn-outline-primary">Ver usuarios</a></td>
                <td><a href="<?php echo e(route('mantenimientos.index')); ?>" class="btn btn-outline-primary">Ver informes</a></td>
                <td><a href="<?php echo e(route('solicitudes.index')); ?>" class="btn btn-outline-primary">Ver solicitudes</a></td>
                <td><a href="<?php echo e(route('equipos.index')); ?>" class="btn btn-outline-primary">Ver equipos</a></td>
                <td><a href="<?php echo e(route('tecnicos.index')); ?>" class="btn btn-outline-primary">Ver tecnicos</a></td>
                <td><a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-outline-primary">Ver clientes</a></td>
            </tr>
            <tr>
                <td><a href="<?php echo e(route('admin.create')); ?>" class="btn btn-outline-success">Crear usuarios</a></td>
                <td><a href="<?php echo e(route('mantenimientos.index')); ?>" class="btn btn-outline-success">Crear informes</a></td>
                <td><a href="<?php echo e(route('solicitudes.index')); ?>" class="btn btn-outline-success">Crear solicitudes</a></td>
                <td><a href="<?php echo e(route('equipos.index')); ?>" class="btn btn-outline-success">Añadir equipos</a></td>
                <td><a href="<?php echo e(route('tecnicos.index')); ?>" class="btn btn-outline-success">Añadir tecnico</a></td>
                <td><a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-outline-success">Añadir cliente</a></td>
            </tr>

        </tbody>
    </table>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>