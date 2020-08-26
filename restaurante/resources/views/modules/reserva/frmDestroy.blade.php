<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar-reserva{{ $reserva->id }}">
    <i class="icon-trash"></i>
</button>
<div class="modal fade" id="eliminar-reserva{{ $reserva->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Eliminar reserva </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('reserva.destroy', ['id'=>$reserva->id]) }}" method="post">
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
  