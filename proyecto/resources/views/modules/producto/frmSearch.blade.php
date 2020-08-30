<div class="col-md-6">
    <form>
        <div class="input-group">
            {{-- <select class="form-control col-md-3" id="opcion" name="opcion"> --}}
            {{-- <option >Nombre</option> --}}
            {{-- </select> --}}
         <input  type="text" class="form-control"  placeholder="Buscar..." wire:model='searchText'>
         <button type="button" disabled class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Buscar</button>
        </div>
    </form>
</div>