<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <a class="navbar-brand text-brand" href="#">R<span class="color-b">estaurante</span></a>
          <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
            data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
          </button>
          <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="#bienvenido">Bienvenido</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section2">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
              </li>
              @auth 
              <li class="nav-item">
                <a class="nav-link" href="{{url('/index')}}">Ver Pedido y Reserva  </a>
              </li>
              <li class="nav-item">
              <a class="dropdown-item" href="{{route('logout')}}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        
                    ><i class="fa fa-lock"></i> Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Iniciar Sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Registrarse</a>
              </li>
              @endauth
              
            </ul>
          </div>
          @if ($arrayProducto)
            {{-- <button wire:click='mostrarMostrarFormularioPedido()' type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false" >
                Reservacion &nbsp; <span class="fa fa-search" aria-hidden="true"></span>
            </button>            --}}
            {{-- <button  type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" 
            data-toggle="modal" data-target="#create-especialidad">
            Reservacion &nbsp; 
            
        </button> --}}
        


        

          @endif

        </div>
    </nav>
