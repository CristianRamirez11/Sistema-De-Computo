




<div class="container">
<h2 style="color:#1780BD">Crear nuevo usuario</h2>
<p class="lead"></p>
<hr>

<?php echo Form::open(['route' => 'admin.store']); ?>


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

        <?php echo Form::label('password', 'Contraseña', ['for' => 'password', 'step' => '0']); ?>

        <?php echo Form::password('password', null, ['class' => 'form-control']); ?>

    </div>
    <div class="form-group">

        <?php echo Form::label('password_confirmation', 'Confirmar Contraseña',['for' => 'password_confirmation']); ?>

        <?php echo Form::password('password_confirmation', null,['class' => 'form-control']); ?>

    </div>

    <div class="input field col s3">
      <?php echo Form::label('Privilegios', 'Privilegios', ['for' => 'rol']); ?>

      <?php echo Form::select('rol', array('Administrador' => 'Administrador', 'Cliente' => 'Cliente', 'Tecnico' => 'Tecnico')); ?>

    </div>

    <?php echo Form::submit('Crear usuario', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.index')); ?>" class="btn btn-info">Cancelar</a>
    <?php echo Form::close(); ?>

</div>
