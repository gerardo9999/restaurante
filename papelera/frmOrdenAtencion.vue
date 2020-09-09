<template>
            <main class="main">
            <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Escritorio</a></li>
                </ol>
                <div class="container-fluid">
                
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Orden de Atencion 
                            <!-- <button type="button" @click="ocultarListado()" class="btn btn-secondary">
                                <i class="icon-plus"></i>&nbsp;Nuevo
                            </button> -->


                            <div class="row">

                                <div class="col-5">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                     <select class="form-control col-md-3" v-model="criterio">
                                                        <option value="1">Libre</option>
                                                        <option value="2">Ocupada</option>
                                                    </select>
                                                    <input type="date" v-model="buscar"  class="form-control frm-control-sm" placeholder="buscar por fecha">
                                                    <!-- <b-form-datepicker id="example-datepicker" v-model="buscar" @keyup.enter="mostrarMesa(1,buscar,criterio)" class="mb-2"></b-form-datepicker>
                                                    {{ buscar }} -->
                                                    <button type="submit" @click="mostrarMesa(1,buscar,criterio)" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Buscar</button>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Mesa</th>
                                                    <th>Capacidad</th>
                                                    <th>Estado</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                        <tr v-for="mesa in arrayMesa" :key="mesa.id" >
                                                            <td v-text="mesa.ubicacion"></td>
                                                            <td v-text="mesa.capacidad"></td>
                                                            <td v-text="mesa.ocupado"></td>
                                                            <td>
                                                                <button type="button" @click="verProducto(mesa.id)" class="btn btn-success btn-sm">
                                                                <i class="icon-check"></i>
                                                                </button> &nbsp;
                                                                <button type="button" @click="verProducto(mesa.id)" class="btn btn-danger btn-sm">
                                                                <i class="icon-trash"></i>
                                                                </button> &nbsp;
                                                            </td>
                                                        </tr>  

                                                        <tr>
                                                            <!-- <td v-text="mesa.fecha"></td> -->
                                                            <td>
                                                                <button type="button" @click="verProducto(mesa.id)" class="btn btn-info btn-sm">
                                                                <i class="icon-eye"></i>
                                                                </button> &nbsp;
                                                                <button type="button" @click="verProducto(mesa.id)" class="btn btn-danger btn-sm">
                                                                <i class="icon-trash"></i>
                                                                </button> &nbsp;
                                                            </td>
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

                                <div class="col-7">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <h5>Productos del Menu</h5>
                                                <!-- <div class="input-group">
                                                    <select class="form-control col-md-3" v-model="criterio">
                                                    <option value="fecha">Fecha</option>
                                                    </select>
                                                    <input type="date" v-model="buscar" @keyup.enter="mostrarMesa(1,buscar,criterio)" class="form-control frm-control-sm" placeholder="buscar por fecha">
                                                    <button type="submit" @click="mostrarMesa(1,buscar,criterio)" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Buscar</button>
                                                </div> -->
                                            </div>
                                        </div>
                                        <table class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Precio</th>
                                                    <th>Foto</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="lista in arrayProductoMenu" :key="lista.id">
                                                    <td v-text="lista.nombre"></td>
                                                    <td v-text="lista.precio"></td>
                                                    <td><img :src="`${lista.foto}`" width="100px" alt=""></td>
                                                    <td>
                                                        <button type="button" class="btn btn-success btn-sm">
                                                            &nbsp;$
                                                        </button> 
                                                    </td>
                                                </tr>                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
        </main>
</template>
<script>
    // import VueBarcode from 'vue-barcode';
    import vSelect from 'vue-select';
    import 'vue-select/dist/vue-select.css';
    export default {
        data (){
            return {
                id:0,
                idProducto  : 0,
                producto    : '',
                precio      : 0,
                foto        :'',
                fecha       :null,

                modalShow:false,

                marcar:0,

                searchProducto : 0,

                nombre_categoria : '',
                listado:1,
                codigo : '',
                
                
                arrayMesa : [],
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
                criterio : 'libre',
                buscar : '',

                criterioProducto : 'producto',
                buscarProducto : '',
                arrayCategoria :[]
            }
        },
        components: {
        // 'barcode': VueBarcode
        vSelect
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

            mostrarMesa (page,buscar,criterio){
                let me=this;
                var url= '/mesa?page=' + page + '&buscar='+ buscar + '&criterio='+ criterio;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayMesa = respuesta.mesas.data;
                    me.pagination= respuesta.pagination;
                    console.log(me.arrayMesa)
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
           

           
        },
        mounted() {
            this.mostrarMesa(1,this.buscar,this.criterio);
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
