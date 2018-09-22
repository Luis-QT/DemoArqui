<div class="panel panel-celeste-lqt">
    <div class="panel-heading"><i class="fa fa-list-alt"></i> PEDIDOS
      <div class="pull-right">
        <button type="button" class="btn box-refresh" id="actualizarPedidos"><i class="fa fa-refresh"></i></button>
        <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
      </div>
    </div>
    <div class="panel-wrapper collapse in">
        <div class="white-box p-t-10">
          <div class="table-responsive">
            <table class="table table-bordered table-hover tabla-pedidos">
               <thead>
                <tr> 
                    <th>Tipo</th>
                    <th>Clasificación</th>
                    <th>Título</th>
                    <th>Ejemplar</th>
                    <th>Año</th>
                    <th>Lugar</th>
                    <th>Usuario</th>
                    <th>Stand</th>
                    <th>Prestar</th>
                    <th>Rechazar</th>
                </tr>
              </thead>
               <tbody>
                 @if($pedidos!=null)

              @foreach($pedidos as $i => $pedido)
                <tr>
                  <td>{{$pedido->orderCopy->obtenerTipoItem()}}</td>
                  <?php
                        $copia = null ;
                        $item = null;

                        switch ($pedido->orderCopy->materialType) {
                          case 1: $copia=App\BookCopy::find($pedido->orderCopy->copy_id);$item = $copia->book;break;
                          case 2: $copia=App\ThesisCopy::find($pedido->orderCopy->copy_id);$item = $copia->thesis;break;
                          case 3: $copia=App\MagazineCopy::find($pedido->orderCopy->copy_id);$item = $copia->magazine;break;
                          //case 3:$item=App\Magazine::find($pedido->id_item);
                          //case 4:$item=App\Compendium::find($pedido->id_item);
                        }
                  ?>
                  <td>{{$item->clasification}}</td>
                  <td><a href="#" class="btnItemInfo" data-toggle="modal"
                    data-target="#ModalInfoOrder" data-id="{{$copia->id}}" data-type="{{$pedido->orderCopy->materialType}}">
                    {{$item->title}}
                    @if($item->secondaryTitle==NULL || $item->secondaryTitle=="")
                    @else
                    <div style="font-size: 14px; color: #3CB1BB;">{{"(".$item->secondaryTitle.")"}}</div>
                    @endif
                  </a></td>
                  <td>{{$copia->copy}}</td>
                  <td>{{$item->year}}</td>
                  <td>{{$pedido->obtenerLugar()}}</td>

                  <td><a href="#" class="btnUserInfo" data-toggle="modal"
                  data-target="#ModalInfoOrder" data-id="{{$pedido->user->id}}">
                  {{$pedido->user->name." ".$pedido->user->lastName}}</a></td>
                  @if($pedido->orderCopy->materialType==1)
                  <td>{{ $copia->stand->name }}</td>
                  @elseif($pedido->orderCopy->materialType==2)
                  <td>{{ $item->stand->name }}</td>
                  @elseif($pedido->orderCopy->materialType==3)
                  <td>{{ $item->stand->name }}</td>
                  @endif
                <td>
                  <button type="button" class="btn btn-info btn-sm btnPrestar"  data-id="{{$i}}"
                  @if(!$prestar) disabled @endif
                  ><span><i class="fa fa-share"></i></span></button>
                  <form id="accept-form{{$i}}" action="{{ url('/admin/prestamos/prestar') }}" method="POST" >
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$pedido->id}}">
                  </form>
                </td>
                <td>
                  <button type="button" class="btn btn-danger btn-sm btnRechazar" data-id="{{$i}}"
                  @if(!$rechazar) disabled @endif
                  ><span><i class="fa fa-remove"></i></span></button>
                  <form id="denied-form{{$i}}" action="{{ url('/admin/prestamos/rechazar') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$pedido->id}}">
                  </form>
                </td>
              </tr>
              @endforeach
              @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="modal fade" id="ModalInfoOrder" tabindex="-1" role="dialog">
    </div>
</div>

<script>
  $(function () {
    $(".tabla-pedidos").DataTable({
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
$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip()
    $(".btnPrestar").on('click',function(event){
        event.preventDefault();
        $i = $(this).data('id');
        $('#accept-form'+$i).submit();
    });
    $(".btnRechazar").on('click',function(event){
       event.preventDefault();
       $i = $(this).data('id');
       $('#denied-form'+$i).submit();
    });
    $(".btnUserInfo").on('click',function(event){
       $i = $(this).data('id')
       $("#ModalInfoOrder").html('<div style="width: 480px;" class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header" style="background-color: #428bca;padding:16px 16px;color:#FFF;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">Cargando</h4></div><div class="modal-body"><br><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div><br></div><br></div></div>');
       $("#ModalInfoOrder").load('{{ url("/admin/prestamos/") }}/'+$i+"/informacionUsuario");
    });
    $(".btnItemInfo").on('click',function(event){
      $i = $(this).data('id');
      var type = $(this).data('type');
      $("#ModalInfoOrder").html('<div style="width: 480px;" class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header" style="background-color: #428bca;padding:16px 16px;color:#FFF;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">Cargando</h4></div><div class="modal-body"><br><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div><br></div><br></div></div>');
      switch (type) {
        case 1: $("#ModalInfoOrder").load('{{ url("/admin/prestamos/") }}/'+$i+"/informacionLibro"); break;
        case 2: $("#ModalInfoOrder").load('{{ url("/admin/prestamos/") }}/'+$i+"/informacionTesis"); break;
        case 3: $("#ModalInfoOrder").load('{{ url("/admin/prestamos/") }}/'+$i+"/informacionRevistas"); break;
      }
    })
    $("#actualizarPedidos").on('click',function(event){
        $("#div-pedidos").html('<div class="box box-warning"><div class="box-header with-border"><h3 class="box-title">Cargando</h3><div class="box-tools pull-right"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div></div><div class="box-body"><br><br><br></div><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div></div>');
        $("#div-pedidos").load('{{ url("/admin/prestamos/actualizarPedidos") }}');
    });
});
</script>
