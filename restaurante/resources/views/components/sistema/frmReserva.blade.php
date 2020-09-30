@php  $usuario_id =  Auth::user()->id @endphp
<div class="col-12">
    <main class="main">
        <div class="container-fluid pt-4">

            @if ($formulario)
                <div class="card">

                    @if ($actualizar)
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>Actualizar Reserva 
                        </div>
                    @else
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>Guardar Reserva 
                        </div>
                    @endif


                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="text-input">Comensales</label>
                            <div class="col-md-9">
                                <input type="text" wire:model="comensales" class="form-control" placeholder="Cantidad de Comensales">                                        
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="text-input">Telefono</label>
                            <div class="col-md-9">
                                <input type="text" wire:model="telefono" class="form-control" placeholder="Telefono">                                        
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="text-input">Fecha</label>
                            <div class="col-md-9">
                                <input type="date" wire:model="fecha" class="form-control" placeholder="Fecha de Reserva">                                        
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="text-input">Hora</label>
                            <div class="col-md-9">
                                <input type="time" wire:model="hora" class="form-control" placeholder="Hora de Reserva">                                        
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="email-input">Observacion</label>
                            <div class="col-md-9">
                                <input type="text" wire:model="observacion" class="form-control" placeholder="Ingrese Observacion">
                            </div>
                        </div>

                    
                    </div>


                    <div class="card-footer">
                        @if ($actualizar)
                            <button wire:click='actualizarReserva({{ $usuario_id }})' class="btn btn-info">Modificar</button>                        
                        @else
                            <button wire:click='guardarReserva({{ $usuario_id }})' class="btn btn-info">Guardar</button>                        
                        @endif



                        <button wire:click='cancelarReserva()' class="btn btn-secondary">Cancelar</button>
                    </div>
                </div>
            
            @else
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Reserva 
                        <button type="button" wire:click='mostrarReservaFormulario()' class="btn btn-secondary">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                
                                    <input type="text" id="texto" name="texto" wire:model='searchText' class="form-control" placeholder="Texto a buscar">
                                    <button disabled  type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>

                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Comensales</th>
                                    <th>Telefono</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Observacion</th>
                                    <th>Opciones</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($reservas as $reserva)
                                    @if ($reserva->idCliente == $usuario_id )
                                    <tr>
                                        <td >{{ $reserva->comensales}}</td>
                                        <td >{{ $reserva->telefono}}</td>
                                        <td >{{ $reserva->fecha}}</td>
                                        <td >{{ $reserva->hora}}</td>
                                        <td >{{ $reserva->observacion}}</td>
                                        <td>
                                            <button type="button" wire:click='mostrarFormularioActualizar({{ $reserva->id }})' class="btn btn-success btn-sm">
                                                <i class="icon-pencil"></i>
                                            </button> &nbsp;

                                            <button type="button" data-toggle="modal" data-target="#modal-destroy{{ $reserva->id }}"  class="btn btn-danger btn-sm" >
                                                <i class="icon-trash"></i>
                                            </button>
                                            <div id="modal-destroy{{ $reserva->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                                                <div class="modal-dialog modal-danger" role="document">
                                                    <div class="modal-content  modal-danger">
                                                        <div class="modal-header modal-danger">
                                                            <h5 class="modal-title" id="my-modal-title">Eliminar Reserva</h5>
                                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                            <div class="modal-body">
                                                                <p>Seguro que desea eliminar la reserva?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" wire:click='eliminarReserva({{ $reserva->id }})' data-dismiss="modal" aria-label="Close" class="btn btn-danger">Borrar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr> 
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        {{ $reservas->render() }}
                    </div>
                </div>
            @endif    
        </div>
       
    </main>
</div>