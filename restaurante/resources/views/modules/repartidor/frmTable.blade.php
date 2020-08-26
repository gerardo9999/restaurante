@extends('principal.index')
@section('contenido')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i> Repartidores
        <a type="button" href="{{ route('repartidor.create') }}" class="btn btn-secondary">
            <i class="icon-plus"></i>&nbsp;Nuevo
        </a>
    </div>
    <div class="card-body">
        <div class="form-group row">
           @include('modules.repartidor.frmSearch')
        </div>
         @include('template.alert') 
         @include('template.error') 
     <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>CedulaID</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($repartidores as $repartidor)
                    <tr>

                        <td>
                            {{ $repartidor->nombre }}                        
                        </td>
                        <td>
                            {{ $repartidor->apellidos }}                        
                        </td>
                        <td>
                            {{ $repartidor->cedulaID }}                        
                        </td>
                        <td>
                            {{ $repartidor->telefono }}                        
                        </td>
                        <td>
                            {{ $repartidor->direccion }}                        
                        </td>
                        <td>
                            <a type="button" class="btn btn-success btn-sm" href="{{ route('repartidor.edit', ['id'=>$repartidor->id]) }}">
                                <i class="icon-pencil"></i>
                            </a> &nbsp;
                            {{-- @include('modules.repartidor.frmUpdate') --}}
                            @include('modules.repartidor.frmDestroy')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="">
                {{ $repartidores->links() }}
            </div>
    </div>
</div>
@endsection