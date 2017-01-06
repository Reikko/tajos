<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
               <h1>
                   Prototipos
               </h1>
            </div>
            <div class="panel-body">
                <?php foreach($prototipos as $fila): ?>
                    <div class="panel panel-info">
                        <div class="panel-heading"><?php echo e($fila->nombre); ?></div>
                        <div class="panel-body">
                            <div class="btn-group btn-group-justified">
                                <?php echo e(link_to('prototipo/'.$fila->id,'Ver lotes', ['class'=>'btn btn-primary'])); ?>

                                <?php echo e(link_to_route('prototipo.edit', 'Editar', $fila->id, ['class'=>'btn btn-primary'])); ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>