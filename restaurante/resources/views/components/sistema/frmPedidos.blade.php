<main class="main">
    {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Admin</a></li>
    </ol> --}}
    @php  $usuario_id =  Auth::user()->id @endphp

    <div class="container-fluid pt-4">
        @if ($formulario)
        <div class="card">

                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Guardar Pedido 
                </div>


            <div class="card-body">
                
                <div class="form-group row border p-2 d-flex justify-content-between align-items-center">
                    <label for="" class="p-1 col-md-2 label-items" ><strong> Fecha Entrega</strong></label>
                    <div class="col-md-6">
                        <input type="date" wire:model="fechaEntrega" class="form-control" placeholder="Fecha de Reserva">                                        
                    </div>

                    <div class="col-md-4">
                        <label for="" class="p-1  label-items" ><strong> Agregar Producto</strong></label>
                        <button  type="button" data-toggle="modal" data-target="#modal-producto" class="btn btn-success btn-sm"><i class="icon-plus"></i> Producto</button>                                        
                    </div>

                    <div wire:ignore.self id="modal-producto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-success" role="document">
                            <div class="modal-content  modal-success">
                                <div class="modal-header modal-success">
                                    <h5 class="modal-title" id="my-modal-title">Seleccionar Producto</h5>
                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <div class="modal-body">
                                        <div class="form-group row border">
                                            

                                            <div class="table-responsive col-md-12 p-4"  >
                                                <table class="table table-bordered table-striped table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Producto</th>
                                                            <th>Precio</th>
                                                            <th>Foto</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($menu as $producto)
                                                            <tr>
                                                                <td >{{ $producto->nombre}}</td>
                                                                <td >{{ $producto->precio}}</td>
                                                                <td >
                                                                    <img  src="{{ asset($producto->foto) }}" width="50" height="48" class="rounded-circle mr-2" alt="Avatar">
                                                                </td>
                                                                <td>
                                                                    <button type="button" wire:click.prevent='agregarProductoArray({{$producto}})' class="btn btn-success btn-sm">
                                                                        <i class="icon-check"></i>
                                                                    </button> &nbsp;
                                                                </td>
                                                            </tr> 
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $menu->render() }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cerrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group row border" >
                    <div class="table-responsive col-md-12 p-4"  >
                        <table class="table table-bordered table-striped table-sm">
                            <thead >

                                <tr>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>SubTotal</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($arrayProducto as $item)
                                        
                                    <tr>
                                        <td>{{ $item["nombre"] }}</td>
                                        <td>{{ $item["precio"] }}</td>
                                        <td><input wire:model='cantidad' type="number" class="form-control"></td>
                                        <td> {{ $subTotal }} </td>
                                        <td>     
                                            <button  class=" btn btn-danger btn-sm">
                                                <i class="icon-close" ></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach

                                {{-- @endfor  --}}
                                
                                    <tr style="background-color: #CEECF5;">
                                        <td colspan="4" align="right"><strong>Total :</strong></td>
                                        <td>
                                                {{ $total }}
                                        </td>
                                    </tr>             
                            </tbody>
                            <tbody>
                                <td colspan="5" align="center"><strong>No ha asignado ningun producto</strong></td>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


            <div class="card-footer">
                    <button wire:click='guardarReserva({{ $usuario_id }})' class="btn btn-info">Guardar</button>                        
                    <button wire:click='cancelarReserva()' class="btn btn-secondary">Cancelar</button>
            </div>
        </div>
        @else
            <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Pedidos <strong></strong>   
                        <button type="button" wire:click='mostrarFormularioGuardar()' class="btn btn-secondary">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                        {{-- <img width="30px" height="30px" src="imagenes/icon_mesa_black.png" alt=""> --}}
                    </div>
                    
                    <div class="card-body">
                        <div class="form-group row border">
                        
                            <div class="table-responsive col-md-12 p-4"  >
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            
                                            <th>Fecha</td>
                                            <th>Fecha Entrega</td>
                                            <th>Hora Entrega</td>
                                            <th>Glosa</td>
                                            <th>Montototal</td>
                                            <th>Estado</td>
                                            <th>Opciones</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{ $usuario_id }}
                                        @foreach ($pedidos as $pedido)
                                            @if ($pedido->idCliente == $usuario_id)
                                                <tr>
                                                    <td>{{  $pedido->fecha}}<</td>
                                                    <td>{{  $pedido->fechaentrega}}<</td>
                                                    <td>{{  $pedido->horaentrega}}<</td>
                                                    <td>{{  $pedido->glosa}}<</td>
                                                    <td>{{  $pedido->montototal}}<</td>
                                                    <td>{{  $pedido->estado}}<</td>
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
                                {{ $pedidos->render() }}
                            </div>
                        </div>
                    </div>
            </div>
        @endif

    </div>
</main>