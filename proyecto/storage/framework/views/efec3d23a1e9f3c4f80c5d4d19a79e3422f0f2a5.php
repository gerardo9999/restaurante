
<?php $__env->startSection('contenido'); ?>
<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('categoria')->dom;
} elseif ($_instance->childHasBeenRendered('qIVIx6l')) {
    $componentId = $_instance->getRenderedChildComponentId('qIVIx6l');
    $componentTag = $_instance->getRenderedChildComponentTagName('qIVIx6l');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qIVIx6l');
} else {
    $response = \Livewire\Livewire::mount('categoria');
    $dom = $response->dom;
    $_instance->logRenderedChild('qIVIx6l', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/categoria/frmIndex.blade.php ENDPATH**/ ?>