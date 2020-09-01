<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#show-mesa{{ $mesa->id }}">
    <i class="icon-eye"></i>
</button> &nbsp;

<div class="modal fade" id="show-mesa{{ $mesa->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-info modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header alert-info">
                <h4 class="modal-title">Descripcion de Mesa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mesa # {{ $mesa->id }}</h5>
                            <p class="card-text">{{ $mesa->descripcion }}</p>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
  </div>