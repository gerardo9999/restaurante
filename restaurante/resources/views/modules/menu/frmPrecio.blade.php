<button   data-toggle="modal" data-target="#update-producto{{ $producto->id }}" type="button" class="btn btn-sm btn-success">
    <i class="fas fa-edit"></i>
</button> 
<div wire:ignore.self id="update-producto{{ $producto->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-success">
                <h5 class="modal-title" id="my-modal-title">Actualizar Imagen {{ $producto->id }}</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <form wire:submit.prevent="save">
                    <input type="file" wire:model="foto">
                
                    @error('foto') <span class="error">{{ $message }}</span> @enderror
                
                
                
            </div>
            <div class="modal-footer">
                <button  type="submit" data-dismiss="modal" aria-label="Close">Save Photo</button>
                </form>
            </div>
        </div>
    </div>
</div>
