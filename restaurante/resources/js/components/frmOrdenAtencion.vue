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
                    <!--    <button type="button" @click="abrirModal('mesa','registrar')" class="btn btn-secondary">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button> -->
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
                                            <div v-for="mesa in arrayMesa" :key="mesa.id" class="col-md-3 col-sm-4 col-auto">
                                                <table  class="table table-bordered table-striped table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                <div class="card">
                                                                    <template v-if="mesa.ocupado">
                                                                         <!-- <div class="row"> -->
                                                                            <div class="card-header alert-danger row" style="border:solid 1px #;">
                                                                                <div class="col-md-6 text-center">
                                                                                    <h6 ><strong v-text="mesa.id"></strong> : <strong v-text="mesa.ubicacion"></strong> </h6> 
                                                                                </div>
                                                                                <!-- <div class="col-md-4 text-center">
                                                                                    <span class="badge badge-success">Mesa Libre</span>
                                                                                </div> -->
                                                                                <div class="col-md-6 text-center">
                                                                                    <h6><img width="15px" src="imagenes/persona.png" alt=""> <strong v-text="mesa.capacidad"></strong> </h6> 
                                                                                </div>
                                                                            </div>

                                                                        <!-- </div> -->

                                                                    </template>

                                                                    <template v-else>
                                                                        <!-- <div class="row"> -->
                                                                            <div class="card-header alert-success row" style="border:solid 1px #;">
                                                                                <div class="col-md-6 text-center">
                                                                                    <h6 ><strong v-text="mesa.id"></strong> : <strong v-text="mesa.ubicacion"></strong> </h6> 
                                                                                </div>
                                                                                <!-- <div class="col-md-4 text-center">
                                                                                    <span class="badge badge-success">Mesa Libre</span>
                                                                                </div> -->
                                                                                <div class="col-md-6 text-center">
                                                                                    <h6><img width="15px" src="imagenes/persona.png" alt=""> <strong v-text="mesa.capacidad"></strong> </h6> 
                                                                                </div>
                                                                            </div>

                                                                        <!-- </div> -->

                                                                    </template>
                                                                   
                                                                    
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <img width="30px" height="30px" src="imagenes/icon_mesa_black.png" alt="">
                                                                            </div>
                                                                            <div class="col-md-6">

                                                                            <template v-if="mesa.ocupado">

                                                                                <button type="button" @click="verOrden(mesa)" class="btn btn-danger btn-sm">
                                                                                            <img width="30px" height="30px" src="imagenes/icono-restaurante.png" alt="">
                                                                                </button> &nbsp;

                                                                            </template>
                                                                            <template v-else>
                                                                                <button type="button" @click="editarOrden(mesa)" class="btn btn-success btn-sm">
                                                                                            <img width="30px" height="30px" src="imagenes/icono-restaurante.png" alt="">
                                                                                </button> &nbsp;
                                                                            </template>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <template v-if="mesa.ocupado">
                                                                        <div class="card-footer alert-success">
                                                                            <h6><img width="15px" src="imagenes/persona.png" alt=""> <strong v-text="mesa.capacidad"></strong> </h6> 
                                                                        </div>
                                                                    </template>
                                                                    <template v-else>
                                                                        <div class="card-footer alert-danger">
                                                                            <h6><img width="15px" src="imagenes/persona.png" alt=""> <strong v-text="mesa.capacidad"></strong> </h6> 
                                                                        </div>
                                                                    </template> -->
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
                                        <label for="">Agregar Cliente</label>
                                        <!-- <div class="input-group"> -->
                                            <v-select 
                                                @search="selectCliente"
                                                label="nombreCompleto"
                                                :options="arrayCliente"
                                                placeholder="Buscar Cliente..."
                                                @input="getCliente"
                                            >
                                            </v-select>  
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lista de Productos</label>
                                        <div class="input-group">
                                        <input type="text" disabled  class="form-control frm-control-sm" placeholder="Añadir una lista">
                                        <button type="submit" @click="abrirModal('menu','lista')"  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> </button>
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
                                            <button @click="agregarDetalle()" class="btn btn-success form-control">
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
                                                    <th>Cantidad</th>
                                                    <th>SubTotal</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody v-if="arrayDetalle.length">

                                                    <tr v-for="(detalle,index) in arrayDetalle" :key="detalle.id">
                                                        <td v-text="detalle.nombre"></td>
                                                        <td v-text="detalle.precio"></td>
                                                        <td><input v-model="detalle.cantidad" class="form-control"></td>
                                                        <td> {{detalle.precio*detalle.cantidad}}</td>
                                                        <td>
                                                            <button @click="eliminarDetalle(index)" class=" btn btn-danger btn-sm">
                                                                <i class="icon-close" ></i>
                                                            </button>
                                                           
                                                        </td>
                                                    </tr>
                                                     <tr style="background-color: #CEECF5;">
                                                        <td colspan="4" align="right"><strong>Total :</strong></td>
                                                        <td>
                                                            {{ total = (obtenerTotal)  }} .Bs
                                                        </td>
                                                     </tr>                   
                                            </tbody>
                                            <tbody v-else>
                                                <td colspan="5" align="center"><strong>No ha asignado ningun producto</strong></td>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button  @click="guardarOrden()" class="btn btn-success">Guardar </button>
                                    <button @click="mostrarListado()" class="btn btn-secondary">Cerrar </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div> <!--card-body-->
            </div> <!--card-->
        </div> <!--div fluid-->

        <!-- Modal -->
            <!--Inicio del modal agregar/actualizar-->
            <div id="modal" class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" v-text="tituloModal"></h4>
                            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">


                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <select class="form-control col-md-6" v-model="criterioProducto">
                                            <option value="producto">Producto</option>
                                            <option value="categoria">Categoria</option>
                                            </select>
                                            <input type="text" v-model="buscarProducto" @keyup.enter="listarProducto(buscarProducto,criterioProducto)" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                                            <button type="submit" @click="listarProducto(buscarProducto,criterioProducto)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Categoría</th>
                                        <th>Precio</th>
                                        <th>Foto</th>
                                        <th>Descripción</th>
                                        <th>Opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="producto in arrayProducto" :key="producto.id">
                                    
                                        <td v-text="producto.nombre"></td>
                                        <td v-text="producto.categoria"></td>
                                        <td v-text="producto.precio"></td>
                                        <td><img :src="`${producto.foto}`" width="100px" alt=""></td>
                                        <td v-text="producto.descripcion"></td>
                                        <td>
                                            <button type="button" @click="agregarDetalleModal(producto)" class="btn btn-success btn-sm">
                                                <i class="icon-check"></i>
                                            </button>
                                        </td>
                                    </tr>             
                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarArticulo()">Guardar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarArticulo()">Actualizar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
        <!-- Fin Modal -->


    </main>
</template>
<script>
    import vSelect from 'vue-select';
    import vSelect1 from 'vue-select';
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


                idCliente       : 0,
                nombreCliente   : '',
                apellidoCliente : '',

                buscarProducto : '',


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
                arrayCliente      :[],
                arrayDetalle      :[],
                arrayMenuDetalle  :[],
                arrayProductoMenu :[],

                modal       : 0,
                tituloModal : '',
                tipoAccion  : 0,
                errorMesa   : 0,

                criterioProducto : 'producto',
                buscarProducto : '',

                errorMostrarMsjMesa: [],
                
                total: 0, 

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
        vSelect1,
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
            },
            obtenerTotal: function(){
                var resultado = 0.0 ;
                for (let index = 0; index < this.arrayDetalle.length; index++) {
                    resultado = resultado + (this.arrayDetalle[index].precio*this.arrayDetalle[index].cantidad);
                }
                return resultado;
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
            editarOrden(mesa){
                iziToast.success({
                    title: "En proceso....."
                })
            },
            selectCliente(search,loading){
                 let me=this;
                loading(true);
                var url= '/cliente/selectCliente?filtro='+search;
                axios.get(url).then(function (response) {
                    //console.log(response);
                    var respuesta= response.data;
                    me.arrayCliente = respuesta.clientes;
                    loading(false);
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            getCliente(val2){
                        let me=this;
                        me.loading          = true;
                        me.idCliente        = val2.id;
                        me.nombreCliente    = val2.nombres;
                        me.apellidoCliente  = val2.apellidos;
                        console.log(val2);
                        me.searchProducto = 1;
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
            cerrarModal(){
                
                this.modal=0;
                this.tituloModal='';
                document.getElementsByTagName("html")[0].style.overflow = "auto";

            },
            abrirModal(modelo, accion, data = []){

                        document.getElementsByTagName("html")[0].style.overflow = "hidden";
                        document.getElementsByTagName("body")[0].animate({scrollTop:'0px'});
                        this.modalContenido ='lista';
                                this.arrayProducto=[];
                                this.buscarProducto='';
                                this.modal=1;
                                this.tituloModal = "Seleccione productos ";
            },
            encuentra(id){
                var sw = false;
                for (let index = 0; index < this.arrayDetalle.length; index++) {
                    var idProducto = this.arrayDetalle[index].id;
                    if(idProducto == id){
                        sw = true;
                    }
                }
                return sw;
            },
            agregarDetalleModal(data=[]){
                console.log(data);
                let me=this;
                var existe = this.encuentra(data['id']);

                        if(existe){
                            iziToast.show({
                                title :"Error!!",
                                message :"El producto ya se encuentra agregado",
                            });
                        }else{
                   
                            me.arrayDetalle.push({
                                "id"    : data['id'],
                                "nombre":data['nombre'],
                                "precio":data['precio'],
                                "cantidad":1
                            });
                            iziToast.success({
                                        title:"agregado correctamente !!"
                            });
                            this.idProducto=0;
                        }
            },
            eliminarDetalle(index){
                let me = this;
                me.arrayDetalle.splice(index, 1);

                iziToast.error({
                    title:"Eliminado",
                    message :"Producto eliminado del detalle"
                })
            },
            agregarDetalle(){
                let me=this;

                if(me.idProducto ==0){
                     iziToast.error({
                        title:"selccione un producto!!"
                     });
                }else{
                        var existe = this.encuentra(this.idProducto);

                        if(existe){
                            iziToast.show({
                                title :"Error!!",
                                message :"El producto ya se encuentra agregado",
                            });
                        }else{
                   
                             me.arrayDetalle.push({
                                            "id" : me.idProducto,
                                            "nombre":me.producto,
                                            "foto":me.foto,
                                            "precio":me.precio,
                                            "cantidad":1
                            });
                            iziToast.success({
                                        title:"agregado correctamente !!"+existe
                            });
                            this.idProducto=0;
                        }
                }
            },
            guardarOrden(){
                // if (this.validarMenu()){
                    // this.mostrarError();
                // }else{
                    let me = this;
                    axios.post('/ordenAtencion/guardar',{
                        'idCliente'     : this.idCliente,
                        'idMesa'        : this.idMesa,
                        'data'          : this.arrayDetalle,
                    }).then(function (response) {
                        me.listarMesa(1,0,'ocupado');
                        // me.resetVariable();
                        me.mostrarListado()

                        iziToast.info({
                            title: 'Exito!',
                            message: 'El Menu se ha guardado con exito!',
                        });
                    }).catch(function (error) {
                        console.log(error);
                    });
                // }
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