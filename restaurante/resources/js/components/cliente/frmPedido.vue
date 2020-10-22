<template>
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Admin</a></li>
        </ol>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>   
                    Pedido
                </div>
                <div class="card-body">
                <div class="border">
                    <template>

                    </template>
                </div>  

                <!--    
                    <div style="display: flex; justify-content: center; align-items: center;" class="form-group row border">                       
                       <img src="https://live.pystatic.com/webassets/profile/dish-cart-2-615c1b631a87427e922810c7bee8d4bf.svg" alt="No has agregado productos"> 
                    </div>
                -->

                    <div class="form-group row border" >
                        
                    </div>
                </div>
                <div class="card-body">
           
                </div>
            </div>
        </div>




    </main>
</template>

<script>


    export default {
        data() {
            return {
            }
        },
        components:{
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
            // Calcula el montoTotal al agregar
            calcularMontoTotalAgregar: function(){
                var resultado = 0.0 ;
                for (let index = 0; index < this.ArrayDetalleAtencion.length; index++) {
                    resultado = resultado + (this.ArrayDetalleAtencion[index].precio*this.ArrayDetalleAtencion[index].cantidad);
                }
                return resultado;
            },
            calcularMontoTotalActualizar: function(){
                 var resultado = 0.0 ;
                for (let index = 0; index < this.ArrayDetalleOrdenAtencion.length; index++) {
                    resultado = resultado + (this.ArrayDetalleOrdenAtencion[index].precio*this.ArrayDetalleOrdenAtencion[index].cantidad);
                }
                return resultado;
            },
        },
        methods: {
 
        },

        mounted() {
 
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
        background-color: #ef61617a !important;
    }
    
    .div-error {
        display: flex;
        justify-content: center;
    }
    
    .text-error {
        color: rgba(213, 32, 32, 0.475) !important;
        font-weight: bold;
    }

    .card-danger{
        background-color: red ;
        color: white;
        font-size: 1rem;
    }
    .centrado{
        text-align: center;
        background-color: rgb(83, 205, 205);
        width: 100%;
    }
</style>