@extends('principal.index')
@section('contenido')

<div class="container-fluid">
    <div class="card card-accent-info">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Actualizar Reserva
        </div>
        <form action="{{ route('reserva.update',['id'=>$reserva[0]->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="comensales" class="label-items">Comensales </label>
                    <input type="text" name="comensales" class="form-control form-control-sm" value="{{ $reserva[0]->comensales }}" placeholder="escribe los comensales" >
                    @error('comensales') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="telefono" class="label-items">Telefono</label>
                    <input type="text"  name="telefono" class="form-control form-control-sm " value="{{ $reserva[0]->telefono }}" placeholder="escribe los telefono" >
                    @error('telefono') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="fecha" class="label-items">Fecha</label>
                    <input type="date" name="fecha" class="form-control form-control-sm" value="{{ $reserva[0]->fecha }}" placeholder="escribe el fecha" >
                    @error('fecha') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>

                <div class="form-group col-6">
                    <label for="hora" class="label-items">Hora</label>
                    <input type="time" name="hora" class="form-control form-control-sm" value="{{ $reserva[0]->hora }}" placeholder="escribe el hora" >
                    @error('hora') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>
               
            
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="observacion" class="label-items">Observacion</label>
                    <input type="text" name="observacion" class="form-control form-control-sm" value="{{ $reserva[0]->observacion }}" placeholder="escribe el observacion" >
                    @error('observacion') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>
               
                <div class="form-group col-md-6">
                    <label class="form-control-label label-items" for="text-input">Cliente</label>
                            <select class="form-control select2" style="width: 100%; " name="idCliente">
                                <option value="{{ $reserva[0]->idCliente }}">{{ $reserva[0]->nombres }} {{ $reserva[0]->apellidos }}</option>
                                @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombres }} {{ $reserva[0]->apellidos }}</option>
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
