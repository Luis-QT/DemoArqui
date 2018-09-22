<div class="panel panel-verde-lqt">
    <div class="panel-heading"><i class="fa fa-list-alt"></i> PRESTAMOS
      <div class="pull-right">
        <button type="button" class="btn box-refresh" id="actualizarPrestamos"><i class="fa fa-refresh"></i></button>
        <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
      </div>
    </div>
    <div class="panel-wrapper collapse in">
        <div class="white-box p-t-10">
          <div class="box-body table-responsive">
            <table class="table table-bordered table-hover tabla-prestamos">
              <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Clasificación</th>
                    <th>Título</th>
                    <th>Ejemplar</th>
                    <th>Año</th>
                    <th>Lugar</th>
                    <th>Usuario</th>
                    <th>Personal Adm.</th>
                    <th>Fecha de Prestamo</th>
                    <th>Fecha de Devolucion</th>
                    <th>Recibir</th>
                    <th>Dar más tiempo</th>

                  </tr>
              </thead>
              <tbody>
                  @if($prestamos!=null)
                  @foreach($prestamos as $prestamo)
                    @if($prestamo->state == 1)
                    <!-- Obteniendo el usuario -->
                    <?php $cont=0; ?>
                    <tr>
                      <td>{{$prestamo->orderCopy->obtenerTipoItem()}}</td>
                      <?php
                            $copia = null ;
                            $item = null;
                            switch ($prestamo->typeItem) {
                              case 1:
                                $copia=App\BookCopy::find($prestamo->copy_id); $item = $copia->book;
                                break;
                              case 2:
                                $copia=App\ThesisCopy::find($prestamo->copy_id); $item = $copia->thesis;
                                break;
                              case 3:
                                $copia=App\MagazineCopy::find($prestamo->copy_id); $item = $copia->magazine;
                                break;
                            }
                      ?>
                      <td>{{$item->clasification}}</td>
                      <td><a href="#" class="btnItemInfo" data-toggle="modal"
                          data-target="#ModalInfoLoan" data-id="{{$copia->id}}" data-type="{{$prestamo->typeItem}}">
                          {{$item->title}}
                            @if($item->secondaryTitle==NULL || $item->secondaryTitle=="")
                            @else
                            <div style="font-size: 14px; color: #3CB1BB;">{{"(".$item->secondaryTitle.")"}}</div>
                          @endif
                        </a></td>
                      <td>{{$copia->copy}}</td>
                      <td>{{$item->year}}</td>
                      <td>{{$prestamo->obtenerLugar()}}</td>
                      <td><a href="#" class="btnUserInfo" data-toggle="modal"
                        data-target="#ModalInfoLoan" data-id="{{$prestamo->user->id}}">
                        {{$prestamo->user->name." ".$prestamo->user->lastName}}</a></td>

                      <td>{{$prestamo->loan->employee->name}}</td>
                      <td>{{$prestamo->loan->startDateLoan}}</td>
                      <td>{{$prestamo->loan->endDateLoan}}</td>
                      <td>
                        <form method="POST"  action="{{ url('/admin/prestamos/devolver') }}">
                          {{ csrf_field() }}
                          <input type="hidden" name="id" value="{{$prestamo->id}}">
                          <button type="submit" name="prestar" class="btn btn-sm btn-success"
                          @if(!$recibir) disabled @endif
                          ><span><i class="fa fa-reply"></i></span></button>
                        </form>
                      </td>
                      <td>
                        <form method="POST"  action="{{ url('/admin/prestamos/actualizar') }}">
                          {{ csrf_field() }}
                          <input type="hidden" name="id" value="{{$prestamo->id}}">
                          <button type="submit" name="prestar" class="btn btn-sm btn-success"
                          @if(!$masTiempo) disabled @endif
                          ><span><i class="fa fa-plus"></i></span></button>
                        </form>
                      </td>
                    </tr>
                    @endif
                   @endforeach
                   @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="modal fade" id="ModalInfoLoan" tabindex="-1" role="dialog">
   </div>
</div>
<script>
  $(function () {
    $(".tabla-prestamos").DataTable({
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
    });
  });
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip()
    $(".btnUserInfo").on('click',function(event){
       $i = $(this).data('id')
       $("#ModalInfoLoan").html('<div style="width: 480px;" class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header" style="background-color: #428bca;padding:16px 16px;color:#FFF;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">Cargando</h4></div><div class="modal-body"><br><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div><br></div><br></div></div>');
       $("#ModalInfoLoan").load('{{ url("/admin/prestamos/") }}/'+$i+"/informacionUsuario");
    });
    $(".btnItemInfo").on('click',function(event){
      $i = $(this).data('id');
      var type = $(this).data('type');
      $("#ModalInfoLoan").html('<div style="width: 480px;" class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header" style="background-color: #428bca;padding:16px 16px;color:#FFF;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">Cargando</h4></div><div class="modal-body"><br><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div><br></div><br></div></div>');
      switch (type) {
        case 1: $("#ModalInfoLoan").load('{{ url("/admin/prestamos/") }}/'+$i+"/informacionLibro"); break;
        case 2: $("#ModalInfoLoan").load('{{ url("/admin/prestamos/") }}/'+$i+"/informacionRevistas"); break;
        case 3: $("#ModalInfoLoan").load('{{ url("/admin/prestamos/") }}/'+$i+"/informacionTesis"); break;
        case 4: $("#ModalInfoLoan").load('{{ url("/admin/prestamos/") }}/'+$i+"/informacionCompendios"); break;
      }
    })
    $("#actualizarPrestamos").on('click',function(event){
        $("#div-prestamos").html('<div class="box box-success"><div class="box-header with-border"><h3 class="box-title">Cargando</h3><div class="box-tools pull-right"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div></div><div class="box-body"><br><br><br></div><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div></div>');
        $("#div-prestamos").load('{{ url("/admin/prestamos/actualizarPrestamos") }}');
    });
});
</script>
