<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>
                    Lotes
                </h1>
            </div>
            <div class="panel-body">
                <?php foreach($lotes as $fila): ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><?php echo e($fila->id_lote); ?></div>
                        <div class="panel-body">Panel Content</div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>