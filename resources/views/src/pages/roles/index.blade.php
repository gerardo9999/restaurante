@extends('template.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <button id="btnAgregar">Agregar</button>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('rol-component')
        <script>
            $(function () {
                var table = $(document).ready(function () {
                    $("#example1").DataTable({
                        "responsive": true,
                        "lengthChange": false,
                        "autoWidth": false,
                        "buttons": [
                            "copy",
                            "csv",
                            "excel",
                            "pdf",
                            "print",
                            "colvis"
                        ],
                        "ajax": {
                            "url": "{{ route('rol') }}", // URL de la API o el servidor que devuelve los datos
                            "dataSrc": "data" // Nombre de la propiedad que contiene los datos en la respuesta JSON
                        },
                        "columns": [
                            { "data": "id", "title": "ID" },
                            { "data": "name", "title": "Nombre" }
                        ],
                        "language": {
                            "sProcessing": "Procesando...",
                            "sLengthMenu": "Mostrar _MENU_ registros",
                            "sZeroRecords": "No se encontraron resultados",
                            "sEmptyTable": "Ningún dato disponible en esta tabla",
                            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                            "sInfoPostFix": "",
                            "sSearch": "Buscar:",
                            "sUrl": "",
                            "sInfoThousands": ",",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast": "Último",
                                "sNext": "Siguiente",
                                "sPrevious": "Anterior"
                            },
                            "oAria": {
                                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                            }
                        }
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                });


                $("#btnAgregar").on("click", function () {
                    var nuevoRol = {
                        id: 999, // ID del nuevo rol
                        name: "Nuevo Rol" // Nombre del nuevo rol
                    };

                    table.ajax.json().data.push(nuevoRol);

                    // Redibujar la tabla
                    table.clear().rows.add(table.ajax.json().data).draw();
                });


                // $("#example1").DataTable({
                //     "responsive": true, "lengthChange": false, "autoWidth": false,
                //     "buttons": [
                //         "copy",
                //         "csv",
                //         "excel",
                //         "pdf",
                //         "print",
                //         "colvis"
                //     ],
                //     language: {
                //     "sProcessing": "Procesando...",
                //     "sLengthMenu": "Mostrar _MENU_ registros",
                //     "sZeroRecords": "No se encontraron resultados",
                //     "sEmptyTable": "Ningún dato disponible en esta tabla",
                //     "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                //     "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                //     "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                //     "sInfoPostFix": "",
                //     "sSearch": "Buscar:",
                //     "sUrl": "",
                //     "sInfoThousands": ",",
                //     "sLoadingRecords": "Cargando...",
                //     "oPaginate": {
                //         "sFirst": "Primero",
                //         "sLast": "Último",
                //         "sNext": "Siguiente",
                //         "sPrevious": "Anterior"
                //     },
                //     "oAria": {
                //         "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                //         "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                //     }
                // }
                // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        </script>
    @endpush
@endsection

