<div class="card">
    <div class="card-header">
        <h5>Menu  - fecha <?php echo e($fecha); ?> </h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listaMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($plato->nombre); ?>                        
                    </td>
                    <td>
                        <?php echo e($plato->precio); ?>                        
                    </td>
                        <?php if($plato->estado): ?>
                        <td>
                            <span class="badge badge-success">Activo</span>
                        </td>
                        <?php else: ?>
                        <td>
                            <span class="badge badge-danger">Activo</span>
                        </td>
                        <?php endif; ?>                          
                    <td>
                        <?php echo $__env->make('modules.menu.frmDelete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                        
                        <?php echo $__env->make('modules.menu.frmPrecio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>  
    </div>
   <?php echo $__env->make('modules.menu.frmClose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/menu/frmMenu.blade.php ENDPATH**/ ?>