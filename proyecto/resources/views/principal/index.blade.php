<!DOCTYPE html>
<html lang="es">
@include('template.head')
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
    @include('template.script')
</body>
</html>