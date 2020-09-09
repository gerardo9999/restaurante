<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#actualizar-categoria<?php echo e($categoria->id); ?>">
    <i class="icon-pencil"></i>
</button> &nbsp;

<div class="modal fade" id="actualizar-categoria<?php echo e($categoria->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-success modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header alert-info">
                <h4 class="modal-title">Actualizar categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('categoria.update', ['id'=>$categoria->id])); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label label-items" for="text-input">Nombre</label>
                        <div class="col-md-9">
                            <input type="text" value="<?php echo e($categoria->nombre); ?>"  id="nombre" name="nombre" class="form-control" placeholder="Nombre de categoría">
                            <span class="help-block required-message">(*) Ingrese el nombre de la categoría</span>
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
  </div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/categoria/frmUpdate.blade.php ENDPATH**/ ?>