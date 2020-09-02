<template>
    <main class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Admin</a></li>
        </ol>
        <div class="container-fluid">
            <!-- Ejemplo de tabla Listado -->
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Vehiculo
                    <button type="button" @click="abrirModal('vehiculo','registrar')" class="btn btn-secondary">
                        <i class="icon-plus"></i>&nbsp;Nuevo
                    </button>
                </div>


                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control col-md-3" v-model="criterio">
                                <option value="tipoVehiculo">Tipo de Vehiculo</option>
                                <option value="caracteristicas">Caracteristicas</option>
                                <option value="placa">Placa</option>
                                </select>
                                <input type="text" v-model="buscar" @keyup.enter="listarVehiculo(1, buscar, criterio)" class="form-control" placeholder="Texto a buscar">
                                <button type="submit" @click="listarVehiculo(1, buscar, criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>TipoVehiculo</th>
                                <th>Caracteristicas</th>
                                <th>Placa</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="vehiculo in arrayVehiculo" :key="vehiculo.id">
                                
                                <td v-text="vehiculo.tipoVehiculo"></td>
                                <td v-text="vehiculo.caracteristicas"></td>
                                <td v-text="vehiculo.placa"></td>     
                                <td >
                                    <div v-if="vehiculo.tipoVehiculo">
                                        <span class="badge badge-success">Automovil</span>
                                    </div>
                                    <div v-else>
                                        <span class="badge badge-danger">Motocicleta</span>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" @click="abrirModal('vehiculo','actualizar',vehiculo)" class="btn btn-warning btn-sm">
                                    <i class="icon-pencil"></i>
                                    </button> &nbsp;
                                    <button type="vehiculo" class="btn btn-danger btn-sm" @click="eliminarVehiculo(vehiculo.id)">
                                        <i class="icon-trash"></i>
                                    </button> &nbsp;
                                        </template>                                   
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    
                    <nav>
                        <ul class="pagination">
                            <li class="page-item" v-if="pagination.current_page > 1">
                                <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1, buscar, criterio)">Ant</a>
                            </li>
                            <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page==isActived ? 'active' :'']">
                                <a class="page-link" href="#" @click.prevent="cambiarPagina(page, buscar, criterio)" v-text="page">1</a>
                            </li>
                            <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1, buscar, criterio)">Sig</a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
            <!-- Fin ejemplo de tabla Listado -->
        </div>
        <!--Inicio del modal agregar/actualizar-->
        <div class="modal fade" tabindex="-1" :class="{'mostrar' :modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" v-text="tituloModal"></h4>
                        <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">tipoVehiculo</label>
                                <div class="col-md-9">
                                    <input type="text" v-model="tipoVehiculo" class="form-control" placeholder="TipoVehiculo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Caracteristicas</label>
                                <div class="col-md-9">
                                    <input type="text" v-model="tipoVehiculo" class="form-control" placeholder="Caracteristicas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Placa</label>
                                <div class="col-md-9">
                                    <input type="text" v-model="placa" class="form-control" placeholder="Placa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Tipo</label>
                                <div class="col-md-9">
                                    <select class="form-control" v-model="idTipo">
                                       <option value="0" disabled>Seleccione un Tipo</option>
                                       <option v-for="tipo in arrayTipo" :key="tipo.id" :value="tipo.id" v-text="tipo.nombre"></option>
                                   </select>
                                </div>
                            </div>
                            <div v-show="errorVehiculo" class="form-group row div-error">
                                <div class="text-center text-error">
                                    <div v-for="error in errorMostrarMsjVehiculo" :key="error" v-text="error">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                        <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarVehiculo()">Guardar</button>
                        <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarVehiculo()">Actualizar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->   
    </main>
</template>

<script>
    export default {
        data(){
            return {
                idVehiculo : 0,
                idRepartidor : 0,
                tipoVehiculo : '',  
                caracteristicas : '',
                placa : 0,
                arrayVehiculo : [],
                arrayRepartidor : [],
                modal : 0,
                tituloModal : '',
                tipoAccion : 0,
                errorVehiculo : 0,
                errorMostrarMsjVehiculo : [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio : 'nombre',
                buscar : ''
            }
        },
        computed : {
            isActived: function(){
                return this.pagination.current_page;
            },
            pagesNumber: function(){
                if(!this.pagination.to){
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset;
                if(from < 1){
                    from = 1;
                }

                var to = from + (this.offset * 2);
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }

                var pagesArray = [];
                while(from <= to){
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            }
        },
        methods : {
            listarVehiculo(page, buscar, criterio){
                let me=this;
                var url='/vehiculo?page=' + page + '&buscar=' + buscar + '&criterio=' + criterio;
                axios.get(url).then(function(response){
                    var respuesta =response.data;
                    me.arrayVehiculo=respuesta.vehiculo.data;
                    me.pagination=respuesta.pagination;
                })
                .catch(function(error){
                    console.log(error)
                });
            },
            selectTipo(){
                let me=this;
                var url='/tipo/selectTipo';
                axios.get(url).then(function(response){
                   //console.log(response);
                   var respuesta =response.data;
                   me.arrayTipo=respuesta.tipo;
                })
                .catch(function(error){
                    console.log(error)
                });
            },
            cambiarPagina(page, buscar, criterio){
                let me=this;
                me.pagination.current_page=page;
                me.listarVehiculo(page, buscar, criterio);
            },
            registrarVehiculo(){
                if(this.validarVehiculo()){
                    return;
                }
                let me = this;
                axios.post('/vehiuclo/guardar',{
                    'tipoVehiculo' : this.tipoVehiculo,
                    'caracteristicas' : this.caracteristicas,
                    'placa' : this.placa,
                    'idVehiculo' : this.idVehiculo,
                }).then(function(response){
                    me.cerrarModal();
                    me.listarVehiculo(1, '', 'tipoVehiculo');
                }).catch(function(error){
                    console.log(error);
                });
            },
            actualizarVehiculo(){
                if(this.validarVehiculo()){
                    return;
                }
                let me = this;
                axios.put('/vehiculo/actualizar',{
                    'tipoVehiculo' : this.tipoVehiculo,
                    'caracteristicas' : this.caracteristicas,
                    'placa' : this.placa,
                    'idRepartidor' : this.idRepartidor,
                    'id' : this.idVehiculo
                }).then(function(response){
                    me.cerrarModal();
                    me.listarVehiculo(1, '', 'tipoVehiculo');
                }).catch(function(error){
                    console.log(error);
                });
            },
            eliminarVehiculo(id){
                swal({
                title: 'Esta seguro de eliminar este Vehiculo ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar!',
                cancelButtonText: 'Cancelar',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
                }).then((result) => {
                if (result.value) {
                    let me = this;

                    axios.put('/vehiculo/eliminar',{
                        'id': id
                    }).then(function (response) {
                        me.listarVehiculo(1, '', 'tipoVehiculo');
                        swal(
                        'Eliminado!',
                        'El registro ha sido eliminado con éxito.',
                        'success'
                        )
                    }).catch(function (error) {
                        console.log(error);
                    });
                    
                    
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    
                }
                })
            },
            
            validarVehiculo(){
                this.errorVehiculo = 0;
                this.errorMostrarMsjVehiculo = [];

                if(!this.tipoVehiculo) this.errorMostrarMsjVehiculo.push("Debe completar el campo tipo de Vehiculo ");
                if(!this.caracteristicas) this.errorMostrarMsjVehiculo.push("Debe completar el campo caracteristica ");
                if(!this.placa) this.errorMostrarMsjVehiculo.push("Debe completar el campo placa ");
                if(!this.idRepartidor) this.errorMostrarMsjVehiculo.push("Debe completar el campo Id Repartidor ");
            },
            cerrarModal(){
                this.modal = 0;
                this.tituloModal = '';
                this.tipoVehiculo = '';
                this.caracteristica = '';
                this.placa = 0;
                this.idRepartidor = 0;
            },
            abrirModal(modelo, accion, data=[]){
                switch(modelo){
                    case "vehiculo":
                        {
                            switch(accion){
                                    case 'registrar':
                                    {
                                        this.modal = 1;
                                        this.tituloModal='Registrar Vehiculo'
                                        this.tipoVehiculo='';
                                        this.caracteristas = '';
                                        this.placa = '';
                                        this.idRepartidor = '';
                                        this.tipoAccion = 1;
                                        break;
                                    }
                                    case 'actualizar':
                                    {
                                        this.modal = 1;
                                        this.tituloModal = 'Actualizar Habitacion';
                                        this.tipoAccion = 2;
                                        this.idVehiculo = data['id'];
                                        this.tipoVehiculo = data['tipoVehiculo'];
                                        this.caracteristica = data['caracteristicas'];
                                        this.placa = data['placa'];
                                        this.idRepartidor = data['idRepartidor'];
                                        break;
                                    }
                            }
                        }
                }
                this.selectTipo();    //error
            }
        },
        mounted() {
            this.listarVehiculo(1, this.buscar, this.criterio);
        }
    }
</script>
<style>
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
</style>