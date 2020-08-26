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