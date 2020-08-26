<div class="card">
    <div class="card-header">
        <h5>Menu  - fecha {{  $fecha  }} </h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaMenu as $plato)
                <tr>
                    <td>
                        {{ $plato->nombre }}                        
                    </td>
                    <td>
                        {{ $plato->precio }}                        
                    </td>
                        @if ($plato->estado)
                        <td>
                            <span class="badge badge-success">Activo</span>
                        </td>
                        @else
                        <td>
                            <span class="badge badge-danger">Activo</span>
                        </td>
                        @endif                          
                    <td>
                        <button type="button" wire:click="eliminarProducto({{ $plato->id }})"  class="btn btn-danger btn-sm">
                            <i class="icon-trash"></i>
                        </button>
                       
                        
                        <button  data-toggle="modal" data-target="#update-plato{{ $plato->id }}" type="button" class="btn btn-sm btn-success">
                            &nbsp;$
                        </button> 

                        <div wire:ignore.self id="update-plato{{ $plato->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header alert-success">
                                        <h5 class="modal-title" id="my-modal-title">Actualizar Precio {{ $plato->id }}</h5>
                                        <button class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="">Precio {{ $plato->idProducto }}</label>
                                                <input type="text" class="form-control" wire:model="precio" >
                                                @error('precio')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" >Cancelar</button>
                                        <button class="btn btn-success btn-sm" data-dismiss="modal" aria-label="Close" wire:click.prevent="savePrecio({{ $plato->idProducto }})"><i class="fas fa-edit"></i>  Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div>
    <div class="card-footer">
        @if(count($listaMenu))
            <button wire:click='finalizar()' class="btn btn-sm btn-info"><i class="icon-check"></i>&nbsp; Finalizar</button>  
        @endif
    </div>
</div>