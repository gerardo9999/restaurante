<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#actualizar-mesa{{ $mesa->id }}">
    <i class="icon-pencil"></i>
</button> &nbsp;

<div class="modal fade" id="actualizar-mesa{{ $mesa->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-success modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header alert-info">
                <h4 class="modal-title">Actualizar Mesa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('mesa.update', ['id'=>$mesa->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="capacidad" class="label-items">Capacidad</label>
                            <input type="text" value="{{ $mesa->capacidad }}" id="capacidad" name="capacidad" class="form-control form-control-sm" placeholder="Escribe la capacidad" >
                            @error('capacidad') 
                                <small class="error-validate">{{ $message }}</small>
                            @enderror
                            
                        </div>
                        <div class="form-group col-4">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" value="{{ $mesa->descripcion }}" id="descripcion" name="descripcion" class="form-control form-control-sm  " placeholder="escribe la descripcion" >
                            @error('descripcion') 
                                <small class="error-validate">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-4">
                            <label for="ubicacion" class="label-items">Ubicacion</label>
                            <input type="text" value="{{ $mesa->ubicacion }}" id="ubicacion" name="ubicacion" class="form-control form-control-sm  " placeholder="escribe la ubicacion" >
                            @error('ubicacion') 
                                <small class="error-validate">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-sm btn-success">Guardar</button>
            </div>
        </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>