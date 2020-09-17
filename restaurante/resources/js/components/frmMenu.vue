<template>
            <main class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Escritorio</a></li>
            </ol>
            <div class="container-fluid">
               
                <div class="card">
                    
                    

                    <template v-if="listado">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Menu
                            <button type="button" @click="ocultarListado()" class="btn btn-secondary">
                                <i class="icon-plus"></i>&nbsp;Nuevo
                            </button>
                        </div>
                        <div class="row">

                            <div class="col-6">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                               
                                                <input type="date" v-model="buscar"  class="form-control frm-control-sm" placeholder="buscar por fecha">
                                                <!-- <b-form-datepicker id="example-datepicker" v-model="buscar" @keyup.enter="listarMenu(1,buscar,criterio)" class="mb-2"></b-form-datepicker>
                                                {{ buscar }} -->
                                                <button type="submit" @click="listarMenu(1,buscar,criterio)" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Buscar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="menu in arrayMenu" :key="menu.id">
                                                <template v-if="marcar==menu.id">
                                                        <td v-text="menu.fecha"></td>
                                                        <template v-if="menu.estado">
                                                                <td><span class="badge badge-success">Activado</span></td>
                                                        </template>
                                                        <template v-else>
                                                                <td><span class="badge badge-danger">Desactivado</span></td>
                                                        </template>
                                                        <td>
                                                            <button type="button" @click="verProducto(menu.id)" class="btn btn-success btn-sm">
                                                            <i class="icon-check"></i>
                                                            </button> &nbsp;
                                                            <button type="button" @click="verProducto(menu.id)" class="btn btn-danger btn-sm">
                                                            <i class="icon-trash"></i>
                                                            </button> &nbsp;
                                                        </td>
                                                </template>
                                                <template v-else>
                                                        <td v-text="menu.fecha"></td>
                                                        <template v-if="menu.estado">
                                                                <td><span class="badge badge-success">Activado</span></td>
                                                        </template>
                                                        <template v-else>
                                                                <td><span class="badge badge-danger">Desactivado</span></td>
                                                        </template>
                                                        <td>
                                                            <button type="button" @click="verProducto(menu.id)" class="btn btn-info btn-sm">
                                                            <i class="icon-eye"></i>
                                                            </button> &nbsp;
                                                             <button type="button" @click="verProducto(menu.id)" class="btn btn-danger btn-sm">
                                                            <i class="icon-trash"></i>
                                                            </button> &nbsp;
                                                        </td>
                                                </template>    
                                            </tr>                           
                                        </tbody>
                                    </table>
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item" v-if="pagination.current_page > 1">
                                                <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1,buscar,criterio)">Ant</a>
                                            </li>
                                            <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                                                <a class="page-link" href="#" @click.prevent="cambiarPagina(page,buscar,criterio)" v-text="page"></a>
                                            </li>
                                            <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                                <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1,buscar,criterio)">Sig</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-6">
                                  <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <h5>Productos del Menu</h5>
                                            <!-- <div class="input-group">
                                                <select class="form-control col-md-3" v-model="criterio">
                                                <option value="fecha">Fecha</option>
                                                </select>
                                                <input type="date" v-model="buscar" @keyup.enter="listarMenu(1,buscar,criterio)" class="form-control frm-control-sm" placeholder="buscar por fecha">
                                                <button type="submit" @click="listarMenu(1,buscar,criterio)" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Buscar</button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Foto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="lista in arrayProductoMenu" :key="lista.id">
                                                <td v-text="lista.nombre"></td>
                                                <td v-text="lista.precio"></td>
                                                <td><img :src="`${lista.foto}`" width="100px" alt=""></td>
                                            </tr>                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </template>
                    <template v-else>
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Menu
                            
                        </div>
                        <div class="card-body">
                            <div class="form-group row border">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Fecha</label>
                                        <input type="date" v-model="fecha" class="form-control frm-control-sm" placeholder="añadir  fecha">
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
                                                    <th>Foto</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody v-if="arrayDetalle.length">
                                                    <tr v-for="(detalle,index) in arrayDetalle" :key="detalle.id">
                                                        <td v-text="detalle.nombre"></td>
                                                        <td><input type="number" v-model="detalle.precio" class="form-control"></td>
                                                        <td><img :src="`${detalle.foto}`" width="100px" alt=""></td>
                                                        <td>
                                                            <button @click="eliminarDetalle(index)" class=" btn btn-danger btn-sm">
                                                                <i class="icon-close" ></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                            <tbody v-else>
                                                <td colspan="4">No ha asignado ningun producto </td>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button  @click="guardarMenu()" class="btn btn-success">Guardar </button>
                                    <button @click="mostrarListado()" class="btn btn-secondary">Cerrar </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>




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
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarArticulo()">Modificar</button>
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
    // import VueBarcode from 'vue-barcode';
    import vSelect from 'vue-select';
    import Datepicker from 'vuejs-datepicker';
    import 'vue-select/dist/vue-select.css';
    export default {
        data (){
            return {
                id:0,
                idProducto : 0,
                producto : '',
                precio : 0,
                foto:'',
                fecha:null,

                marcar:0,

                searchProducto : 0,

                nombre_categoria : '',
                listado:1,
                codigo : '',
                
                
                arrayMenu : [],
                arrayProducto:[],
                arrayDetalle:[],
                arrayMenuDetalle:[],
                arrayProductoMenu:[],
                
                modal : 0,
                tituloModal : '',
                tipoAccion : 0,


                errorMenu : 0,
                errorMostrarMsjMenu : [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio : 'fecha',
                buscar : '',

                criterioProducto : 'producto',
                buscarProducto : '',
                arrayCategoria :[]
            }
        },
        components: {
        // 'barcode': VueBarcode
        vSelect,
        Datepicker
    },
        computed:{
            isActived: function(){
                return this.pagination.current_page;
            },
            //Calcula los elementos de la paginación
            pagesNumber: function() {
                if(!this.pagination.to) {
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset; 
                if(from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2); 
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }  

                var pagesArray = [];
                while(from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;             

            }
        },
        methods : {
            mostrarListado(){
                this.listado = 1;

            },
            ocultarListado(){
                this.listado = 0;
            },
            listarMenu (page,buscar,criterio){
                let me=this;
                var url= '/menu?page=' + page + '&buscar='+ buscar + '&criterio='+ criterio;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayMenu = respuesta.menus.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error) {
                    console.log(error);
                });
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
                                            "precio":me.precio
                            });
                            iziToast.success({
                                        title:"agregado correctamente !!"+existe
                            });
                            this.idProducto=0;
                        }
                }
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
                                "nombre": data['nombre'],
                                "foto"  : data['foto'],
                                "precio": data['precio']
                            });
                            iziToast.success({
                                        title:"agregado correctamente !!"
                            });
                            this.idProducto=0;
                        }
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
                });
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
            eliminarDetalle(index){
                let me = this;
                me.arrayDetalle.splice(index, 1);

                iziToast.error({
                    title:"Eliminado",
                    message :"Producto eliminado del detalle"
                })
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
            cambiarPagina(page,buscar,criterio){
                let me = this;
                //Actualiza la página actual
                me.pagination.current_page = page;
                //Envia la petición para visualizar la data de esa página
                me.listarMenu(page,buscar,criterio);
            },
            guardarMenu(){

                if (this.validarMenu()){
                    this.mostrarError();
                }else{
                    let me = this;
                    axios.post('/menu/guardar',{
                        'fecha'    : this.fecha,
                        'data'     : this.arrayDetalle,
                    }).then(function (response) {
                        me.cerrarModal();
                        me.listarMenu(1,'','fecha');
                        me.resetVariable();
                        me.mostrarListado()
                        iziToast.info({
                            title: 'Exito!',
                            message: 'El Menu se ha guardado con exito!',
                        });
                    }).catch(function (error) {
                        console.log(error);
                    });
                }
            },
            resetVariable(){
                this.fecha = null;
                this.arrayDetalle =[];
                this.arrayProducto=[];
                this.arrayMenuDetalle=[];
            },
            desactivarArticulo(id){
               swal({
                title: 'Esta seguro de desactivar este artículo?',
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

                    axios.put('/menu/desactivar',{
                        'id': id
                    }).then(function (response) {
                        me.listarMenu(1,'','nombre');
                        swal(
                        'Desactivado!',
                        'El registro ha sido desactivado con éxito.',
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
            activarArticulo(id){
               swal({
                title: 'Esta seguro de activar este artículo?',
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

                    axios.put('/menu/activar',{
                        'id': id
                    }).then(function (response) {
                        me.listarMenu(1,'','nombre');
                        swal(
                        'Activado!',
                        'El registro ha sido activado con éxito.',
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
            validarMenu(){
                
                this.errorMenu=0;
                this.errorMostrarMsjMenu =[];

                if (this.fecha===null) this.errorMostrarMsjMenu.push("Seleccione una fecha.");
                if (this.arrayDetalle.length<=0) this.errorMostrarMsjMenu.push("Primero ingrese productos");

                if (this.errorMostrarMsjMenu.length) this.errorMenu = 1;

                return this.errorMenu;
            },
            mostrarError(){
                for (let index = 0; index < this.errorMostrarMsjMenu.length; index++) {
                    
                    iziToast.error({
                        title:'Validacion',
                        message : this.errorMostrarMsjMenu[index],
                        position: 'center'
                    });

                }
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
            verProducto(id){

                let me=this;
                var url= '/producto/menu?id=' + id ;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayProductoMenu = respuesta.productoMenu;
                    console.log(respuesta.productoMenu);
                })
                .catch(function (error) {
                    console.log(error);
                });

                me.marcar = id;
            }
        },
        mounted() {
            this.listarMenu(1,this.buscar,this.criterio);
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
