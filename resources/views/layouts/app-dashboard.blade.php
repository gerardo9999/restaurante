<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  @include('template.dist.style-dashboard')
</head>
{{-- sidebar-collapse --}}
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse layout-footer-fixed layout-navbar-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin-lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('template.navbar.admin')
        @include('template.sidebar.admin')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('dashboard')
        </div>
        <!-- /.content-wrapper -->
        @include('template.components.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    @include('template.dist.script-dashboard')
</body>
</html>
