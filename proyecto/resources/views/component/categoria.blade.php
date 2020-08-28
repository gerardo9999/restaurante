<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Categorías
            @include('modules.categoria.frmCreate')
        </div>
        <div class="card-body">
            <div class="form-group row">
                @include('modules.categoria.frmSearch')
            </div>
             @include('template.alert') 
             @include('template.error') 
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
        </div>
    </div>
</div>
