@extends('principal.index')
@section('contenido')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i> Tipos de Usuarios
    </div>
    <div class="card-body">
        <div class="form-group row">
        </div>

     <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tipos as $tipo)
                    <tr>

                        <td>
                            {{ $tipo->nombre }}                        
                        </td>
                        
                        <td>
                            <a type="button" class="btn btn-success btn-sm" href="#">
                                <i class="icon-pencil"></i>
                            </a> &nbsp;

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="">

            </div>
    </div>
</div>
@endsection