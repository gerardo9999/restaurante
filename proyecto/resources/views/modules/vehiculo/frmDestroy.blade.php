<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar-vehiculo{{ $vehiculo->id }}">
    <i class="icon-trash"></i>
</button>
<div class="modal fade" id="eliminar-vehiculo{{ $vehiculo->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Eliminar Vehiculo </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('vehiculo.destroy', ['id'=>$vehiculo->id]) }}" method="post">
                @csrf
            <div class="modal-body">
                <p class="delete-item">Estas seguro de eliminar el registro?  </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
            </div>
            </form>
        </div>
    </div>
</div>
  