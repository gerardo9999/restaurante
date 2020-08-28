<div>
    <div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> Productos
          <a type="button" href="{{ route('producto.create') }}" class="btn btn-secondary">
            <i class="icon-plus"></i>&nbsp;Nueva
          </a>
        </div>
        <div class="card-body">
            <div class="form-group row">
                @include('modules.producto.frmSearch')
            </div>
             @include('template.alert') 
             @include('template.error') 
    
              <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Foto</th>
                        <th>Categoria</th>
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
                          {{ $producto->precio }}                        
                        </td>
                        <td>
                          <img class="img-fluid"  src="{{ asset($producto->foto) }}" width="100px" alt="">
                          {{ $producto->foto }}
                        </td>
                        <td>
                          {{ $producto->categoria }}                        
                        </td>
                        <td>
                            <a type="button" href="{{ route('producto.edit', ['id'=>$producto->id]) }}" class="btn btn-success btn-sm">
                              <i class="icon-pencil"></i>
                            </a>
                            @include('modules.producto.frmShow')
                            @include('modules.producto.frmDestroy') 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
    
              </table>
    
              <div class="">
                {{ $productos->links() }}
              </div>
        </div>
    </div>
</div>
