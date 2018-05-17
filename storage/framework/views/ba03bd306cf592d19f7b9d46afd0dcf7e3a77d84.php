<?php $__env->startSection('content'); ?>
<div class="container full-height centrado-vertical" >
    <h3 class="text-center">Inicio de sesión</h3>
    <?php if(Session::has('flash_message')): ?>
        <article class="alert alert-success">
              <?php echo e(Session::get('flash_message')); ?>

        </article>

    <?php endif; ?>
    <div class="row centrado-horizontal">
        <div class="col-6 align-self-center">
            <form class="form-horizontal " role="form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> ">

                        <label for="email" class="control-label">Correo electrónico</label>

                    <div class="col-12">
                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                        <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <label for="password" class="control-label">Contraseña</label>

                    <div class="col-12">
                        <input id="password" type="password" class="form-control" name="password" required>

                        <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Recordarme
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group margin-bottom-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            Iniciar sesión
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>