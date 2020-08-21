<div class="col-md-6">
    <form action="{{ route('categoria.index') }}" method="GET" autocomplete="off" role="search">
        <div class="input-group">
            {{-- <select class="form-control col-md-3" id="opcion" name="opcion">
            <option >Nombre</option>
            </select> --}}
         <input  type="text" class="form-control form-control-sm" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
         <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Buscar</button>
        </div>
    </form>
</div>