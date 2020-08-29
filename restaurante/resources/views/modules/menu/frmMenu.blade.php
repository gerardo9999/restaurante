<div class="card">
    <div class="card-header">
        <h5>Menu  - fecha {{  $fecha  }} </h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaMenu as $plato)
                <tr>
                    <td>
                        {{ $plato->nombre }}                        
                    </td>
                    <td>
                        {{ $plato->precio }}                        
                    </td>
                        @if ($plato->estado)
                        <td>
                            <span class="badge badge-success">Activo</span>
                        </td>
                        @else
                        <td>
                            <span class="badge badge-danger">Activo</span>
                        </td>
                        @endif                          
                    <td>
                        @include('modules.menu.frmDelete')                        
                        @include('modules.menu.frmPrecio')
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div>
    <div class="card-footer">
        @if(count($listaMenu))
            <button wire:click='finalizar()' class="btn btn-sm btn-info"><i class="icon-check"></i>&nbsp; Finalizar</button>  
        @endif
    </div>
</div>