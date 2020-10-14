<div>
        @auth
            <div class="title-box-d">
                <h3 class="title-d">Realice su Reservacion {{ $nombre }}</h3>
            </div>
            <div class="box-collapse-wrap form">
                @if ($reservacion)
                    <div class="row">

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                            <label for="Type">Comensales</label>
                            <input wire:model='comensales' type="text" 
                            class=" form-control form-control-sm form-control" placeholder="Digite la cantidad de personas">
                            @error('comensales')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            </div>

                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                            <label for="Type">Fecha</label>
                            <input wire:model='fecha' type="date" class="form-control form-control-sm form-control" placeholder="Escriba su Fecha">
                            @error('fecha')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Type">Hora </label>
                                <input wire:model='hora' type="time" class="form-control form-control-sm form-control" placeholder="Escriba su Hora">
                                @error('hora')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Type">Observacion </label>
                                <textarea wire:model='observacion' class="form-control form-control-sm form-control" id="" cols="30" rows="5">

                                </textarea>
                                @error('observacion')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <button wire:click='guardarDatosReserva()' type="submit" class="btn btn-b">Reservar</button>
                        </div>
                    </div>
                @endif
                @if ($exito)
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 mb-2 text-center p-4">
                            <h2>{{ $nombre }}  {{ $apellidos }}</h2>     
                            <h4 class="title">Gracias por realizar tu reservacion</h4>
                            

                            <p>Estamos ansiosos por recibirte</p>
                            </div>

                            <div class="col-md-12 mb-2">
                            
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endauth
        @guest
            <div class="title-box-d">
                <h3 class="title-d">Realice su Reservacion</h3>
            </div>
            <div class="box-collapse-wrap form">
                @if ($cliente)
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                            <label for="Type">Nombre</label>
                            <input wire:model='nombre' type="text" 
                            class=" form-control form-control-sm form-control" placeholder="Escriba su nombre">
                            @error('nombre')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            </div>

                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                            <label for="Type">Apellidos</label>
                            <input wire:model='apellidos' type="text" class="form-control form-control-sm form-control" placeholder="Escriba sus apellidos">
                            @error('apellidos')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Type">Empresa</label>
                                <input wire:model='empresa' type="text" class="form-control form-control-sm form-control" placeholder="Escriba su empresa">
                                @error('empresa')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                            <label for="Type">Telefono</label>
                            <input wire:model='telefono' type="text" class="form-control form-control-sm form-control" placeholder="Digite su numero de telefono">
                            @error('telefono')
                                <span class="error">{{ $message }}</span>
                            @enderror 
                            </div>
                        </div>
                        
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Type">Direccion</label>
                                <input wire:model='direccion' type="text" class="form-control form-control-sm form-control" placeholder="Escibe tu direccion">
                                @error('direccion')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-12">
                            <button wire:click='guardarDatosCliente()' type="submit" class="btn btn-b">Siguiente</button>
                        </div>
                    </div>
                @endif
                @if ($usuario)
                    <div class="row">

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                            <label for="Type">Usuario</label>
                            <input wire:model='login' type="text" 
                            class=" form-control form-control-sm form-control" placeholder="Escriba su nombre de usuario">
                            @error('login')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            </div>

                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                            <label for="Type">Correo</label>
                            <input wire:model='email' type="email" class="form-control form-control-sm form-control" placeholder="Escriba su email">
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Type">Contraseña</label>
                                <input wire:model='password' type="password" class="form-control form-control-sm form-control" placeholder="Escriba su password">
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <button wire:click='guardarDatosUsuario()' type="submit" class="btn btn-b">Siguiente</button>
                            <button wire:click='borrarDatosUsuario()' type="submit" class="btn btn-b">Anterior</button>
                        </div>
                    </div>
                @endif
                @if ($reserva)
                    <div class="row">

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                            <label for="Type">Comensales</label>
                            <input wire:model='comensales' type="text" 
                            class=" form-control form-control-sm form-control" placeholder="digite la cantidad de comensales">
                            @error('comensales')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            </div>

                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                            <label for="Type">Fecha</label>
                            <input wire:model='fecha' type="date" class="form-control form-control-sm form-control" placeholder="Escriba su email">
                            @error('fecha')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Type">Hora </label>
                                <input wire:model='hora' type="time" class="form-control form-control-sm form-control" placeholder="Escriba su password">
                                @error('hora')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Type">Observacion </label>
                                <textarea wire:model='observacion' class="form-control form-control-sm form-control" id="" cols="30" rows="5">

                                </textarea>
                                @error('observacion')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <button wire:click='guardarDatosReserva()' type="submit" class="btn btn-b">Reservar</button>
                            <button wire:click='borrarDatosReserva()' type="submit" class="btn btn-b">Anterior</button>
                        </div>
                    </div>
                @endif
                @if ($exito)
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 mb-2 text-center p-4">
                        <h2>{{ $nombre }}  {{ $apellidos }}</h2>     
                        <h4 class="title">Gracias por realizar tu reservacion</h4>
                        

                        <p>Estamos ansiosos por recibirte</p>
                        </div>

                        <div class="col-md-12 mb-2">
                        
                        </div>
                    </div>
                </div>
                @endif
            </div>
        @endguest
</div>
