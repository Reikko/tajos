<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
        </div>
    </div><br>

    <div class="container">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h5>Destajista: <?php echo e($empleado->nombre); ?></h5>
                    <h5>Lote: <?php echo e($lote->nombre); ?></h5>
                    <h5>Folio N° : <?php echo e($avance->id); ?></h5>
                    <h5>Fecha inicial semana: <?php echo e($avance->f_ini); ?></h5>
                    <h5>Fecha final semana: <?php echo e($avance->f_fin); ?></h5>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Prototipo</th>
                            <th>Partida</th>
                            <th>Concepto</th>
                            <th>Descripcion</th>
                            <th>Unidad</th>
                            <th>Destajo</th>
                        </tr>
                        </thead>
                        <?php foreach($destajos as $num => $fila): ?>
                            <tbody>
                                <tr class="info">
                                    <td><?php echo e($num + 1); ?></td>
                                    <td><?php echo e($fila->prototipo); ?></td>
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

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div><br>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>