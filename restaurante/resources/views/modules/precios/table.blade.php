@extends('principal.index')
@section('contenido')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i> Precios
        <a type="button" href="{{ route('precio.create') }}" class="btn btn-secondary">
            <i class="icon-plus"></i>&nbsp;Nuevo
        </a>
    </div>
    <div class="card-body">
        <div class="form-group row">
           @include('modules.precio.frmSearch')
        </div>
         @include('template.alert') 
         @include('template.error') 
     <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Precio</th>
                        <th>Fecha</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($precios as $precio)
                    <tr>

                        <td>
                            {{ $precio->precio }}                        
                        </td>
                        <td>
                            {{ $precio->fecha }}                        
                        </td>
                        <td>
                            <a type="button" class="btn btn-success btn-sm" href="{{ route('precio.edit', ['id'=>$precio->id]) }}">
                                <i class="icon-pencil"></i>
                            </a> &nbsp;
                            {{-- @include('modules.precio.frmUpdate') --}}
                            @include('modules.precio.frmDestroy')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="">
                {{ $precios->links() }}
            </div>
    </div>
</div>
@endsection