
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
    <div class="card card-accent-info">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Actualizar Producto
        </div>
        <form action="<?php echo e(route('producto.update',['id'=>$producto[0]->id])); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="nombre" class="label-items">Nombre</label>
                    <input type="text" value="<?php echo e($producto[0]->nombre); ?>" name="nombre" class="form-control form-control-sm" placeholder="escribe el nombre" >
                    <?php $__errorArgs = ['nombre'];
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
                    <label for="" class="label-items">Precio</label>
                    <input type="number" step=0.01 value="<?php echo e($producto[0]->precio); ?>" name="precio" class="form-control form-control-sm  " placeholder="digite el precio" >
                    <?php $__errorArgs = ['precio'];
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

                <div class="form-group col-md-6">
                    <label class="form-control-label label-items" for="text-input">Categoria</label>
                    <div class="">
                        <select class="form-control select2" style="width: 100%;" name="idCategoria">
                            <option value="<?php echo e($producto[0]->idCategoria); ?>"><?php echo e($producto[0]->categoria); ?></option>
                            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </select>
                    </div>
                </div>

                <div class="form-group col-6">
                    <label class="form-label w-100 label-items">Seleccione una foto</label>
                    <input type="file" name="foto">
                    <small class="form-text text-muted foto-message">Solo foto jpg</small>
                    <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small><strong><p style="color: red"><?php echo e($message); ?></p></strong></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-12 form-control-label label-items" for="text-input">Descripcion</label>
                <div class="col-md-12">
                    <textarea name="descripcion" id="" class="form-control" cols="30" rows="5"><?php echo e($producto[0]->descripcion); ?></textarea>
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

<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/producto/frmUpdate.blade.php ENDPATH**/ ?>