<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Lote</th>
                            <th>Empleado</th>
                            <th>Fecha Inicial</th>
                            <th>Fecha Final</th>
                            <th>Opcion</th>
                        </tr>
                        </thead>
                        <?php foreach($avances as $num => $fila): ?>
                            <tbody>
                                <tr class="success">
                                    <td><?php echo e($num + 1); ?></td>
                                    <td><?php echo e($fila->id_lote); ?></td>
                                    <td><?php echo e($fila->id_empleado); ?></td>
                                    <td><?php echo e($fila->f_ini); ?></td>
                                    <td><?php echo e($fila->f_fin); ?></td>
                                    <td><?php echo e(link_to('avance/'.$fila->id,'Ver', ['class'=>'btn btn-primary btn-block'])); ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>