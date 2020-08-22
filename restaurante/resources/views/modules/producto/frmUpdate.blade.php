@extends('principal.index')
@section('contenido')
<div class="container-fluid">
    <div class="card card-accent-info">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Actualizar Producto
        </div>
        <form action="{{ route('producto.update',['id'=>$producto[0]->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="nombre" class="label-items">Nombre</label>
                    <input type="text" value="{{ $producto[0]->nombre }}" name="nombre" class="form-control form-control-sm" placeholder="escribe el nombre" >
                    @error('nombre') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>
                <div class="form-group col-6">
                    <label for="" class="label-items">Precio</label>
                    <input type="number" step=0.01 value="{{ $producto[0]->precio }}" name="precio" class="form-control form-control-sm  " placeholder="digite el precio" >
                    @error('precio') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row">

                <div class="form-group col-md-6">
                    <label class="form-control-label label-items" for="text-input">Categoria</label>
                    <div class="">
                        <select class="form-control select2" style="width: 100%;" name="idCategoria">
                            <option value="{{ $producto[0]->idCategoria }}">{{ $producto[0]->categoria }}</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach 
                        </select>
                    </div>
                </div>

                <div class="form-group col-6">
                    <label class="form-label w-100 label-items">Seleccione una foto</label>
                    <input type="file" name="foto">
                    <small class="form-text text-muted foto-message">Solo foto jpg</small>
                    @error('foto')
                        <small><strong><p style="color: red">{{ $message }}</p></strong></small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-12 form-control-label label-items" for="text-input">Descripcion</label>
                <div class="col-md-12">
                    <textarea name="descripcion" id="" class="form-control" cols="30" rows="5">{{ $producto[0]->descripcion }}</textarea>
                </div>
            </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-info" >Guardar</button>
            <button type="reset" class="btn btn-sm btn-danger" >Cancelar</button>
        </div>
        </form>
    </div>
</div>
@endsection
