<!DOCTYPE html>
<html lang="en">
@include('page.head')

<body>
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">

    <div id="title-reservacion" style="display: none"; >
      <div class="title-box-d">
        <h3 class="title-d">Realice su Reservacion</h3>
      </div>
    </div>
    
    <div id="title-pedido" style="display: none"; >
      <div class="title-box-d">
        <h3 class="title-d">Detalle de Pedido</h3>
      </div>
    </div>


    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <div id="reservacion" style="display: none"; >
        @livewire('reservacion')
      </div>
      <div id="pedido" style="display: none";>
        

        <div class="row">
          <form action="#" method="post" autocomplete="off">
              @csrf
              
              {{-- <div class="card"> --}}
                  <div class="card-body">
                      <div class="row">
                          
                          <div class="col-12 table-responsive">
                              <table id="detalles" class="table table-hover table-hover table-bordered">
                                  <thead class="">
                                  <th>Opciones</th>
                                  <th>Producto</th>
                                  <th>Cantidad</th>
                                  <th>Precio </th>
                                  <th>Subtotal</th>
                                  </thead>
                                  <tbody>

                                  </tbody>
                                  <tfoot>
                                  <th>TOTAL</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th>
                                      <h4 id="total"> Bs/. 0.00</h4>
                                  </th>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
              {{-- </div> --}}
              <div class="form-group" id="guardar">
                  @csrf
                  <button type="submit" class="btn btn-outline-primary">Guardar</button>
                  <button type="reset" class="btn btn-outline-danger">Cancelar</button>
              </div>
          </form>
        </div>

















      </div>
    </div>
  </div>
  <!--/ Form Search End /-->

  @yield('contenido')

  <!--/ footer Star /-->
  {{-- <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">EstateAgency</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                sed aute irure.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> contact@example.com</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> +54 356 945234</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">International sites</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">China</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">EstateAgency</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer> --}}
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  @include('page.scripts')
  <script>    
  this.arrayProducto = [];

    function agregar(idProducto) {
      console.log(idProducto);
    }

    var cont = 0;
        total = 0;
        subtotal = [];
        // $("#guardar").hide();


    function  agregarAlDetalle(producto) {
        
        console.log(producto);
        productoCantidad = document.getElementById('cantidad'+producto.idProducto).value;
        // console.log(producto);
        // console.log(productoCantidad);
        subtotal[cont] = (productoCantidad * producto.precio);
                total = total + subtotal[cont];


        console.log(producto);
        console.log(subtotal);
        console.log(total);
        console.log(productoCantidad);
        var fila = `<tr class="selected" id="fila${cont}">
                                <td><button type="button" class="btn btn-outline-warning" onclick="eliminar(${cont});">X</button></td>
                                <td>${producto.nombre}</td>
                                <td><input type="number" name="cantidad[]" value="${productoCantidad}" readonly class="form-control"></td>
                                <td><input type="number" name="cantidad[]" value="${producto.precio}" readonly class="form-control"></td>
                                <td>${subtotal[cont]}</td>
                            </tr>
                            <input type="hidden" name="idproducto[]" value="${producto.idProducto}">
                            
                            `
                            
                    
                            ;
                            cont++;

        $("#detalles").append(fila);
    }   



    function reservacion(){
      document.getElementById('reservacion').style.display       = 'block' ;
      document.getElementById('title-reservacion').style.display = 'block' ;
      document.getElementById('pedido').style.display            = 'none'  ;
    }

    function  verPedido() {
      document.getElementById('reservacion').style.display       = 'none'  ;
      document.getElementById('title-reservacion').style.display = 'none'  ;
      document.getElementById('title-pedido').style.display = 'none'  ;
      document.getElementById('pedido').style.display            = 'block' ;
    }



  </script>
  <script>
      $(document).ready(function () {
            $('#bt_add').click(function () {
                agregar();
            });

      });
      
  </script>
</body>
</html>