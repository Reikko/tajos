<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1><?php echo e($lote->nombre); ?>

                    <?php echo e(link_to('prototipo/'.$proto->id_prototipo,'Regresar', ['class'=>'btn btn-primary'])); ?>

                </h1>
            </div>
            <div class="panel-body">
                <?php echo Form::open(['route'=>'ingreso.store','method'=>'POST']); ?>

                <?php echo e(Form::hidden('id_avance',$id)); ?>

                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CONCEPTO</th>
                        <th>DESCRIPCION</th>
                        <th>AVANCE</th>
                        <th>PRECIO TOTAL</th>
                        <th>PRECIO POR AVANCE</th>
                    </tr>
                    </thead>
                    <?php
                        $subtotal = 0;
                    ?>
                    <?php foreach($filas as $fila): ?>
                        <?php if($fila->avance == 1): ?>
                            <tr class="success">
                        <?php else: ?>
                            <tr>
                        <?php endif; ?>
                            <td>
                                <?php echo e($fila->id_destajo); ?>

                            </td>
                            <td>
                                <?php echo e($fila->concepto); ?>

                            </td>
                            <td>
                                <?php echo e($fila->descripcion); ?>

                            </td>
                            <td>
                                <?php echo e($fila->avance); ?>

                            </td>
                            <td>
                                $<?php echo e($fila->destajo); ?>

                            </td>
                            <td>
                                $<?php echo e($fila->destajo*$fila->avance); ?>

                                <?php
                                    $subtotal += $fila->destajo*$fila->avance;
                                ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total acumulado</th>
                    <th>$<?php echo e($subtotal); ?></th>
                </table>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>