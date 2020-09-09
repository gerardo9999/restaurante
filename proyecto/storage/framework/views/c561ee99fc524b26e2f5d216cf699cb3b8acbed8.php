<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#nueva-categoria">
    <i class="icon-plus"></i>&nbsp;Nuevo
</button>
<div class="modal fade" id="nueva-categoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('categoria.store')); ?>" method="post"  class="form-horizontal">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label label-items" for="text-input">Categoria</label>
                        <div class="col-md-9">
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escriba el nombre de la categoría">
                            <span class="help-block required-message">(*) Ingrese el nombre de la categoría</span>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" name="createCategoria" value="categoria" class="btn btn-sm btn-primary">Guardar</button>
            </div>
        </form>

        </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/categoria/frmCreate.blade.php ENDPATH**/ ?>