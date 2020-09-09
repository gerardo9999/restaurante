<button  data-toggle="modal" data-target="#update-plato<?php echo e($plato->id); ?>" type="button" class="btn btn-sm btn-success">
    &nbsp;$
</button> 

<div wire:ignore.self id="update-plato<?php echo e($plato->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-success">
                <h5 class="modal-title" id="my-modal-title">Actualizar Precio <?php echo e($plato->id); ?></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="">Precio <?php echo e($plato->idProducto); ?></label>
                        <input type="text" class="form-control" wire:model="precio" >
                        <?php $__errorArgs = ['precio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" >Cancelar</button>
                <button class="btn btn-success btn-sm" data-dismiss="modal" aria-label="Close" wire:click.prevent="savePrecio(<?php echo e($plato->idProducto); ?>)"><i class="fas fa-edit"></i>  Actualizar</button>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/menu/frmPrecio.blade.php ENDPATH**/ ?>