<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Lista de Menu
            <a type="button" href="#" class="btn btn-secondary">
                <i class="icon-plus"></i>&nbsp;Nuevo
            </a>
        </div>
        <div class="card-body">
            <div class="form-group row">
                @include('modules.cliente.frmSearch')
            </div>
             @include('template.alert') 
             @include('template.error') 
         <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Empresa</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Email</th>
                            <th>Estado</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($clientes as $cliente) --}}
                        <tr>
    
                            <td>
                                {{-- {{ $cliente->nombres }}                         --}}
                            </td>
                            <td>
                                {{-- {{ $cliente->apellidos }}                         --}}
                            </td>
                            <td>
                                {{-- {{ $cliente->empresa }}                         --}}
                            </td>
                            <td>
                                {{-- {{ $cliente->telefono }}                         --}}
                            </td>
                            <td>
                                {{-- {{ $cliente->direccion }}                         --}}
                            </td>
                            <td>
                                {{-- {{ $cliente->email }}                         --}}
                            </td>
                            {{-- @if ($cliente->estado) --}}
                                <td>
                                    {{-- <span class="badge badge-success">Activado</span> --}}
    
                                </td>
                            {{-- @else --}}
                                <td>
                                    {{-- <span class="badge badge-danger">Desactivado</span> --}}
                                </td>
                            {{-- @endif --}}
    
    
                            <td>
                                {{-- <a type="button" class="btn btn-success btn-sm" href="{{ route('cliente.edit', ['id'=>$cliente->id]) }}"> --}}
                                    {{-- <i class="icon-pencil"></i> --}}
                                {{-- </a> &nbsp; --}}
                                {{-- @include('modules.cliente.frmUpdate') --}}
                                {{-- @include('modules.cliente.frmDestroy') --}}
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
                <div class="">
                    {{-- {{ $clientes->links() }} --}}
                </div>
        </div>
    </div>
</div>
