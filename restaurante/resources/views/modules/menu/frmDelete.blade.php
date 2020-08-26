<button  data-toggle="modal" data-target="#delete-plato{{ $plato->id }}" type="button" class="btn btn-sm btn-danger">
    <i class="icon-trash"></i>
</button> 

<div wire:ignore.self id="delete-plato{{ $plato->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-success">
                <h5 class="modal-title" id="my-modal-title">Eliminar Precio {{ $plato->id }}</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <p>Seguro que desea Eliminar del Menú? </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" >Cancelar</button>
                <button type="button" wire:click="eliminarProducto({{ $plato->id }})"  class="btn btn-danger btn-sm">
                    <i class="icon-trash"></i>
                </button>
                <button class="btn btn-success btn-sm" data-dismiss="modal" aria-label="Close" wire:click.prevent="savePrecio({{ $plato->idProducto }})"><i class="fas fa-edit"></i>  Actualizar</button>
            </div>
        </div>
    </div>
</div>

