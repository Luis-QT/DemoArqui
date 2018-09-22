$(document).ready(function() {
    $(".dataTableThesis").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
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
    });
    /* Inserta html de busqueda */
    $('.dataTableThesis').before('<div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Buscar: <input type="text" class="" placeholder="" id="txtSearchThesis" aria-controls="DataTables_Table_0"></label><button id="btnSearchThesis" class="btn btn-default btn-sm"><i class="fa fa-search"></i></button></div>');

    $('#txtSearchThesis').val($('#inputHiddenSearch').val());

    $('#txtSearchThesis').keypress(function(e){
      if(e.which==13){
        $("#btnSearchThesis").click();
      }
    });

    $("#btnSearchThesis").on('click',function(event) {
          $.ajax({
             url: 'theses/search',
             type:'post',
             data:{
                  _token : $('#token').val(),
                  search: $('#txtSearchThesis').val(),
             },
             success: function(data)
             {    
               $('.changeTable').html(data);
               console.log("HOLA MUNDO"); 
             }
          });
    });
});