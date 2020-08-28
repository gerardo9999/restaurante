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
                <a href="" class="btn btn-success btn-sm">
                    <i class="icon-pencil"></i>
                </a>
                <a href="" class="btn btn-info btn-sm">
                    <i class="icon-eye"></i>
                </a>
                {{-- <a type="button" class="btn btn-success btn-sm" href="{{ route('cliente.edit', ['id'=>$cliente->id]) }}"> --}}
                    {{-- <i class="icon-pencil"></i> --}}
                {{-- </a> &nbsp; --}}
                {{-- @include('modules.cliente.frmUpdate') --}}
                {{-- @include('modules.cliente.frmDestroy') --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="">
    {{-- {{ $clientes->links() }} --}}
</div>