@extends('principal.index')
@section('contenido')

<div class="container-fluid">
    <div class="card card-accent-info">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Crear Nuevo vehiculo
        </div>
        <form action="{{ route('vehiculo.update',['id'=>$vehiculo[0]->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="tipoVehiculo" class="label-items">Tipo Vehiculo</label>
                    <input type="text" name="tipoVehiculo" class="form-control form-control-sm" value="{{ old('tipoVehiculo') }}" placeholder="escribe los tipoVehiculo" >
                    @error('tipoVehiculo') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>
                <div class="form-group col-6">
                    <label for="caracteristicas" class="label-items">Caracteristicas</label>
                    <input type="text"  name="caracteristicas" class="form-control form-control-sm " value="{{ old('caracteristicas') }}" placeholder="escribe los caracteristicas" >
                    @error('caracteristicas') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="form-group col-6">
                    <label for="placa" class="label-items">Placa</label>
                    <input type="text" name="placa" class="form-control form-control-sm" value="{{ old('login') }}" placeholder="escribe el Placa" >
                    @error('placa') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>
               
                <div class="form-group col-md-6">
                    <label class="form-control-label label-items" for="text-input">Repartidor</label>
                            <select class="form-control select2" style="width: 100%; " name="idRepartidor">
                                @foreach($repartidores as $repartidor)
                                    <option value="{{ $repartidor->id }}">{{ $repartidor->nombre }}</option>
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
