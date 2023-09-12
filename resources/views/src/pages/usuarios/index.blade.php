@extends('layouts.app-data-table')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Usuarios</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Usuarios</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>




        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">
                          <i class="ion ion-clipboard mr-1"></i>
                          Lista de usuarios
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table-user" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Avatar</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('table-user')
        <script>
            $(function() {
                var table = $("#table-user").DataTable({
                    // Otras opciones de configuración aquí...
                    "proccesing": true,
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,

                    language: {
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "zeroRecords": "No se encontraron resultados",
                        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sSearch": "Buscar:",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "sProcessing": "Procesando...",
                    },
                    ajax : {
                        "url": "{{ route('users') }}",
                        "type": "GET",
                        "dataSrc": "data"
                    },
                    columns : [
                    {
                        "data" : "id"
                    },
                    {
                        "data" : "rol.name"
                    },
                    {
                        "data" : "avatar",
                        // "width" : "20%",
                        "render" : function(data, type, row){
                            return `
                                <li class="list-inline-item">
                                    <img width="20%" height="20%" alt="Avatar" class="table-avatar" src="${data}">
                                </li>
                            `;
                        }
                    },
                    {
                        "data": "name",
                    },
                    {
                            "targets": -1, // Apunta a la última columna
                            "width": "25%",
                            "data": null, // Usa null para que no se base en datos existentes
                            "defaultContent":
                                    `
                                        <button class="btn btn-sm btn-success editar"><i class="fas fa-pencil-alt"></i></button>
                                        <button class="btn btn-sm btn-danger eliminar"><i class="fas fa-trash"></i></button>
                                    `,
                            "orderable": false, // No se puede ordenar por esta columna
                            "searchable": false // No se puede buscar por esta columna
                        } ],
                    "initComplete": function() {
                        var buttons = [{
                                extend: 'excelHtml5',
                                text: '<i class="fas fa-file-excel"></i> ',
                                titleAttr: 'Exportar a Excel',
                                className: 'btn btn-success'
                            },
                            {
                                extend: 'pdfHtml5',
                                text: '<i class="fas fa-file-pdf"></i> ',
                                titleAttr: 'Exportar a PDF',
                                className: 'btn btn-danger'
                            },
                            {
                                extend: 'print',
                                text: '<i class="fa fa-print"></i> ',
                                titleAttr: 'Imprimir',
                                className: 'btn btn-info'
                            },
                        ];

                        new $.fn.dataTable.Buttons(table, {
                            buttons: buttons
                        });

                        table.buttons().container().appendTo('#table-user_wrapper .col-md-6:eq(0)');
                    }
                });
            });
        </script>
    @endpush
@endsection
