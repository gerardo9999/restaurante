<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ejemplo" class="category-b">
    <i class="fa fa-eye"></i>
  </button>
  
  <div id="ejemplo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-default-info">
                <h5 class="modal-title" id="my-modal-title"></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{-- <img src="{{asset($producto->foto)}}" alt="" class="img-b img-fluid"> --}}

            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Provincia</label>
                    <input type="text" class="form-control" name="" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info btn-sm">Guardar</button>
            </div>
        </div>
    </div>
</div>