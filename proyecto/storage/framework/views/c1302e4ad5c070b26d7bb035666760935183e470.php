
<?php $__env->startSection('contenido'); ?>
<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('cliente')->dom;
} elseif ($_instance->childHasBeenRendered('92HTuRz')) {
    $componentId = $_instance->getRenderedChildComponentId('92HTuRz');
    $componentTag = $_instance->getRenderedChildComponentTagName('92HTuRz');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('92HTuRz');
} else {
    $response = \Livewire\Livewire::mount('cliente');
    $dom = $response->dom;
    $_instance->logRenderedChild('92HTuRz', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/cliente/frmIndex.blade.php ENDPATH**/ ?>