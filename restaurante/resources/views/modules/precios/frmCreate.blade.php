@extends('principal.index')
@section('contenido')

<div class="container-fluid">
    <div class="card card-accent-info">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Crear Nuevo Precio
        </div>
        <form action="{{ route('precio.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="precio" class="label-items">Precio</label>
                    <input type="text" name="precio" class="form-control form-control-sm" value="{{ old('precio') }}" placeholder="escribe el precio" >
                    @error('precio) 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>
                <div class="form-group col-6">
                    <label for="fecha" class="label-items">fecha</label>
                    <input type="date"  name="fecha" class="form-control form-control-sm " value="{{ old('fecha') }}" placeholder="escribe la fecha" >
                    @error('fecha') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                </div>
            </div>
               
                <div class="form-group col-md-6">
                    <label class="form-control-label label-items" for="text-input">producto</label>
                            <select class="form-control select2" style="width: 100%; " name="idProducto">
                                @foreach($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                @endforeach 
                            </select>
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
