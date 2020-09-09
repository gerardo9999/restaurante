
<?php $__env->startSection('contenido'); ?>
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('mesa')->dom;
} elseif ($_instance->childHasBeenRendered('ZToJmue')) {
    $componentId = $_instance->getRenderedChildComponentId('ZToJmue');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZToJmue');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZToJmue');
} else {
    $response = \Livewire\Livewire::mount('mesa');
    $dom = $response->dom;
    $_instance->logRenderedChild('ZToJmue', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/mesa/frmTable.blade.php ENDPATH**/ ?>