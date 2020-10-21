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
                <a class="nav-link" href="#nosotros">Nosotros</a>
            </li>

          {{-- <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Productos</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>
          
          {{-- <li class="nav-item">
            <a class="nav-link" href="contact.html">Pedidos</a>
          </li> --}}


          @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Sistema
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/index')}}">Home</a>
                    <a class="dropdown-item" href="{{route('logout')}}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    
                ><i class="fa fa-lock"></i> Cerrar sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </div>
            </li>              
          @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('login')}}">Iniciar Sesion</a>
                    <a class="dropdown-item" href="{{route('register')}}">Registrarse</a>
                </div>
            </li>
          @endauth          
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false" onclick='verPedido()'>
        <span class="fa fa-search" aria-hidden="true">   
        </span>
        <a>Mis Pedidos</a> 
      </button>
    </div>
</nav>
