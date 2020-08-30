<div>
    <div class="container-fluid">
        <div class="card card-accent-info">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> {{ $title }} 
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
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>foto</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productos as $producto)
                                        <tr>
                                            <td>
                                                {{ $producto->nombre }}                        
                                            </td>
                                            <td>
                                                <img class="img-fluid" width="100px"  src="{{ asset($producto->foto)  }}" alt="">                        
                                            </td>
                                            <td>
                                                <button type="button" wire:click="agregarProducto({{ $producto->id }})"  class="btn btn-success btn-sm">
                                                    <i class="icon-check"></i>
                                                </button>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>        
                            </div>
                            <div class="text-center">
                                {{ $productos->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                       @include('modules.menu.frmMenu')
                    </div>
                </div>
                @else
                    @include('modules.menu.frmFecha')
                @endif
            </div>
        </div>
    </div>    
</div>
