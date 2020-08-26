@if($mesa->ocupado)
    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#estado-mesa{{ $mesa->id }}">
        <i class="icon-target"></i>
    </button> &nbsp;
    <div class="modal fade" id="estado-mesa{{ $mesa->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-warning" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Ocupar Mesa </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('mesa.ocupar', ['id'=>$mesa->id]) }}" method="post">
                    @csrf
                <div class="modal-body">
                    <p class="delete-item" >La mesa no estara disponible</p>
                </div>
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-sm btn-warning">Ocupar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@else
    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#estado-mesa{{ $mesa->id }}">
        <i class="icon-target"></i>
    </button> &nbsp;
    <div class="modal fade" id="estado-mesa{{ $mesa->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-secondary" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Desocupar Mesa </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('mesa.desocupar', ['id'=>$mesa->id]) }}" method="post">
                    @csrf
                <div class="modal-body">
                    <p class="delete-item" >La mesa estara disponible</p>
                </div>
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-sm btn-secondary">Desocupar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endif
