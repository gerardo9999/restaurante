<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Lista de Menu
            <a type="button" href="{{ url('/menu/create') }}" class="btn btn-secondary">
                <i class="icon-plus"></i>&nbsp;Nuevo
            </a>
        </div>
        <div class="card-body">
            <div class="form-group row">
                @include('modules.lista.frmSearch')
            </div>
             @include('template.alert') 
             @include('template.error') 
             @include('modules.lista.frmTable')

             
        </div>
    </div>
</div>