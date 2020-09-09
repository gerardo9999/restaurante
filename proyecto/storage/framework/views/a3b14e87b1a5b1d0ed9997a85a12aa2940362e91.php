
<?php $__env->startSection('contenido'); ?>
    
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('lista')->dom;
} elseif ($_instance->childHasBeenRendered('piWjTMb')) {
    $componentId = $_instance->getRenderedChildComponentId('piWjTMb');
    $componentTag = $_instance->getRenderedChildComponentTagName('piWjTMb');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('piWjTMb');
} else {
    $response = \Livewire\Livewire::mount('lista');
    $dom = $response->dom;
    $_instance->logRenderedChild('piWjTMb', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/lista/frmIndex.blade.php ENDPATH**/ ?>