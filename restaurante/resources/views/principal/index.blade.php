<!DOCTYPE html>
<html lang="es">

@include('components.head')

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
 @include('components.header')

    <div class="app-body">
      @include('components.sidebar')

        <main class="main">
            @yield('contenido')
        </main>
    </div>
    @include('components.footer')
    @include('components.script')
</body>
</html>