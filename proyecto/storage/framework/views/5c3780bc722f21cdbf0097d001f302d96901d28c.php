
<?php $__env->startSection('contenido'); ?>

<div class="container-fluid">
    <div class="card card-accent-info">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Crear Nuevo Vehiculo
        </div>
        <form action="<?php echo e(route('vehiculo.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="tipoVehiculo" class="label-items">Tipo Vehiculo</label>
                    <input type="text" name="tipoVehiculo" class="form-control form-control-sm" value="<?php echo e(old('tipoVehiculo')); ?>" placeholder="escribe los tipoVehiculo" >
                    <?php $__errorArgs = ['tipoVehiculo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                        <small class="error-validate"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                </div>
                <div class="form-group col-6">
                    <label for="caracteristicas" class="label-items">Caracteristicas</label>
                    <input type="text"  name="caracteristicas" class="form-control form-control-sm " value="<?php echo e(old('caracteristicas')); ?>" placeholder="escribe los caracteristicas" >
                    <?php $__errorArgs = ['caracteristicas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                        <small class="error-validate"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-6">
                    <label for="placa" class="label-items">Placa</label>
                    <input type="text" name="placa" class="form-control form-control-sm" value="<?php echo e(old('login')); ?>" placeholder="escribe el Placa" >
                    <?php $__errorArgs = ['placa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                        <small class="error-validate"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                </div>
               
                <div class="form-group col-md-6">
                    <label class="form-control-label label-items" for="text-input">Repartidor</label>
                            <select class="form-control select2" style="width: 100%; " name="idRepartidor">
                                <?php $__currentLoopData = $repartidores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repartidor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($repartidor->id); ?>"><?php echo e($repartidor->nombre); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </select>
               </div>
            </div>

            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-info" >Guardar</button>
            <button type="reset" class="btn btn-sm btn-danger" >Cancelar</button>
        </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/vehiculo/frmCreate.blade.php ENDPATH**/ ?>