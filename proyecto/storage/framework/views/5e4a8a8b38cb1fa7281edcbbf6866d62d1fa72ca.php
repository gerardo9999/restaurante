<div class="row">
    <div class="form-group col-8">
        <label>Agregue la Fecha </label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
            <input type="date" wire:model="fecha"  class="form-control form-control-sm"/>
            <div class="input-group-append">
                <div class="input-group-text">
                    <button wire:click="agregarMenu()" class="btn btn-info btn-sm">Agregar Fecha</button>
                </div>
            </div>
        </div>
            <?php $__errorArgs = ['fecha'];
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
</div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/menu/frmFecha.blade.php ENDPATH**/ ?>