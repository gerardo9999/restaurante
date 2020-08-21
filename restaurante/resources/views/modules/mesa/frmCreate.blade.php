<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#nueva-categoria">
    <i class="icon-plus"></i>&nbsp;Nueva
</button>
<div class="modal fade" id="nueva-categoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Mesa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categoria.store') }}" method="post"  class="form-horizontal">
                    @csrf
                    
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="nombre" class="label-items">Nombre</label>
                            <input type="text" name="nombre" class="form-control form-control-sm" placeholder="Escribe el nombre" >
                            @error('nombre') 
                                <small class="error-validate">{{ $message }}</small>
                            @enderror
                            
                        </div>
                        <div class="form-group col-4">
                            <label for="">Paterno</label>
                            <input type="text" name="paterno" class="form-control form-control-sm  " placeholder="escribe el apellido paterno" >
                            @error('paterno') 
                                <small class="error-validate">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label for="" class="label-items">Materno</label>
                            <input type="text" name="materno" class="form-control form-control-sm  " placeholder="escribe el apellido materno" >
                            @error('materno') 
                                <small class="error-validate">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
            </div>
        </form>
        </div>
    </div>
  </div>