
<?php $__env->startSection('contenido'); ?>

<div class="container-fluid">
    <div class="card card-accent-info">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Crear Nuevo repartidor
        </div>
        <form action="<?php echo e(route('repartidor.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="nombres" class="label-items">Nombre</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" value="<?php echo e(old('nombre')); ?>" placeholder="escribe los nombre" >
                    <?php $__errorArgs = ['nombres'];
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
                    <label for="" class="label-items">Apellidos</label>
                    <input type="text"  name="apellidos" class="form-control form-control-sm " value="<?php echo e(old('apellidos')); ?>" placeholder="escribe los apellidos" >
                    <?php $__errorArgs = ['apellidos'];
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
                    <label for="login" class="label-items">Usuario</label>
                    <input type="text" name="login" class="form-control form-control-sm" value="<?php echo e(old('login')); ?>" placeholder="escribe el usuario" >
                    <?php $__errorArgs = ['login'];
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
                    <label for="" class="label-items">Password</label>
                    <input type="password"  name="password" class="form-control form-control-sm "  placeholder="*****************" >
                    <?php $__errorArgs = ['password'];
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
                <div class="form-group col-4">
                    <label for="cedulaID" class="label-items">CedulaID</label>
                    <input type="text" name="cedulaID" class="form-control form-control-sm" value="<?php echo e(old('cedulaID')); ?>" placeholder="digite numero de cedulaID" >
                    <?php $__errorArgs = ['cedulaID'];
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

                <div class="form-group col-4">
                    <label for="telefono" class="label-items">Telefono</label>
                    <input type="text" name="telefono" class="form-control form-control-sm" value="<?php echo e(old('telefono')); ?>" placeholder="digite numero de telefono" >
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
                <div class="form-group col-4">
                    <label for="" class="label-items">Direccion</label>
                    <input type="text"  name="direccion" class="form-control form-control-sm "  placeholder="escriba la direccion" >
                    <?php $__errorArgs = ['direccion'];
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

            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-info" >Guardar</button>
            <button type="reset" class="btn btn-sm btn-danger" >Cancelar</button>
        </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/repartidor/frmCreate.blade.php ENDPATH**/ ?>