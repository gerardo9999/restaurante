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
<div class="">
    {{ $categorias->links() }}
</div>