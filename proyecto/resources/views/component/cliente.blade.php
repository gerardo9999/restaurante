<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Clientes
            <a type="button" href="{{ route('cliente.create') }}" class="btn btn-secondary">
                <i class="icon-plus"></i>&nbsp;Nuevo
            </a>
        </div>
        <div class="card-body">
            <div class="form-group row">
                @include('modules.cliente.frmSearch')
            </div>
                @include('template.alert') 
                @include('template.error') 
                @include('modules.cliente.frmTable')
        </div>
    </div>
</div>
