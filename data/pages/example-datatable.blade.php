<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>
    @include('template.dist.style-datatable')
</head>

{{-- <body class="hold-transition sidebar-mini"> --}}
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse layout-footer-fixed layout-navbar-fixed">
    <div class="wrapper">
         <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin-lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('template.navbar.admin')
        @include('template.sidebar.admin')

        <!-- Content Wrapper. Contains page content -->
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('template.components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>
    @include('template.dist.script-datatable')
    <script>
        $(function() {
            var table = $("#example1").DataTable({
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
                columns : [{
                    "data": "name",

                },
                {
                        "targets": -1, // Apunta a la última columna
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
                    // Vuelve a inicializar los botones después de que la tabla se haya cargado
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

                    table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                }
            });


        });
    </script>
    <style>
        /*estilos para la tabla*/
        table th {
            background-color: #689fcf !important;
            color: white;
        }

        table>tbody>tr>td {
            vertical-align: middle !important;
        }

        /*para alinear los botones y cuadro de busqueda*/
        .btn-group,
        .btn-group-vertical {
            position: absolute !important;
        }
    </style>
</body>

</html>
