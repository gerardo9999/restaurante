<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav"> 
                {{-- Escritorio --}}
                <li   class="nav-item">
                    <a wire:click='contenido(0)' class="nav-link active" href="#"><i class="icon-speedometer"></i> Perfil  {{ $opcion }}</a>
                </li>
                
                {{-- Menu --}}
                <li class="nav-title">
                    Menú
                </li>

                {{-- Pedidos --}}
                <li  class="nav-item">
                    <a wire:click='contenido(1)' class="nav-link" href="#"><i class="icon-book-open"></i> Pedidos</span></a>
                </li>

                {{-- Menu --}}
                <li  class="nav-item">
                    <a wire:click='contenido(2)' class="nav-link" href="#"><i class="icon-book-open"></i> Menú <span class="badge badge-success"></span></a>
                </li>
                
                {{-- Productos --}}
                <li  class="nav-item">
                    <a wire:click='contenido(3)' class="nav-link" href="#"><i class="icon-bag"></i>Productos</a>
                </li>
                {{-- Repartidores --}}
                <li  class="nav-item">
                    <a wire:click='contenido(4)' class="nav-link" href="#"><i class="icon-book-open"></i> Reserva <span class="badge badge-success"></span></a>
                </li>        
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div> 