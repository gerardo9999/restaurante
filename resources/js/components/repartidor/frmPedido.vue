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
                    <i class="fa fa-align-justify"></i> Pedido
                   
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control col-md-3" v-model="criterio">
                                <option value="cliente">Cliente</option>
                              
                                </select>
                                <input type="text" v-model="buscar" @keyup.enter="listarPedido(1, buscar, criterio)" class="form-control" placeholder="Texto a buscar">
                                <button type="submit" @click="listarPedido(1, buscar, criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th> Cliente</th>
                                <th>Hora Entrega</th>
                                <th>Ubicacion</th>
                                <th>Monto Total</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="pedido in ArrayPedido" :key="pedido.id">
                                <td v-text="pedido.fecha"></td>
                                <td v-text="pedido.cliente"></td>
                                <td v-text="pedido.horaEntrega"></td>
                                <td v-text="pedido.ubicacion"></td>
                                <td v-text="pedido.montoTotal"></td>
                                  <template v-if="pedido.estado==1">
                                    <td><span class="badge badge-success">entregado</span></td>
                                </template>
                                <template v-else>
                                    <td class="text-center"><span class="badge badge-danger">pendiente</span></td>
                                </template>
                                  <td v-text="pedido.Opciones"></td>
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
        </div>
    </main>
</template>

<script>
    export default {

        data() {
            return {
                ArrayPedido : [],
                idPedido : 0,

                pagination: {
                    'total': 0,
                    'current_page': 0,
                    'per_page': 0,
                    'last_page': 0,
                    'from': 0,
                    'to': 0,
                },
                offset: 3,
                criterio: 'cliente',
                buscar: ''
            }
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
            listarPedido(page,buscar,criterio){
                let me = this;

                var url ='/pedido?page=' + page + '&buscar=' + buscar + '&criterio=' + criterio;

                axios.get(url).then((response) => {
                    var respuesta    = response.data;
                    me.ArrayPedido = respuesta.pedido.data
                    me.pagination    =  respuesta.pagination;
                }).catch((value) => {
                    console.log(value);
                });
            },
            cambiarPagina(page, buscar, criterio) {
                let me = this;
                me.pagination.current_page = page;
                me.listarPedido(page, buscar, criterio);
            },
        },
        mounted() {
            this.listarPedido(1,this.buscar,this.criterio);
        },
    }
</script>