<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->

    <link href="{{ asset('plugins/images/favicon.png') }}" rel="icon" type="image/png" sizes="16x16">
    <title>BiblioFisi - Administrador</title>

    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link href="{{ asset('plugins/bower_components/footable/css/footable.core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">

    <!-- animation CSS -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('css/colors/megna-dark.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <script	src="{{ URL::asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <link href="{{ asset('css/colors/megna-dark.css') }}" id="theme"  rel="stylesheet">
    <link href="{{ asset('css/estilosLuis.css') }}" rel="stylesheet">


</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        @include('admin.layouts.header')
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        @include('admin.layouts.aside')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            @yield('content')

            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; BiblioFisi </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <!-- Bootstrap Core JavaScript -->
    <!-- Sidebar menu plugin JavaScript -->
    <!--Slimscroll JavaScript For custom scroll-->
    <!--Wave Effects -->
    <!-- Custom Theme JavaScript -->

    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <!-- <script src="{{ asset('js/maskModificado.js') }}"></script> -->
    <script src="{{ asset('js/cbpFWTabs.js') }}"></script>

    <script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

    <script src="{{ asset('js/validator.js') }}"></script>

    <script src="{{ asset('plugins/bower_components/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.19/filtering/type-based/accent-neutralise.js"></script>
    <script type="text/javascript" src="{{ asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>



    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script type="text/javascript" src="{{ asset('plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>

    <!-- <script type="text/javascript" src="{{ asset('plugins/bower_components/footable/js/footable.all.min.js') }}"></script> -->
    <!--FooTable init-->
    <!-- <script type="text/javascript" src="{{ asset('js/footable-init.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('plugins/bower_components/blockUI/jquery.blockUI.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/schools.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/faculties.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/stands.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/users/validateUser.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/users/users.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bower_components/custom-select/custom-select.min.js') }}"></script>
    <!-- Script para los tabs del new users  -->
    <script type="text/javascript">
          (function () {
                  [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                  new CBPFWTabs(el);
              });
          })();
      </script>

    <script type="text/javascript">
    	$(document).ready(function(){
    		$('.dropify').dropify();
            
            //Esto causa error en users
            // $(".dataTable").DataTable({
            //     "paging": true,
            //     "lengthChange": true,
            //     "searching": true,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "stateSave": false, //Guarda el estado actual de la pagina
            //     "language" : {
            //         "sProcessing" : "Procesando...",
            //         "sLenghtMenu" : "Mostrar _MENU_ registros",
            //         "sZeroRecords" : "No se encontraron resultados",
            //         "sEmptyTable" : "Ningún dato disponible en esta tabla",
            //         "sInfo" : "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            //         "sInfoEmpty" : "Mostrando registros del 0 al 0 de un total de 0 registros",
            //         "sInfoFiltered" : "(filtrado de un total de _MAX_ registros",
            //         "sInfoPosFix" : "",
            //         "sSearch" : "Buscar: ",
            //         "sUrl" : "" ,
            //         "sInfoThousands": ",",
            //         "sLoadingRecords" : "Cargando...",
            //         "oPaginate": {
            //             "sFirst" : "Primero",
            //             "sLast" : "Último",
            //             "sNext" : "Siguiente" ,
            //             "sPrevious" : "Anterior"
            //         },
            //         "oAria" : {
            //             "sSortAscending" : ": Actibar para ordenar la columna de manera ascendente",
            //             "sSordtDescending" : ": Activar para ordenar la columna de manera descendente"
            //         },
            //         "lengthMenu" : "Mostrar _MENU_ registros por pagina",
            //         "zeroRecords": "No se encontraron registros",
            //         "info" : "Página _PAGE_ de _PAGES_",
            //         "infoEmpty" : "No hay registros"
            //     },
            // });

            $(".select2").select2();
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function() {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function() {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function() {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function() {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
        });
    </script>
    <!-- Esto tiene que ir al ultimo -->
    <script type="text/javascript">
        $('.export').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "stateSave": false, //Guarda el estado actual de la pagina
          "language" : {
              "sProcessing" : "Procesando...",
              "sLenghtMenu" : "Mostrar _MENU_ registros",
              "sZeroRecords" : "No se encontraron resultados",
              "sEmptyTable" : "Ningún dato disponible en esta tabla",
              "sInfo" : "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty" : "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered" : "(filtrado de un total de _MAX_ registros",
              "sInfoPosFix" : "",
              "sSearch" : "Buscar: ",
              "sUrl" : "" ,
              "sInfoThousands": ",",
              "sLoadingRecords" : "Cargando...",
              "oPaginate": {
                  "sFirst" : "Primero",
                  "sLast" : "Último",
                  "sNext" : "Siguiente" ,
                  "sPrevious" : "Anterior"
              },
              "oAria" : {
                  "sSortAscending" : ": Actibar para ordenar la columna de manera ascendente",
                  "sSordtDescending" : ": Activar para ordenar la columna de manera descendente"
              },
              "lengthMenu" : "Mostrar _MENU_ registros por pagina",
              "zeroRecords": "No se encontraron registros",
              "info" : "Página _PAGE_ de _PAGES_",
              "infoEmpty" : "No hay registros"
          },
            dom: 'Bfrtip'
            , buttons: [
            'pdf']

        });
    </script>

    <script type="text/javascript" src="{{ asset('js/admin/thesis/thesis.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/thesis/search.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/config_account.js') }}"></script>
</body>

</html>
