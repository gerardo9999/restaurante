<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#actualizar-mesa<?php echo e($mesa->id); ?>">
    <i class="icon-pencil"></i>
</button> &nbsp;

<div class="modal fade" id="actualizar-mesa<?php echo e($mesa->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-success modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header alert-info">
                <h4 class="modal-title">Actualizar Mesa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('mesa.update', ['id'=>$mesa->id])); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="capacidad" class="label-items">Capacidad</label>
                            <input type="text" value="<?php echo e($mesa->capacidad); ?>" id="capacidad" name="capacidad" class="form-control form-control-sm" placeholder="Escribe la capacidad" >
                            <?php $__errorArgs = ['capacidad'];
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
                            <label for="descripcion">Descripcion</label>
                            <input type="text" value="<?php echo e($mesa->descripcion); ?>" id="descripcion" name="descripcion" class="form-control form-control-sm  " placeholder="escribe la descripcion" >
                            <?php $__errorArgs = ['descripcion'];
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
                            <label for="ubicacion" class="label-items">Ubicacion</label>
                            <input type="text" value="<?php echo e($mesa->ubicacion); ?>" id="ubicacion" name="ubicacion" class="form-control form-control-sm  " placeholder="escribe la ubicacion" >
                            <?php $__errorArgs = ['ubicacion'];
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
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-sm btn-success">Guardar</button>
            </div>
        </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/mesa/frmUpdate.blade.php ENDPATH**/ ?>