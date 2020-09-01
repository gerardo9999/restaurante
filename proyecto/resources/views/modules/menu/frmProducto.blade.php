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