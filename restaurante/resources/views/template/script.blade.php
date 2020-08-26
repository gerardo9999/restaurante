    <!-- Bootstrap and necessary plugins -->
    {{-- <script src="{{ asset('coreui/vendors/js/jquery.min.js')}}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('coreui/vendors/js/popper.min.js')}}"></script>
    <script src="{{ asset('coreui/vendors/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{ asset('coreui/vendors/js/pace.min.js')}}"></script> --}}
    <!-- Plugins and scripts required by all views -->
    <script src="{{ asset('coreui/vendors/js/Chart.min.js')}}"></script>
    <!-- GenesisUI main scripts -->
    <script src="{{ asset('coreui/vendors/js/template.js')}}"></script>

    <script src="{{ asset('coreui/select2/js/select2.full.min.js') }}"></script>
    <script>    
        $('.select2').select2({

        });
    </script>
    <script src="{{ asset('coreui/moment/moment.min.js') }} "></script>
    {{-- Datepicker --}}
    <script src="{{ asset('coreui/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }} "></script>
    <script>
        $('#reservationdate').datetimepicker({
            format: 'YYYY/MM/DD',
            // format: 'MM/DD/YYYY hh:mm A'
        });
    </script>
    {{-- @livewireScripts --}}