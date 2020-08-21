@extends('principal.index')
@section('contenido')
<ol class="breadcrumb">
  {{-- <li class="breadcrumb-item">Home</li>
  <li class="breadcrumb-item"><a href="#">Admin</a></li>
  <li class="breadcrumb-item active">Dashboard</li> --}}
</ol>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Mesas
            @include('modules.mesa.frmCreate')
        </div>
        <div class="card-body">
            <div class="form-group row">
                @include('modules.mesa.frmSearch')
            </div>
            @include('components.alert')
            @include('components.error')
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Capacidad</th>
                        <th>Ubicacion</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mesas as $mesa)
                    <tr>
                        <td>
                            {{ $mesa->capacidad }}                        
                        </td>
                        <td>
                            {{ $mesa->ubicacion }}                        
                        </td>
                        @if($mesa->ocupado)
                            <td>
                                <span class="badge badge-pill badge-success">libre</span>        
                            </td>
                        @else
                            <td>
                                <span class="badge badge-pill badge-danger">ocupada</span>        
                            </td>    
                        @endif


                        <td>
                            @include('modules.mesa.frmUpdate')
                            @include('modules.mesa.frmDestroy')
                            @include('modules.mesa.frmShow')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="">
            {{ $mesas->links() }}
        </div>
    </div>
</div>
@endsection