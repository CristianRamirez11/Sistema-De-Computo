<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <?php if($equipo): ?>
    <h3>Equipo: <?php echo e($equipo['modelo']); ?></h3>
    <table class="table">

            <tr>
                <td>Serial</td>
                  <td><?php echo e($equipo['serial']); ?></td>
            </tr>
                <th>Marca</th>
                <th>Tipo</th>

                <td><?php echo e($equipo['serial']); ?></td>
                <td><?php echo e($equipo['marca']); ?></td>
                <td><?php echo e($equipo['tipo_computador']); ?></td>
                <td><a class="btn btn-info" href="<?php echo e(route('equipos.edit',$equipo['id'])); ?>" role="button">Actualizar</a></td>
                <?php if(Auth::user()->rol=="Administrador"): ?>
                <td><?php echo Form::open([
                    'method' => 'DELETE',
                    'route' => ['equipos.destroy', $equipo['id']]
                    ]); ?>

                    <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Está seguro de eliminar el equipo?")']); ?>

                </td>
                <?php endif; ?>
            </tr>
        </tbody>
    </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>