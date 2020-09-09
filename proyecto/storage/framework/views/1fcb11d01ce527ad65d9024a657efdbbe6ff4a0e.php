
<?php $__env->startSection('contenido'); ?>

<div class="container-fluid">
    <div class="card card-accent-info">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Crear Nuevo reserva
        </div>
        <form action="<?php echo e(route('reserva.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="comensales" class="label-items">Comensales </label>
                    <input type="text" name="comensales" class="form-control form-control-sm" value="<?php echo e(old('comensales')); ?>" placeholder="escribe los comensales" >
                    <?php $__errorArgs = ['comensales'];
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
                    <label for="telefono" class="label-items">Telefono</label>
                    <input type="text"  name="telefono" class="form-control form-control-sm " value="<?php echo e(old('telefono')); ?>" placeholder="escribe los telefono" >
                    <?php $__errorArgs = ['telefono'];
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
                    <label for="fecha" class="label-items">Fecha</label>
                    <input type="date" name="fecha" class="form-control form-control-sm" value="<?php echo e(old('login')); ?>" placeholder="escribe el fecha" >
                    <?php $__errorArgs = ['fecha'];
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
                    <label for="hora" class="label-items">Hora</label>
                    <input type="time" name="hora" class="form-control form-control-sm" value="<?php echo e(old('login')); ?>" placeholder="escribe el hora" >
                    <?php $__errorArgs = ['hora'];
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
                    <label for="observacion" class="label-items">Observacion</label>
                    <input type="text" name="observacion" class="form-control form-control-sm" value="<?php echo e(old('login')); ?>" placeholder="escribe el observacion" >
                    <?php $__errorArgs = ['observacion'];
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
                    <label class="form-control-label label-items" for="text-input">Cliente</label>
                            <select class="form-control select2" style="width: 100%; " name="idCliente">
                                <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nombres); ?></option>
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

<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/reserva/frmCreate.blade.php ENDPATH**/ ?>