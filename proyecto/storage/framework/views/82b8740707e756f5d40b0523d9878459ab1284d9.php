
<?php $__env->startSection('contenido'); ?>
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i> Vehiculos
        <a type="button" href="<?php echo e(route('vehiculo.create')); ?>" class="btn btn-secondary">
            <i class="icon-plus"></i>&nbsp;Nuevo
        </a>
    </div>
    <div class="card-body">
        <div class="form-group row">
           <?php echo $__env->make('modules.vehiculo.frmSearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
         <?php echo $__env->make('template.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
         <?php echo $__env->make('template.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
     <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Tipo Vehiculo</th>
                        <th>Caracteristicas</th>
                        <th>Placa</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $vehiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td>
                            <?php echo e($vehiculo->tipoVehiculo); ?>                        
                        </td>
                        <td>
                            <?php echo e($vehiculo->caracteristicas); ?>                        
                        </td>
                        <td>
                            <?php echo e($vehiculo->placa); ?>                        
                        </td>
                        <td>
                            <a type="button" class="btn btn-success btn-sm" href="<?php echo e(route('vehiculo.edit', ['id'=>$vehiculo->id])); ?>">
                                <i class="icon-pencil"></i>
                            </a> &nbsp;
                            
                            <?php echo $__env->make('modules.vehiculo.frmDestroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="">
                <?php echo e($vehiculos->links()); ?>

            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/vehiculo/table.blade.php ENDPATH**/ ?>