<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Empresa</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Email</th>
            <th>Estado</th>
            <th>Opcion</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($cliente->nombres); ?>                        
            </td>
            <td>
                <?php echo e($cliente->apellidos); ?>                        
            </td>
            <td>
                <?php echo e($cliente->empresa); ?>                        
            </td>
            <td>
                <?php echo e($cliente->telefono); ?>                        
            </td>
            <td>
                <?php echo e($cliente->direccion); ?>                        
            </td>
            <td>
                <?php echo e($cliente->email); ?>                        
            </td>
            <?php if($cliente->estado): ?>
                <td>
                    <span class="badge badge-success">Activado</span>

                </td>
            <?php else: ?>
                <td>
                    <span class="badge badge-danger">Desactivado</span>
                </td>
            <?php endif; ?>
            <td>
                <a type="button" class="btn btn-success btn-sm" href="<?php echo e(route('cliente.edit', ['id'=>$cliente->id])); ?>">
                    <i class="icon-pencil"></i>
                </a> &nbsp;
                <?php echo $__env->make('modules.cliente.frmDestroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="">
    <?php echo e($clientes->links()); ?>

</div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/cliente/frmTable.blade.php ENDPATH**/ ?>