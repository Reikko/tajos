<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>
                    Prototipo <?php echo e($id); ?>

                    <?php echo e(link_to('prototipo','Regresar', ['class'=>'btn btn-primary'])); ?>

                    <?php echo e(link_to('precios/'.$id,'Tabla Precios', ['class'=>'btn btn-primary'])); ?>

                </h1>
            </div>
            <div class="panel-body">
                <?php foreach($lotes as $fila): ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><?php echo e($fila->nombre); ?></div>
                        <div class="panel-body">
                            <?php echo e(link_to('lote/'.$fila->id_lote,'Ver avance', ['class'=>'btn btn-primary'])); ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>