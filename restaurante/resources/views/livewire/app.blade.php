<div>
  <!--/ Nav Star /-->
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
      {{-- <button wire:click='mostrarMostrarFormularioPedido()' type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false" >
        Reservacion &nbsp; <span class="fa fa-search" aria-hidden="true"></span>
      </button> --}}
    </div>
  </nav>
  <div class="box-collapse">
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    @livewire('reservacion')
  </div>

  <section id="menu" class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="title-single-box">
            <h1 class="title-single">Nuestros Productos</h1>
            <div class="title-single-box p-4 text-center">
              <input type="text" class="form-control" name="fecha" placeholder="Buscar..." wire:model='searchText'>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news-grid grid">
    <div class="container">
      @if ($lista)
        
        <div class="row">
            <div class="col-md-6">
              <div class="row">
                @foreach($productos as $producto)
                  <div class="col-md-12">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                          <img src="{{asset($producto->foto)}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                          <div class="card-header-b">
                            <div class="card-category-b">
                              <button wire:click='ocultarLista({{ $producto->id }})' type="button" class="btn btn-success" class="category-b">
                                <i class="fa fa-eye"></i> 
                              </button>
                            </div>
                            <div class="card-title-b">
                              <h2 class="title-2">
                                <a href="#">{{$producto->nombre}}
                                <br></a>
                              </h2>
                            </div>
                            <div class="card-date">
                              <span class="date-b">{{$producto->precio}} .Bs</span>
                            </div>
                          </div>
                        </div>
                      

                    </div>

                  </div>
                @endforeach
              </div>
            </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            {{$productos->render()}}
          </div>
        </div>
      @else
        <div class="row">
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                  <div class="card-box-b card-shadow news-box">
                      <div class="img-box-b">
                        <img src="" alt="" class="img-b img-fluid">
                      </div>
                      <div class="card-overlay">
                        <div class="card-header-b">
                          <div class="card-category-b">
                            <button  type="button" class="btn btn-success" class="category-b">
                              <i class="fa fa-eye"></i> 
                            </button>
                          </div>
                          <div class="card-title-b">
                            <h2 class="title-2">
                              <a href="#">
                              <br></a>
                            </h2>
                          </div>
                          <div class="card-date">
                            <span class="date-b"></span>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      @endif

    </div>
  </section>
</div>
