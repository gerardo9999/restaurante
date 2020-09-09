<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td>
                <?php echo e($categoria->nombre); ?>                        
            </td>
            <td>
                <?php echo $__env->make('modules.categoria.frmUpdate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('modules.categoria.frmDestroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="">
    <?php echo e($categorias->links()); ?>

</div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/categoria/frmTable.blade.php ENDPATH**/ ?>