@extends('principal.index')
@section('contenido')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i> Vehiculos
        <a type="button" href="{{ route('vehiculo.create') }}" class="btn btn-secondary">
            <i class="icon-plus"></i>&nbsp;Nuevo
        </a>
    </div>
    <div class="card-body">
        <div class="form-group row">
           @include('modules.vehiculo.frmSearch')
        </div>
         @include('template.alert') 
         @include('template.error') 
     <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Tipo Vehiculo</th>
                        <th>Caracteristicas</th>
                        <th>Placa</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehiculos as $vehiculo)
                    <tr>

                        <td>
                            {{ $vehiculo->tipoVehiculo }}                        
                        </td>
                        <td>
                            {{ $vehiculo->caracteristicas }}                        
                        </td>
                        <td>
                            {{ $vehiculo->placa }}                        
                        </td>
                        <td>
                            <a type="button" class="btn btn-success btn-sm" href="{{ route('vehiculo.edit', ['id'=>$vehiculo->id]) }}">
                                <i class="icon-pencil"></i>
                            </a> &nbsp;
                            {{-- @include('modules.vehiculo.frmUpdate') --}}
                            @include('modules.vehiculo.frmDestroy')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="">
                {{ $vehiculos->links() }}
            </div>
    </div>
</div>
@endsection