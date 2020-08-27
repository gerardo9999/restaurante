<div>
    <div class="container-fluid">
        <div class="card card-accent-info">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> {{  }} 
            </div>
            <div class="card-body">
                 @include('template.alert')                
                @if($tabla)
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                    <div class="input-group-prepend">
                                        <input  type="text" class="form-control form-control-sm"  placeholder="Buscar..." wire:model="searchText">
                                   </div>
                            </div>
                            <div class="card-body">
                                @include('modules.menu.frmProducto')       
                            </div>
                            <div class="text-center">
                                {{ $productos->links() }}
                                {{-- {{ $foto }} --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                       @include('modules.menu.frmMenu')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
