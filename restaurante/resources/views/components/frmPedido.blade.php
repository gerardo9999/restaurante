@include('page.sidebar')
    
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

                                        <button class="btn btn-sm btn-success" data-target="#maps" data-toggle="modal">Envianos tu Ubicacion</button>
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
    <!-- Modal -->
    <div class="modal fade" id="maps" role="dialog">
        <div class="modal-dialog modal-lg">    
        <!-- Modal content-->
        <div class="modal-content" id="modalcon" >
            <div class="modal-header" >         
            <h3 align="center" style="width:100%; padding: 0px;">Indica tu dirección 
            <!--
                <img src="../Resources/img/grido-logo.png" alt="Logo" style="width:80px;">
            -->
            </h3>
            </div>
            <div class="modal-body">
            <div id="div_maps" >
                <!--  GOOGLE MAPS-->
                <div id="map"></div>

                <div style="display:none">
                    Nueva Ubiv.<input type="text" id="coords" />
                    <br>
                    Latitu <input class="xy" type="text"  id="longitud" name="longitud" />
                    <br>
                    Longitud <input class="xy" type="text" id="latitud" name="latitud" />
                <br>
                <br>
                </div>
                <div class="clearfix"></div>

                <div id="ayuda" align="center">

                <p id="nomDir">
                <!--<b>No es tu ubicacion ? </b><small style="font-size: 10px;" >Recuerda que puedes modificar tu ubicación moviendo el icono que indica donde estas ahora. </small>
                -->
                </p> 

                </div>
                <input  type="text" id="txtDir" name="txtDir" style="display:none">        
                <!-- END ,MAPS -->
            </div>
    
            <div class="clearfix"></div>
                <div class="alert alert-info" style="padding: 5px; margin-bottom: 0px;" align="center" >
                <b> Verifique su ubicación exacta para recibir su pedido</b>
                </div> 
            </div>

            <div class="modal-footer" stye="text-align: center !important;">
                <button  type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</button>
                <button  style=" border-radius: 6px !important; font-size: 16px; width:220px;"  type="button" name="confir_ubv" id="confir_ubv" Onclick="addUbicacion(longitud.value,latitud.value,txtDir.value); confirmar.disabled=false;" class="btn btn-success btn-lg verde" data-dismiss="modal"  >ACEPTAR</button>
            </div>
        </div>
        
        </div>

    </div>
    <style> 
        @media(max-width: 700px){
        #div_maps {
                
                height: 320px;
            
            }

        }

        @media(min-width: 700px){
        #div_maps {
                height: 380px;
            
            }

        }
        
        #map {
        width: 100%;
        height: 90%;

        }
        
        #modalcon{
            color: #16438e;
            line-height: 1.42857143;
            font-family: "Frank";
        }

    </style>
    <script>
    
    var marker;         
    var coords = {};    
    var x=document.getElementById("nomDir");
    var options = {
    enableHighAccuracy: true,
    timeout: 6000,
    maximumAge: 0
    };
    //Funcion principal
    initMap = function () 
    {

        // navigator.geolocation.getCurrentPosition(viewMap,ViewError,{timeout:3000});

        //usamos la API para geolocalizar el usuario

            navigator.geolocation.getCurrentPosition(function (position)
            {
                coords =  {
                lng: position.coords.longitude,
                lat: position.coords.latitude,
                };
                document.getElementById("longitud").value = position.coords.longitude;
                document.getElementById("latitud").value = position.coords.latitude;

                setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa
                
            
            },function(error)
            {
            
                // El segundo parámetro es la función de error
                switch(error.code) 
                {
                    case error.PERMISSION_DENIED:
                    // El usuario denegó el permiso para la Geolocalización.
                    console.log(error);
                    alert('ACTIVE SU GPS O USTED BLOQUEO EL PERMISO DE UBICACION');
                    // initMap();
                    break;
                    case error.POSITION_UNAVAILABLE:
                    // La ubicación no está disponible.
                    console.log(error);
                        alert('ACTIVE SU GPS Y RECARGE LA PAGINA');
                    break;
                    case error.TIMEOUT:
                    // Se ha excedido el tiempo para obtener la ubicación.
                    console.log(error);
                        alert('ACTIVE SU GPS Y RECARGE LA PAGINA');
                    break;
                    case error.UNKNOWN_ERROR:
                    // Un error desconocido.
                    alert('INTENTE MÁS TARDE');
                    console.log(error);
                    break;
                }
                coords =  
                {
                    lng: '-17.34981426967225',
                    lat: '-63.262442186041355'
                };
                document.getElementById("longitud").value = '-17.34981426967225';
                document.getElementById("latitud").value =  '-63.262442186041355';
                setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa
                
                
            },options);
        
    }
    function setMapa (coords)
{   
            //Se crea una nueva instancia del objeto mapa
        var map = new google.maps.Map(document.getElementById('map'),
        {
            zoom: 17,
            center:new google.maps.LatLng(coords.lat,coords.lng),

        });

        //Creamos el marcador en el mapa con sus propiedades
        //para nuestro obetivo tenemos que poner el atributo draggable en true
        //position pondremos las mismas coordenas que obtuvimos en la geolocalización
        marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        title:"Mi ubicación actual",
        position: new google.maps.LatLng(coords.lat,coords.lng),

        });
        //map.setCenter(pos);
        //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
        //cuando el usuario a soltado el marcador
        marker.addListener('click', toggleBounce);
        
        marker.addListener( 'dragend', function (event)
        {
            //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
            document.getElementById("coords").value = this.getPosition().lat()+","+ this.getPosition().lng();
            document.getElementById("longitud").value = this.getPosition().lng();
            document.getElementById("latitud").value =  this.getPosition().lat();

            var long=this.getPosition().lat();
            var lat=this.getPosition().long();

            var locApi="https://maps.googleapis.com/maps/api/geocode/json?latlng="+long+","+lat+"&sensor=true";
            //x.innerHTML=locApi+"<br>"+loc.loc +"<br>"+loc.city +"<br>"+loc.region +"<br>";
            var cadena="";
            $.get({
                url: locApi,
                success:function(data)
                {
                    //console.log(typeof data);
                    //console.log(data.results.length);
                    if (data.results.length > 0) 
                    {
                        cadena=data.results[0].address_components[0].long_name+", ";

                        cadena+=data.results[0].address_components[1].long_name+", ";

                        //cadena+=data.results[0].address_components[4].long_name;
                        x.innerHTML=cadena;
                        document.getElementById("txtDir").value=cadena;
                    }
                    else
                    {
                        x.innerHTML="La ubicacion no se reconoce, por favor intente de nuevo";
                    }

                }
            });
        });
}
//callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
function toggleBounce() 
    {
        if (marker.getAnimation() !== null) 
        {
        marker.setAnimation(null);
        } else 
        {
        marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
    </script>
    </script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoW4LyeLOiPgOmChMyAacirIgO7zqriGw&callback=initMap&libraries=geometry"
  type="text/javascript" ></script>
