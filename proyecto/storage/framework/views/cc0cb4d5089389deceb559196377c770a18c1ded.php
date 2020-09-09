<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Repartidores
            <a type="button" href="<?php echo e(route('repartidor.create')); ?>" class="btn btn-secondary">
                <i class="icon-plus"></i>&nbsp;Nuevo
            </a>
        </div>
        <div class="card-body">
            <div class="form-group row">
               <?php echo $__env->make('modules.repartidor.frmSearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
             <?php echo $__env->make('template.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
             <?php echo $__env->make('template.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
         <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>CedulaID</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $repartidores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repartidor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
    
                            <td>
                                <?php echo e($repartidor->nombre); ?>                        
                            </td>
                            <td>
                                <?php echo e($repartidor->apellidos); ?>                        
                            </td>
                            <td>
                                <?php echo e($repartidor->cedulaID); ?>                        
                            </td>
                            <td>
                                <?php echo e($repartidor->telefono); ?>                        
                            </td>
                            <td>
                                <?php echo e($repartidor->direccion); ?>                        
                            </td>
                            <td>
                                <a type="button" class="btn btn-success btn-sm" href="<?php echo e(route('repartidor.edit', ['id'=>$repartidor->id])); ?>">
                                    <i class="icon-pencil"></i>
                                </a> &nbsp;
                                
                                <?php echo $__env->make('modules.repartidor.frmDestroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="">
                    <?php echo e($repartidores->links()); ?>

                </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/component/repartidor.blade.php ENDPATH**/ ?>