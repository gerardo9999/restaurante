<div class="sidebar">
  <nav class="sidebar-nav">
      <ul class="nav">
          <li class="nav-item">
              <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Escritorio</a>
          </li>
            <li class="nav-title">
                
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('mesa.index')); ?>" target="_top" ><i class="icon-book-open"></i>Mesa<span class="badge badge-danger"></span></a>
            </li>
            


            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('reserva.index')); ?>" target="_top"><i class="icon-book-open"></i>Reserva<span class="badge badge-danger"></span></a>
            </li>


            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Menú</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('menu.index')); ?>" target="_top"><i class="icon-bag"></i> Lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('producto.index')); ?>" target="_top"><i class="icon-bag"></i> Platos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('categoria.index')); ?>" target="_top"><i class="icon-bag"></i> Categoria</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('repartidor.index')); ?>" target="_top"><i class="icon-book-open"></i>Repartidor<span class="badge badge-danger"></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('vehiculo.index')); ?>" target="_top"><i class="icon-book-open"></i>Vehiculo<span class="badge badge-danger"></span></a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Ventas</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="i#"><i class="icon-basket-loaded"></i> Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('cliente.index')); ?>" target="_top"><i class="icon-notebook"></i> Clientes</a>
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
                      <a class="nav-link" href="i#"><i class="icon-chart"></i> Reporte Ingresos</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ventas</a>
                  </li>
              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="main.html"><i class="icon-info"></i> Acerca de...<span class="badge badge-info">IT</span></a>
          </li>
      </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><?php /**PATH C:\xampp\htdocs\Restaurante\proyecto\resources\views/template/sidebar.blade.php ENDPATH**/ ?>