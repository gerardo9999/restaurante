<main class="main">
    @if($table)
        <div>
            <br> 
            <br> 
            <br> 
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Menu
                        <button wire:click="mostrarFormulario()" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalNuevo">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                        <button type="button" wire:click="mostrarFormulario()"  class="btn btn-success btn-sm">
                            <i class="icon-check"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">

                                    <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                                    <button type="date" class="btn btn-primary"><i class="fa fa-search"></i> Fecha</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                        <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                        <i class="icon-trash"></i>
                                        </button>
                                    </td>
                                    <td>Equipos</td>
                                    <td>Dispositivos electrónicos</td>
                                    <td>
                                        <span class="badge badge-success">Activo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                        <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                        <i class="icon-trash"></i>
                                        </button>
                                    </td>
                                    <td>Equipos</td>
                                    <td>Dispositivos electrónicos</td>
                                    <td>
                                        <span class="badge badge-success">Activo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                        <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                        <i class="icon-trash"></i>
                                        </button>
                                    </td>
                                    <td>Equipos</td>
                                    <td>Dispositivos electrónicos</td>
                                    <td>
                                        <span class="badge badge-secondary">Inactivo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                        <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                        <i class="icon-trash"></i>
                                        </button>
                                    </td>
                                    <td>Equipos</td>
                                    <td>Dispositivos electrónicos</td>
                                    <td>
                                        <span class="badge badge-secondary">Inactivo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                        <i class="icon-pencil"></i>
                                        </button>&nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                        <i class="icon-trash"></i>
                                        </button>
                                    </td>
                                    <td>Equipos</td>
                                    <td>Dispositivos electrónicos</td>
                                    <td>
                                        <span class="badge badge-success">Activo</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">Ant</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Sig</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
        </div>      
    @endif

    @if ($formulario)
        
        <div class="container-fluid">
            <!-- Ejemplo de tabla Listado -->
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Agregar Menu
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalNuevo">
                        <i class="icon-plus"></i>&nbsp;Nuevo
                    </button>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="input-group">
                                
                                <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                    <i class="icon-pencil"></i>
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                    <i class="icon-trash"></i>
                                    </button>
                                </td>
                                <td>Equipos</td>
                                <td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-success">Activo</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                    <i class="icon-pencil"></i>
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                    <i class="icon-trash"></i>
                                    </button>
                                </td>
                                <td>Equipos</td>
                                <td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-success">Activo</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                    <i class="icon-pencil"></i>
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                    <i class="icon-trash"></i>
                                    </button>
                                </td>
                                <td>Equipos</td>
                                <td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-secondary">Inactivo</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                    <i class="icon-pencil"></i>
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                    <i class="icon-trash"></i>
                                    </button>
                                </td>
                                <td>Equipos</td>
                                <td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-secondary">Inactivo</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                    <i class="icon-pencil"></i>
                                    </button>&nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                    <i class="icon-trash"></i>
                                    </button>
                                </td>
                                <td>Equipos</td>
                                <td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-success">Activo</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Ant</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Sig</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Fin ejemplo de tabla Listado -->
        </div>

    @endif

    
</main>
