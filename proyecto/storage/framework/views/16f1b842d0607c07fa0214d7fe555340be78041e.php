<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Mesas
            <?php echo $__env->make('modules.mesa.frmCreate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <?php echo $__env->make('modules.mesa.frmSearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php echo $__env->make('template.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
            <?php echo $__env->make('template.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                <div class="row">
                    <?php $__currentLoopData = $mesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
                        <div class="card col-4" >
                            <div class="card-header card-info">
                                <img width="20px" src="<?php echo e(asset('imagenes/persona.png')); ?>" alt=""> <?php echo e($mesa->capacidad); ?>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($mesa->ubicacion); ?></h5>
                                <p class="card-text"></p>

                                
                            </div>
                        </div> 
                               
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> 
            <div class="">
                <?php echo e($mesas->links()); ?>

            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/component/mesa.blade.php ENDPATH**/ ?>