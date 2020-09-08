<template>
    <main class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Admin</a></li>
        </ol>

        <div class="container-fluid">
            <div class="card">
                <template v-if="listado">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Mesa 
                        <button type="button" @click="abrirModal('mesa','registrar')" class="btn btn-secondary">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                    </div>
                </template>


                <template v-else>
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Mesa  - {{ idMesa }}
                    </div>
                </template>

                <div class="card-body"><!--card Body-->
                    <template v-if="listado">
                            <!-- <template>  Listado -->
                                <div class="form-group row">  <!--Busqueda-->
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <select class="form-control col-md-8" v-model="criterio">
                                                <option value="capacidad">Capacidad</option>
                                                <option value="ubicacion">Ubicacion</option>
                                            </select>
                                            <input type="text" v-model="buscar" @keyup.enter="listarMesa(1,buscar, criterio)" class="form-control" placeholder="Buscar">                                
                                            <button type="submit" @click="listarMesa(1,buscar, criterio)" class="btn btn-primary"><i class="fa fa-search"></i></button>

                                            <template v-if="mesaOcupado=='cris'">
                                                <button type="submit"  @click="estadoMesa('verde')" class="btn btn-secondary"><i class="fa fa-check"></i> Estado</button>
                                            </template>
                                            
                                            <template v-if="mesaOcupado=='verde'">
                                                <button type="submit"  @click="estadoMesa('rojo')" class="btn btn-success"><i class="fa fa-check"></i>Estado</button>
                                            </template>
                                            
                                            <template v-if="mesaOcupado=='rojo'">
                                                <button type="submit"  @click="estadoMesa('verde')" class="btn btn-danger"><i class="fa fa-check"></i>Estado</button>
                                            </template>
                                        </div>
                                    </div>
                                </div> <!-- fin fr busqueda -->
                                <div class="row"> 
                                    <div class="col-md-12"> <!--lista--> <br>
                                        <div class="row" >
                                            <div v-for="mesa in arrayMesa" :key="mesa.id" class="col-md-4">
                                                <table  class="table table-bordered table-striped table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                <div class="card">
                                                                    <template v-if="mesa.ocupado">
                                                                        <div class="card-header alert-success">
                                                                            <span class="badge badge-success">Mesa Libre</span>
                                                                        </div>
                                                                    </template>
                                                                    <template v-else>
                                                                        <div class="card-header alert-danger">
                                                                            <span class="badge badge-danger">Mesa Ocupada</span>
                                                                        </div>
                                                                    </template>
                                                                    
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <img width="50px" height="50px" src="imagenes/icon_mesa_black.png" alt="">


                                                                            </div>
                                                                            <div class="col-6">

                                                                                <div class="row p-1">
                                                                                        <button type="button" @click="verOrden(mesa)" class="btn btn-info btn-sm">
                                                                                            <i class="icon-map"></i> Orden Atencion
                                                                                        </button> &nbsp;
                                                                                </div>                                                                        
                                                                                                                                                    
                                                                                

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <template v-if="mesa.ocupado">
                                                                        <div class="card-footer alert-success">
                                                                            <h6><img width="15px" src="imagenes/persona.png" alt=""> <strong v-text="mesa.capacidad"></strong> </h6> 
                                                                        </div>

                                                                    </template>
                                                                    <template v-else>
                                                                        <div class="card-footer alert-danger">
                                                                            <h6><img width="15px" src="imagenes/persona.png" alt=""> <strong v-text="mesa.capacidad"></strong> </h6> 
                                                                        </div>
                                                                    </template>

                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
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
                                    </div> <!--lista-->
                                </div>
                    </template>

                    <template v-else>
                        <div class="card-body">
                            <div class="form-group row border">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Mesa</label>
                                        <input type="text" disabled  class="form-control frm-control-sm" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lista de Productos</label>
                                        <div class="input-group">
                                        <input type="text" disabled  class="form-control frm-control-sm" placeholder="Añadir una lista">
                                        <button type="submit"   class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> </button>
                                    </div>                                  
                                    </div>
                                </div>


                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="">Seleccione Producto</label>
                                        <!-- <div class="input-group"> -->
                                            <v-select 
                                                @search="selectProducto"
                                                label="nombre"
                                                :options="arrayProducto"
                                                placeholder="Buscar Producto..."
                                                @input="getProducto"
                                            >
                                            </v-select>  
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>Agregar</label>
                                        <div class="form-inline">
                                            <!-- <input type="text" readonly class="form-control" placeholder="Seleccione Lista"> -->
                                            <button  class="btn btn-success form-control">
                                                <i class="icon-plus"></i>
                                            </button> 
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row border" >
                                
                                    <div class="table-responsive col-md-12 p-4"  >
                                        <table class="table table-bordered table-striped table-sm">
                                            <thead >
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Precio</th>
                                                    <th>Foto</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <!-- <tbody v-if="arrayDetalle.length">

                                                    <tr v-for="(detalle,index) in arrayDetalle" :key="detalle.id">
                                                        <td v-text="detalle.nombre"></td>
                                                        <td v-text="detalle.precio"></td>
                                                        <td><img :src="`${detalle.foto}`" width="100px" alt=""></td>
                                                        <td>
                                                            <button @click="eliminarDetalle(index)" class=" btn btn-danger btn-sm">
                                                                <i class="icon-close" ></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                            </tbody> -->
                                            <!-- <tbody v-else>
                                                <td colspan="4">No ha asignado ningun producto </td>
                                            </tbody> -->
                                        </table>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button  @click="guardarMenu()" class="btn btn-success">Registrar </button>
                                    <button @click="mostrarListado()" class="btn btn-secondary">Cerrar </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div> <!--card-body-->
            </div> <!--card-->
        </div> <!--div fluid-->

    </main>
</template>

<script>
    import vSelect from 'vue-select';
    import Datepicker from 'vuejs-datepicker';
    import 'vue-select/dist/vue-select.css';
    export default {
        data() {
            return {
                idMesa      : 0,
                capacidad   : 0,
                descripcion : '',
                ubicacion   : '',
                listado     : 1,


                idProducto  : 0,
                producto    : '',
                precio      : 0,
                foto        :'',
                fecha       :null,

                idMesaDetalle : 0,

                estado      : 0,
                mesaOcupado : 'cris',
                ocupado     : true,
                
                arrayMesa         :[],
                arrayProducto     :[],
                arrayDetalle      :[],
                arrayMenuDetalle  :[],
                arrayProductoMenu :[],

                modal: 0,
                tituloModal: '',
                tipoAccion: 0,
                errorMesa: 0,
                errorMostrarMsjMesa: [],
                
                pagination: {
                    'total': 0,
                    'current_page': 0,
                    'per_page': 0,
                    'last_page': 0,
                    'from': 0,
                    'to': 0,
                },
                
                offset: 3,
                criterio: 'capacidad',
                buscar: ''
            }
        }, 
        components: {
        // 'barcode': VueBarcode
        vSelect,
        Datepicker
        },
        computed: {
            isActived: function() {
                return this.pagination.current_page;
            },
            pagesNumber: function() {
                if (!this.pagination.to) {
                    return [];
                }

                var from = this.pagination.current_page - this.offset;
                if (from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2);
                if (to >= this.pagination.last_page) {
                    to = this.pagination.last_page;
                }

                var pagesArray = [];
                while (from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            }
        },
        methods: {
            estadoMesa(color){
                this.mesaOcupado=color;

                if(color=='rojo'){
                    this.listarMesa(1,0,'ocupado');
                }
                if(color=='verde'){
                    this.listarMesa(1,1,'ocupado')
                }
            },
            listarMesa(page, buscar, criterio) {
            // listarMesa(buscar, criterio) {
                let me = this;
                
                var url = '/mesa?page=' + page + '&buscar=' + buscar + '&criterio=' + criterio;
                // var url = '/mesa?buscar=' + buscar + '&criterio=' + criterio;
                axios.get(url).then(function(response) {
                        var respuesta = response.data;
                        me.arrayMesa = respuesta.mesa.data;
                        me.pagination = respuesta.pagination;
                        // console.log(respuesta)
                    })
                    .catch(function(error) {
                        console.log(error)
                    });
            },
            selectProducto(search,loading){
                let me=this;
                loading(true);
                var url= '/producto/selectProducto?filtro='+search;
                axios.get(url).then(function (response) {
                    //console.log(response);
                    var respuesta= response.data;
                    me.arrayProducto = respuesta.productos;
                    loading(false);
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            getProducto(val1){
                if(val1){
                        let me=this;
                        me.loading    = true;
                        me.idProducto = val1.id;
                        me.precio     = val1.precio;
                        me.foto       = val1.foto;
                        me.producto   = val1.nombre;
                        console.log(val1);
                        me.searchProducto = 1;
                }

            },
            cambiarPagina(page, buscar, criterio) {
                let me = this;
                me.pagination.current_page = page;
                me.listarMesa(page, buscar, criterio);
            },
            registrarMesa() {
                if (this.validarMesa()) {
                    return;
                }
                let me  = this;
                let url = '/mesa/guardar';

                let data = new FormData();
                data.append('capacidad', this.capacidad);
                data.append('descripcion', this.descripcion);
                data.append('ubicacion', this.ubicacion);
                data.append('ocupado', this.ocupado);

                axios.post(url,data).then(function(response) {
                    me.cerrarModal();
                    me.listarMesa(1, '', 'nombre');

                    
                    iziToast.success({
                            title: 'Guardado con exito!',
                            message: 'Se ha registrado una nueva mesa',


                    });
                    
                }).catch(function(error) {
                    console.log(error);
                });
            },
            mostrarListado(){
                this.listado = 1;

            },
            listarProducto(buscar,criterio,){
                
                let me=this;
                var url= '/producto/buscarProducto?buscar='+ buscar + '&criterio='+ criterio;

                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayProducto = respuesta.producto.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
            },
            ocultarListado(){
                this.listado = 0;
            },
            verOrden(mesa){
                this.ocultarListado();

                console.log(mesa.id)
                this.idMesa      = mesa.id;
                this.capacidad   = mesa.capacidad;
                this.ubicacion   = mesa.ubicacion;
                this.descripcion = mesa.descripcion;
            },
            actualizarMesa() {
                if (this.validarMesa()) {
                    return;
                }
                let me = this;
                let url = '/mesa/modificar';
                
                let data = new FormData();
                data.append('capacidad',   this.capacidad);
                data.append('descripcion', this.descripcion);
                data.append('ubicacion',   this.ubicacion);
                data.append('ocupado',     this.ocupado);
                data.append('id',          this.idMesa);

                axios.post(url,data).then(function(response) {
                    me.cerrarModal();
                    me.listarMesa(1, '', 'nombre');
                }).catch(function(error) {
                    console.log(error);
                });
            },
            eliminarMesa(id) {
                swal({
                    title: 'Esta seguro de eliminar esta mesa?',
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

                        axios.post('/mesa/eliminar', {
                            'id': id
                        }).then(function(response) {
                            me.listarMesa(1, '', 'nombre');
                            swal(
                                'Eliminado!',
                                'El registro ha sido eliminado con éxito.',
                                'success'
                            )
                        }).catch(function(error) {
                            console.log(error);
                        });


                    } else if (
                        // Read more about handling dismissals
                        result.dismiss === swal.DismissReason.cancel
                    ) {

                    }
                })
            },
            validarMesa() {
                this.errorMesa = 0;
                this.errorMostrarMsjMesa = [];

                if (!this.capacidad) this.errorMostrarMsjMesa.push("Debe completar el campo Nombre ");
                if (this.errorMostrarMsjMesa.length) this.errorMesa = 1;
                return this.errorMesa;
            },
            cerrarModal() {
                this.modal = 0;
                this.tituloModal = '';
                this.capacidad = 0;
                this.descripcion = '';
                this.ubicacion = '';
            },
            abrirModal(modelo, accion, data = []) {
                switch (modelo) {
                    case "mesa":
                        {
                            switch (accion) {
                                case 'registrar':
                                    {
                                        this.modal = 1;
                                        this.tituloModal = 'Guardar Mesa'
                                        this.capacidad = 0;
                                        this.ubicacion = '';
                                        this.descripcion = '';
                                        this.tipoAccion = 1;
                                        break;
                                    }
                                case 'actualizar':
                                    {
                                        this.modal = 1;
                                        this.tituloModal = 'Modificar Mesa';
                                        this.tipoAccion = 2;
                                        this.idMesa =       data['id'];
                                        this.ocupacion =    data['ocupacion'];
                                        this.capacidad =    data['capacidad'];
                                        this.descripcion =  data['descripcion'];
                                        this.ubicacion =    data['ubicacion'];
                                        break;
                                    }
                            }
                        }
                }
            }
        },
        mounted() {
            this.listarMesa(1, this.buscar, this.criterio);
            // this.listarMesa(this.buscar, this.criterio);
        }
    }
</script>
<style>
    .modal-content {
        width: 100% !important;
        position: absolute !important;
    }
    
    .mostrar {
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    
    .div-error {
        display: flex;
        justify-content: center;
    }
    
    .text-error {
        color: red !important;
        font-weight: bold;
    }
</style>