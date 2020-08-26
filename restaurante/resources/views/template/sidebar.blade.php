<div class="sidebar">
  <nav class="sidebar-nav">
      <ul class="nav">
          <li class="nav-item">
              <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Escritorio</a>
          </li>
            <li class="nav-title">
                
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('cliente.index') }}" target="_top" ><i class="icon-book-open"></i>Cliente<span class="badge badge-danger"></span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('repartidor.index') }}" target="_top"><i class="icon-book-open"></i>Prepartidor<span class="badge badge-danger"></span></a>
            </li>


            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Menú</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu.index') }}" target="_top"><i class="icon-bag"></i> Lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('producto.index') }}" target="_top"><i class="icon-bag"></i> Platos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categoria.index') }}" target="_top"><i class="icon-bag"></i> Categoria</a>
                    </li>
                </ul>
            </li>
          <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Ventas</a>
              <ul class="nav-dropdown-items">
                  <li class="nav-item">
                      <a class="nav-link" href="i#"><i class="icon-basket-loaded"></i> Reserva</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#"><i class="icon-notebook"></i> Clientes</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Acceso</a>
              <ul class="nav-dropdown-items">
                  <li class="nav-item">
                      <a class="nav-link" href="i#"><i class="icon-user"></i> Usuarios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#"><i class="icon-user-following"></i> Roles</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
              <ul class="nav-dropdown-items">
                  <li class="nav-item">
                      <a class="nav-link" href="i#"><i class="icon-chart"></i> Bitacora</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="main.html"><i class="icon-info"></i> Cerrar Sesion<span class="badge badge-info"></span></a>
          </li>
      </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>