<!DOCTYPE html>
<html lang="en">
    @include('welcome.template.head')
<body>
    @yield('contenido')
    
    <br>
    <div class="copyrights" style="backgrounp-color:#000;">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-6 text-center">
                        <p class="mb-0"> <a href="{{ url('/') }}">Regresar al Inicio</a></p>
                        <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :)-->
                    </div>
                    <div class="col-md-6 text-center">
                        <p class="mb-0"> <a href="{{ url('/') }}">Ya tienes una cuenta?</a></p>
                        <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :)-->
                    </div>
                </div>
            </div>
        </div>
</body>
</html>