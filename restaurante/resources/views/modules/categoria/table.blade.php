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
            <i class="fa fa-align-justify"></i> Categorías
            @include('modules.categoria.frmCreate')
        </div>
        <div class="card-body">
            <div class="form-group row">
                @include('modules.categoria.frmSearch')
            </div>
            @include('components.alert')
            @include('components.error')
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Opciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                    <tr>

                        <td>
                            {{ $categoria->nombre }}                        
                        </td>
                        <td>
                            @include('modules.categoria.frmUpdate')
                            @include('modules.categoria.frmDestroy')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="">
            {{ $categorias->links() }}
        </div>
    </div>
</div>
@endsection