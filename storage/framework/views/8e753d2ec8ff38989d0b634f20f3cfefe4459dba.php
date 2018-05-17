<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Actualizar cliente</h3>
    <?php echo Form::model($cliente, [
        'method' => 'PUT',
        'route' => ['clientes.update', $cliente->id]
    ]); ?>

    <div class="form-group">

        <?php echo Form::label('nombre', 'Nombre', ['for' => 'name']); ?>

        <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">

        <?php echo Form::label('email', 'Email', ['for' => 'email']); ?>

        <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">

        <?php echo Form::label('direccion', 'Direccion', ['for' => 'direccion']); ?>

        <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

    </div>
    <div class="form-group">

        <?php echo Form::label('cedula', 'Cedula', ['for' => 'cedula']); ?>

        <?php echo Form::text('cedula', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">

        <?php echo Form::label('telefono', 'Telefono', ['for' => 'telefono']); ?>

        <?php echo Form::tel('telefono', null, ['class' => 'form-control']); ?>

    </div>


    <div class="form-group">
      <!--<?php echo Form::label('Privilegios', 'Privilegios', ['for' => 'rol']); ?>-->
      <?php echo Form::hidden('rol', 'Cliente'); ?>

    </div>

    <?php echo Form::submit('Actualizar cliente', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-info">Cancelar</a>
    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>