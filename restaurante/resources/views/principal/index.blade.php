<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Ventas Laravel Vue Js- IncanatoIT">
    <meta name="author" content="Incanatoit.com">
    <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
    <link rel="shortcut icon" href="{{ asset('coreui/vendors/img/favicon.png')}}">
    <title>Sistema Ventas - IncanatoIT</title>
    <!-- Icons -->
    <link href="{{ asset('coreui/vendors/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('coreui/vendors/css/simple-line-icons.min.css')}}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('coreui/vendors/css/style.css')}}" rel="stylesheet">

    {{-- Select2 --}}
    <link rel="stylesheet" href="{{ asset('coreui/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coreui/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coreui/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"> 
    @livewireStyles
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
   @include('template.header')
    <div class="app-body">
       @include('template.sidebar')
        <main class="main">
            <ol class="breadcrumb">
            </ol>
            <div class="container-fluid">
               @yield('contenido')
            </div>
        </main>
    </div>

    
    @include('template.footer')

    <!-- Bootstrap and necessary plugins -->
   {{-- <script src="{{ asset('coreui/vendors/js/jquery.min.js')}}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('coreui/vendors/js/popper.min.js')}}"></script>
    <script src="{{ asset('coreui/vendors/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('coreui/vendors/js/pace.min.js')}}"></script>
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
 @livewireScripts
</body>

</html>