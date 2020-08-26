<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restaurante</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('distribution/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('distribution/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons-->
    <link rel="stylesheet" href="{{ asset('distribution/css/fontastic.css')}}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('distribution/vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('distribution/vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- air datepicker-->
    <link rel="stylesheet" href="{{ asset('distribution/vendor/air-datepicker/css/datepicker.min.css')}}">
    <!-- lightbox-->
    <link rel="stylesheet" href="{{ asset('distribution/vendor/lightbox2/css/lightbox.min.css')}}">
    <!-- timepicki-->
    <link rel="stylesheet" href="{{ asset('distribution/vendor/timepicki/css/timepicki.css')}}">
    <!-- Slider-->
    <link rel="stylesheet" href="{{ asset('distribution/css/slider.min.css')}}">
    <!-- google font - dancing script for headings | pt sans for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|PT+Serif:400,400i,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('distribution/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('distribution/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('distribution/img/favicon.ico')}}">
    <!-- Favicon-->
    <script src="{{ asset('distribution/js/modernizr.custom.79639.min.js')}}"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container"><a href="#" class="navbar-brand"> <img src="{{ asset( $restaurante[0]->logo )}}" alt="Italiano" width="100"></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-align-justify"></i></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#hero" class="nav-link link-scroll">Inicio</a></li>
                <li class="nav-item"><a href="#about" class="nav-link link-scroll">Nosotros</a></li>

                <li class="nav-item"><a href="#dishes" class="nav-link link-scroll">Platos</a></li>
                <li class="nav-item"><a href="#menu" class="nav-link link-scroll">Menu</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contactanos</a></li>
              </ul><a id="open-reservation" href="#" class="btn navbar-btn btn-unique d-none d-lg-inline-block">Registrarse</a>
            </div>
          </div>
        </nav>
      </header>
      <!-- End Navbar-->
    </div>


    <!-- Hero Section-->
    <section id="hero" class="hero">
      <div id="slider" class="sl-slider-wrapper">
        <div class="sl-slider">
          <!-- slide-->
         
          <!-- slide-->
          <div data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5" class="sl-slide bg-2">
            <div style="background-image: url({{ asset($restaurante[0]->foto1) }});" class="sl-slide-inner">
              <div class="container">
                <h1></h1>
                <p>{{ $restaurante[0]->slogan1 }}</p>
              </div>
            </div>
          </div>
          <!-- slide-->
          <div data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1" class="sl-slide bg-3">
            <div style="background-image: url({{ asset($restaurante[0]->foto2) }});" class="sl-slide-inner">
              <div class="container">
                <h2>Visita <span class="text-primary">{{ $restaurante[0]->nombre }}</span></h2>
                <h1></h1>
                <p>{{ $restaurante[0]->slogan2 }}</p>
              </div>
            </div>
          </div>

        </div>
        <!-- End sl-slider-->
        <!-- slider pagination-->
        <nav id="nav-dots" class="nav-dots"><span class="nav-dot-current"></span><span></span><span></span></nav>
        <!-- scroll down btn-->
        <a id="scroll-down" href="#about" class="hidden-xs"></a>
       
      </div>
      <!-- End slider-wrapper-->
    </section>


    
    <!-- Details-->
    <section id="details" class="details">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="heading text-center">
              <p>Llamanos ahora</p>
              <h5>Entrega a Domicilio</h5>
            </div><a href="tel:{{ $restaurante[0]->telefono1 }}" class="phone">{{ $restaurante[0]->telefono1 }}</a>
          </div>
          <div class="col-lg-6">
            <div class="heading text-center">
              <p></p>
              <h5>Reserva</h5>
            </div><a href="#" class="reviews has-border"><i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </section>


    <!-- End Details-->
    
    <!-- About Section-->
    <section id="about" class="about">
      <div class="container text-center">
        <header>
          <h2>Sobre Nosotros</h2>
          <h3></h3>
        </header>
        <p class="lead">
                        {{ $restaurante[0]->nostros }}
        </p>
      </div>
    </section>
    <!-- End About Section-->
    

    
    <!-- App Section-->
    
    <!-- End App Section-->
    



    <!-- Dishes Section-->
    <section id="dishes" class="dishes">
      <div class="container text-center">
        <header>
          <h2>Lista de Platos</h2>
          <h3>COMIDA FRESCA Y SALUDABLE DISPONIBLE.</h3>
        </header>
        <!-- Set up your HTML-->
        <div class="owl-carousel owl-theme">
          <!-- item-->
          @foreach ($platos as $producto)
            
          <div class="dish">
            <div class="profile"><img src="{{ asset($producto->foto)}}" alt="foto" class="img-fluid d-block mx-auto">
              <div class="price"><span>{{ $producto->precio }}</span></div>
            </div>
            <div class="text">
              <h4>{{  $producto->nombre}}</h4>
              <p>
                {{  $producto->descripcion  }}
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Dishes Section-->
    <!-- Menu Section-->
    <section id="menu" class="menu">
      <div class="container">
        <header class="text-center">
          <h2>Nuestro menú del dia</h2>
          <h3>Nuestro Menú de Comidas</h3>
        </header>
        <div class="menu">
          <!-- Tabs Navigatin-->
          <ul role="tablist" class="nav nav-tabs text-center has-border d-flex justify-content-center">
            <li role="presentation" class="nav-item"><a href="#breakfast" aria-controls="breakfast" role="tab" data-toggle="tab" class="nav-link active">Menú</a></li>
          </ul>


          <div class="tab-content">
            <div id="breakfast" role="tabpanel" class="tab-pane active">
              <div class="row">
                <!-- item-->
                <div class="col-lg-6">
                  <div class="menu-item has-border clearfix recommended">
                    <div class="item-details pull-left">
                      <h5>Wild Mushroom Bucatini with Kale</h5>
                      <p>Mushroom / Veggie / White Sources</p>
                    </div>
                    <div class="item-price pull-right"><strong class="text-large text-primary">20$</strong><span class="text-medium"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      
    <!-- Footer-->
    <footer id="contact" class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 brief">
            <div class="header"><img src="{{ asset($restaurante[0]->logo)}}" alt="italiano" width="100"></div>
            <p>  
              {{ $restaurante[0]->descripcion }}
            </p>
          </div>
          <div class="col-md-6 contact">
            <div class="header">
              <h6>Contactanos</h6>
            </div>
            <ul class="contact list-unstyled">
              <li><span class="icon-map text-primary"></span>{{ $restaurante[0]->direccion }}</li>
              <li><a href="{{ $restaurante[0]->email }}"><span class="icon-phone text-primary"></span>{{ $restaurante[0]->email }}</a></li>
              <li><span class="icon-mail text-primary"></span>{{ $restaurante[0]->telefono1 }}</li>
              <li><span class="icon-printer text-primary"></span>{{ $restaurante[0]->telefono1 }}</li>
            </ul>
          </div>
        </div>
        <ul class="social list-inline">

        </ul>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <ul class="list-inline mb-0">

              </ul>
            </div>
            <div class="col-md-7">
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer-->
    
    <!-- scroll top btn-->
    <div id="scrollTop" class="btn-unique"><i class="fa fa-angle-up"></i></div>
    <!-- end scroll top btn-->
    
    <!-- moadal booking form-->
    <div class="reservation-overlay">
      <section id="reservation-modal" class="reservation-modal">
        <div id="close"><i class="icon-close"></i></div>
        <div class="container">
          <div class="row">
            <div class="form-holder col-md-12 text-center">
              <h2>Make a reservation</h2>
              <h3>Book your table now</h3>
              <form id="booking-form-alternative" method="get" action="#">
                <div class="row">
                  <div class="col-md-10 mx-auto">
                    <div class="row">
                      <label for="cname" class="col-md-6 unique">Name
                        <input id="cname" name="clientname" type="text" required="">
                      </label>
                      <label for="cemail" class="col-md-6 unique">Email
                        <input id="cemail" name="clientemail" type="email" required="">
                      </label>
                      <label for="cnumber" class="col-md-6 unique">Number
                        <input id="cnumber" name="clientnumber" type="text" required="">
                      </label>
                      <label for="cpeople" class="col-md-6 unique">How Many People
                        <input id="cpeople" name="clientpeople" type="number" min="1" required="">
                      </label>
                      <label for="cdate" class="col-md-6 unique">Date
                        <input id="cdate" name="date" type="text" data-language="en" required="" class="datepicker-here">
                      </label>
                      <label for="time-alt" class="col-md-6 unique">Time
                        <input id="time-alt" name="clienttime" type="text" required="" class="timepicker">
                      </label>
                      <label for="request-alt" class="col-md-12 unique">Special Request
                        <textarea id="request-alt" name="clientrequest" required=""></textarea>
                      </label>
                      <div class="col-sm-12">
                        <button type="submit" class="btn-unique">Book Now</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end modal booking form-->


    
    <script src="{{ asset('distribution/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('distribution/vendor/popper.js')}}/umd/popper.min.js')}}"> </script>
    <script src="{{ asset('distribution/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('distribution/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('distribution/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('distribution/js/jquery.ba-cond.min.js')}}"></script>
    <script src="{{ asset('distribution/js/jquery.slitslider.min.js')}}"></script>
    <script src="{{ asset('distribution/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('distribution/vendor/lightbox2/js/lightbox.min.js')}}"></script>
    <script src="{{ asset('distribution/vendor/timepicki/js/timepicki.js')}}"></script>
    <script src="{{ asset('distribution/vendor/air-datepicker/js/datepicker.min.js')}}"></script>
    <script src="{{ asset('distribution/vendor/air-datepicker/js/i18n/datepicker.en.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0dSWcBx-VghzhzQB6oCMTgeXMOhCYTvk"></script>
    <script src="{{ asset('distribution/js/front.js')}}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->

  </body>
</html>