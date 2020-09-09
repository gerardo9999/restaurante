<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Categorías
            <?php echo $__env->make('modules.categoria.frmCreate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <?php echo $__env->make('modules.categoria.frmSearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
             <?php echo $__env->make('template.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
             <?php echo $__env->make('template.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
               <?php echo $__env->make('modules.categoria.frmTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/component/categoria.blade.php ENDPATH**/ ?>