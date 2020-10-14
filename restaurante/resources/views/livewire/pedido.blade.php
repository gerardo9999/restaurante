<div>
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
              <li class="nav-item">
                <a class="nav-link" href="blog-grid.html">Iniciar Sesion</a>
              </li>
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

    <script>
        function ejemplo(){
            alert('ejemplo');
        }
    </script>


    <section id="menu" class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="title-single-box">
                <h1 class="title-single">Nuestros Productos</h1>
                <div class="title-single-box p-4 text-center">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="grid-option">
                                <select wire:model='categoria' class="custom-select">
                                @foreach (@menuCategoria() as $item)
                                    <option selected>{{ $item->nombre }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="fecha" placeholder="Buscar..." wire:model='searchText'>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="property-grid grid">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    @foreach ($menu as $lista)
                        <div class="col-md-12">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="{{ asset($lista->foto) }}" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">{{ $lista->precio }} .Bs</span>
                                            </div>
                                            <a href="#producto" data-toggle="modal" data-target="#ejemplo{{ $lista->idProducto }}" class="link-a">{{ $lista->nombre }}
                                                <span class="ion-ios-arrow-forward"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                <h4 class="card-info-title">Categoria</h4>
                                                <span>{{ $lista->categoria}}
                                                </span>
                                                </li>
                                                <li>
                                                <h4 class="card-info-title">Precio</h4>
                                                <span>{{ $lista->precio }} .Bs</span>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div wire:ignore.self id="ejemplo{{ $lista->idProducto }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header alert-default-info">
                                        <h5 class="modal-title" id="my-modal-title">
                                            <div class="img-avatar align-items-center text-center">
                                                <img height="200px" width="100%" class="img-fluid" src="{{ $lista->foto }}" alt="">
                                            </div>
                                            
                                        </h5>

                                        <button class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="card-header text-center">
                                        <p>
                                            <strong>{{ $lista->nombre }}</strong>
                                        </p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Cuantos Desea Ordenar?</label>
                                            <input wire:model='cantidad' type="number" class="form-control" >
                                            @error('cantidad')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer text-center">
                                        <button wire:click.prevent='agregarProductoDetalle({{ $lista->idProducto }})' class="close" data-dismiss="modal" aria-label="Close" type="submit" class="btn btn-info btn-sm">Agregar al Pedido</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>




                <div class="col-md-6">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center">
                                Tienes Hambre?
                            </div>
                            @php
                             dump($arrayProducto);
                            @endphp  
                            <div class="card-body">
                                <div class=""  >

                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Producto</th>
                                                <th>Cantidad</th>
                                                <th>Sub Total</th>
                                                <th>Opcion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($arrayProducto as $item)
                                                <tr class="text-center">
                                                    <td>{{ $item["producto"] }}</td>
                                                    <td>{{ $item["cantidad"] }}</td>
                                                    <td>{{ $item["subTotal"] }}</td>
                                                    <td>
                                                        <button wire:click='eliminarProductoDetalle()' class="btn btn-sm btn-success"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr style="background-color: #6eb88d;">
                                                <td colspan="3" align="right"><strong>Total :</strong></td>
                                                <td>
                                                    {{ $total }}
                                                </td>
                                            </tr>       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                @if ($arrayProducto)
                                    @auth

                                        <button class="btn btn-sm btn-success">Envianos tu Ubicacion</button>
                                    @else
                                        <button class="btn btn-sm btn-success">Realizar Pedido</button>
                                    @endauth
                                @else
                                    <div class="text-center">
                                        No tiene seleccionado ningun producto
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
         
        </div>
    </section>      
</div>
