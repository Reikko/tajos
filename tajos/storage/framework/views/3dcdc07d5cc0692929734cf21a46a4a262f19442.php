<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1><?php echo e($lote->nombre); ?></h1>
                <h5>Destajista: <?php echo e($empleado->nombre); ?></h5>
                <h5>Folio N° : <?php echo e($avance->id); ?></h5>
                <h5>Fecha inicial semana: <?php echo e($avance->f_ini); ?></h5>
                <h5>Fecha final semana: <?php echo e($avance->f_fin); ?></h5>
            </div>
            <div class="panel-body">
                <?php echo Form::open(['route'=>'ingreso.store','method'=>'POST']); ?>

                <?php echo e(Form::hidden('id_avance',$id)); ?>

                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>CONCEPTO</th>
                        <th>DESCRIPCION</th>
                        <th>CANTIDAD</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>
                            <?php echo Form::submit('Agregar',['class'=>'btn btn-primary btn-block']); ?>

                        </td>
                        <td>
                            <div class="form-group">
                                <?php echo Form::select('id_destajo',$destajos,null,['class'=>'form-control']); ?>

                            </div>
                        </td>
                        <td width="200">
                            <div class="form-group">
                                <div class="input-group">
                                    <?php echo Form::number('porcentaje1',0,['class'=>'form-control','min'=>'0','max'=>'1','id'=>'p1']); ?>

                                    <span class="input-group-addon">.</span>
                                    <?php echo Form::number('porcentaje2',0,['class'=>'form-control','min'=>'0','max'=>'9','id'=>'p2']); ?>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <?php foreach($filas as $fila): ?>
                        <tr>
                            <td>
                                <?php echo e($fila->concepto); ?>

                            </td>
                            <td>
                                <?php echo e($fila->descripcion); ?>

                            </td>
                            <td width="200">
                                <?php echo e($fila->porcentaje); ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                </table>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>