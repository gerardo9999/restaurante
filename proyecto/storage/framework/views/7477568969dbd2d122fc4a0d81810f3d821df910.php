<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Lista de Menu
            <a type="button" href="<?php echo e(url('/menu/create')); ?>" class="btn btn-secondary">
                <i class="icon-plus"></i>&nbsp;Nuevo
            </a>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <?php echo $__env->make('modules.lista.frmSearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
             <?php echo $__env->make('template.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
             <?php echo $__env->make('template.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
             <?php echo $__env->make('modules.lista.frmTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

             
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/component/lista.blade.php ENDPATH**/ ?>