<div>
    <div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> Productos
          <a type="button" href="<?php echo e(route('producto.create')); ?>" class="btn btn-secondary">
            <i class="icon-plus"></i>&nbsp;Nueva
          </a>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <?php echo $__env->make('modules.producto.frmSearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
             <?php echo $__env->make('template.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
             <?php echo $__env->make('template.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    
              <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Foto</th>
                        <th>Categoria</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                        <td>
                            <?php echo e($producto->nombre); ?>                        
                        </td>
                        <td>
                          <?php echo e($producto->precio); ?>                        
                        </td>
                        <td>
                          <img class="img-fluid"  src="<?php echo e(asset($producto->foto)); ?>" width="100px" alt="">
                        </td>
                        <td>
                          <?php echo e($producto->categoria); ?>                        
                        </td>
                        <td>
                            <a type="button" href="<?php echo e(route('producto.edit', ['id'=>$producto->id])); ?>" class="btn btn-success btn-sm">
                              <i class="icon-pencil"></i>
                            </a>
                            <?php echo $__env->make('modules.producto.frmShow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('modules.producto.frmDestroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
    
              </table>
    
              <div class="">
                <?php echo e($productos->links()); ?>

              </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/component/producto.blade.php ENDPATH**/ ?>