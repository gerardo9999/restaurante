@extends('principal.index')
@section('contenido')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i> Reservas
        <a type="button" href="{{ route('reserva.create') }}" class="btn btn-secondary">
            <i class="icon-plus"></i>&nbsp;Nuevo
        </a>
    </div>
    <div class="card-body">
        <div class="form-group row">
           @include('modules.reserva.frmSearch')
        </div>
         @include('template.alert') 
         @include('template.error') 
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Comensales</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Observacion</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservas as $reserva)
                    <tr>

                        <td>
                            {{ $reserva->comensales }}                        
                        </td>
                        <td>
                            {{ $reserva->telefono }}                        
                        </td>
                        <td>
                            {{ $reserva->fecha }}                        
                        </td>
                        <td>
                            {{ $reserva->hora }}                        
                        </td>
                        <td>
                            {{ $reserva->observacion }}                        
                        </td>
                        <td>
                            <a type="button" class="btn btn-success btn-sm" href="{{ route('reserva.edit', ['id'=>$reserva->id]) }}">
                                <i class="icon-pencil"></i>
                            </a> &nbsp;
                            {{-- @include('modules.reserva.frmUpdate') --}}
                            @include('modules.reserva.frmDestroy')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="">
                {{ $reservas->links() }}
            </div>
    </div>
</div>
@endsection