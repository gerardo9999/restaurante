
<?php $__env->startSection('contenido'); ?>
<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('producto')->dom;
} elseif ($_instance->childHasBeenRendered('HBpPoA1')) {
    $componentId = $_instance->getRenderedChildComponentId('HBpPoA1');
    $componentTag = $_instance->getRenderedChildComponentTagName('HBpPoA1');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HBpPoA1');
} else {
    $response = \Livewire\Livewire::mount('producto');
    $dom = $response->dom;
    $_instance->logRenderedChild('HBpPoA1', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/producto/frmTable.blade.php ENDPATH**/ ?>