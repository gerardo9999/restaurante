<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Opcion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listas as $lista)
        <tr>
            <td>
                {{ $lista->fecha }}    
            </td>
            <td>
                <button wire:click='buscarProducto({{ $lista->id }})' class="btn btn-success btn-sm">
                    <i class="icon-pencil"></i>
                </button>
                <button class="btn btn-info btn-sm">
                    <i class="icon-eye"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div>
    {{-- @php
        $datos  = json_decode($productos)
    @endphp --}}
    {{-- {{ $clientes->links() }} --}}

</div>
{{ $productos }}
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Opcion</th>
        </tr>
    </thead>
    <tbody>        
        {{-- @foreach ($datos as $producto)
        <tr>
            <td>
                {{ $producto->nombre }}    
            </td>
            <td>
                <button class="btn btn-success btn-sm">
                    <i class="icon-pencil"></i>
                </button>
                <button class="btn btn-info btn-sm">
                    <i class="icon-eye"></i>
                </button>
            </td>
        </tr>
        @endforeach --}}
    </tbody>
</table>
<div>
    {{-- {{ $clientes->links() }} --}}
</div>