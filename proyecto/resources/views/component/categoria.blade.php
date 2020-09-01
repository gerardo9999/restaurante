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
            @include('modules.categoria.frmTable')
        </div>
    </div>
</div>
