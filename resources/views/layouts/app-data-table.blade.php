<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>
    @include('template.dist.style-datatable')
</head>

{{-- <body class="hold-transition sidebar-mini"> --}}
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse layout-footer-fixed layout-navbar-fixed">
    <div class="wrapper">
         <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin-lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('template.navbar.admin')
        @include('template.sidebar.admin')

        @yield('content')

        @include('template.components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>
    @include('template.dist.script-datatable')
    @stack('table-user')
    <style>
        /*estilos para la tabla*/
        table th {
            background-color: #689fcf !important;
            color: white;
        }

        table>tbody>tr>td {
            vertical-align: middle !important;
        }

        /*para alinear los botones y cuadro de busqueda*/
        .btn-group,
        .btn-group-vertical {
            position: absolute !important;
        }
    </style>
</body>
</html>
