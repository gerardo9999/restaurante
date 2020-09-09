    <!-- Bootstrap and necessary plugins -->
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="<?php echo e(asset('coreui/vendors/js/popper.min.js')); ?>"></script>
   <script src="<?php echo e(asset('coreui/vendors/js/bootstrap.min.js')); ?>"></script>
   <script src="<?php echo e(asset('coreui/vendors/js/pace.min.js')); ?>"></script>
   <!-- Plugins and scripts required by all views -->
   <script src="<?php echo e(asset('coreui/vendors/js/Chart.min.js')); ?>"></script>
   <!-- GenesisUI main scripts -->
   <script src="<?php echo e(asset('coreui/vendors/js/template.js')); ?>"></script>


   <script src="<?php echo e(asset('coreui/select2/js/select2.full.min.js')); ?>"></script>
   <script>
       $('.select2').select2({

       });
   </script>
   <script src="<?php echo e(asset('coreui/moment/moment.min.js')); ?> "></script>
   
   <script src="<?php echo e(asset('coreui/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?> "></script>
   <script>
       $('#reservationdate').datetimepicker({
           format: 'YYYY/MM/DD',
           // format: 'MM/DD/YYYY hh:mm A'
       });
   </script>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/template/script.blade.php ENDPATH**/ ?>