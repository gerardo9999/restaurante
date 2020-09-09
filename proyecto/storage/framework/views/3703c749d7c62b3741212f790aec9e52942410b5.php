
<?php $__env->startSection('contenido'); ?>
<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('repartidor')->dom;
} elseif ($_instance->childHasBeenRendered('IpAl1Cn')) {
    $componentId = $_instance->getRenderedChildComponentId('IpAl1Cn');
    $componentTag = $_instance->getRenderedChildComponentTagName('IpAl1Cn');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IpAl1Cn');
} else {
    $response = \Livewire\Livewire::mount('repartidor');
    $dom = $response->dom;
    $_instance->logRenderedChild('IpAl1Cn', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/modules/repartidor/frmTable.blade.php ENDPATH**/ ?>