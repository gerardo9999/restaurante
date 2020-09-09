<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detalle-producto<?php echo e($producto->id); ?>">
    <i class="icon-eye"></i>
</button>
<div class="modal fade" id="detalle-producto<?php echo e($producto->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-info" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Producto <?php echo e($producto->id); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                    <img class="card-img" src="<?php echo e(asset($producto->foto)); ?>" alt="">

                        <h5 class="card-title"></h5>
                        <p class="card-text"><?php echo e($producto->descripcion); ?></p>
                    </div>
                </div>
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
  </div>
  <?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/producto/frmShow.blade.php ENDPATH**/ ?>