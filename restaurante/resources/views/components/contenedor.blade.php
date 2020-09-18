<div style="width: 100%">
    @role('administrador')
        @include('plantilla.sidebaradministrador')
        @yield('contenido')
    @endrole
    @role('cliente')
        @include('plantilla.sidebarrepartidor')
        @include('layouts.repartidor')          
    @endrole

    @role('repartidor')
        @include('plantilla.sidebarrepartidor')
        @include('layouts.repartidor')            
    @endrole
</div>
