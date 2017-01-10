<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1>
                        <?php echo e($prototipo->nombre); ?>

                    </h1>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Partida</th>
                            <th>Concepto</th>
                            <th>Descripcion</th>
                            <th>Unidad</th>
                            <th>Destajo</th>
                        </tr>
                        </thead>
                        <?php foreach($destajos as $num => $fila): ?>
                            <tbody>
                            <tr class="success">
                                <td><?php echo e($num + 1); ?></td>
                                <td><?php echo e($fila->partida); ?></td>
                                <td><?php echo e($fila->concepto); ?></td>
                                <td><?php echo e($fila->descripcion); ?></td>
                                <td><?php echo e($fila->unidad); ?></td>
                                <td>$ <?php echo e($fila->destajo); ?></td>
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