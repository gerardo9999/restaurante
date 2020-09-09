<div>
    <div class="container-fluid">
        <div class="card card-accent-info">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> <?php echo e($title); ?> 
            </div>
            <div class="card-body">
                <?php echo $__env->make('template.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                
                <?php if($tabla): ?>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                    <div class="input-group-prepend">
                                        <input  type="text" class="form-control form-control-sm"  placeholder="Buscar..." wire:model="searchText">
                                   </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>foto</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($producto->nombre); ?>                        
                                            </td>
                                            <td>
                                                <img class="img-fluid" width="100px"  src="<?php echo e(asset($producto->foto)); ?>" alt="">                        
                                            </td>
                                            <td>
                                                <button type="button" wire:click="agregarProducto(<?php echo e($producto->id); ?>)"  class="btn btn-success btn-sm">
                                                    <i class="icon-check"></i>
                                                </button>

                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>        
                            </div>
                                <div class="text-center">
                                    <?php echo e($productos->links()); ?>

                                </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <?php echo $__env->make('modules.menu.frmMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <?php else: ?>
                    <?php echo $__env->make('modules.menu.frmFecha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</div>
<?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/component/menu.blade.php ENDPATH**/ ?>