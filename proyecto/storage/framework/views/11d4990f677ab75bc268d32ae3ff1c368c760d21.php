
<?php $__env->startSection('contenido'); ?>
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('menu')->dom;
} elseif ($_instance->childHasBeenRendered('ybHpjNO')) {
    $componentId = $_instance->getRenderedChildComponentId('ybHpjNO');
    $componentTag = $_instance->getRenderedChildComponentTagName('ybHpjNO');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ybHpjNO');
} else {
    $response = \Livewire\Livewire::mount('menu');
    $dom = $response->dom;
    $_instance->logRenderedChild('ybHpjNO', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/menu/frmIndex.blade.php ENDPATH**/ ?>