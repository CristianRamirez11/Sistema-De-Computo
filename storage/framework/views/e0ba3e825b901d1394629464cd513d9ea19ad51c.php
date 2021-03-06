<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Buscar cliente</h3>
    <?php echo Form::open(['method' => 'POST', 'route' => 'clientes.postSearch']); ?>

    <div class="form-group">
        <label for="exampleInputEmail1">Identificación</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese identificación">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
    <?php echo Form::close(); ?>

    </br>
    <?php if($cliente): ?>
    <h3>Resultado búsqueda</h3>
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Ver</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($cliente['nombre']); ?></td>
                <td><?php echo e($cliente['identificacion']); ?></td>
                <td><?php echo e($cliente['direccion']); ?></td>
                <td><?php echo e($cliente['telefono']); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('clientes.show',"1")); ?>" role="button">Ver</a></td>
                <td><a class="btn btn-info" href="<?php echo e(route('clientes.edit',"1")); ?>" role="button">Actualizar</a></td>
                <td><?php echo Form::open(['method' => 'POST', 'url' => 'clientes/delete/1']); ?>

                    <?php echo e(method_field('delete')); ?>

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        </tbody>
    </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>