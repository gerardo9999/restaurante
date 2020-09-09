<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Opcion</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($lista->fecha); ?>    
            </td>
            <td>
                <button wire:click='buscarProducto(<?php echo e($lista->id); ?>)' class="btn btn-success btn-sm">
                    <i class="icon-pencil"></i>
                </button>
                <button class="btn btn-info btn-sm">
                    <i class="icon-eye"></i>
                </button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div>
    
    

</div>
<?php echo e($productos); ?>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Opcion</th>
        </tr>
    </thead>
    <tbody>        
        
    </tbody>
</table>
<div>
    
</div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/lista/frmTable.blade.php ENDPATH**/ ?>