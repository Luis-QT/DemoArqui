<div class="panel panel-celeste-lqt">
    <div class="panel-heading"><i class="fa fa-list-alt"></i> LISTA DE REVISTAS
      <div class="pull-right">
        <button type="button" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-default" id="btnModal"><i class="fa fa-plus"><span> Agregar</span></i></button>
        <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> 
      </div>
    </div>
    <div class="panel-wrapper collapse in">
        <div class="white-box">
          <div class="table-responsive changeTable">
            <input type="hidden" value="{{ $search }}" id="inputHiddenSearch">
            <table class="table table-hover dataTableThesis">
              <thead>
                  <tr>
                      <th class="text-center">Título</th>
                      <th class="text-center">Volumen</th>
                      <th class="text-center">N° de Revista</th>
                      <th class="text-center">N° de Copias</th>
                      <th class="text-center">Stand</th>
                      <th class="text-center">Editar</th>
                      <th class="text-center">Eliminar</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($revistas as $revista)
                    <tr>
                      <td class="text-center"><a href="" class="verRevista" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="{{$revista->id}}">{{$revista->title}}</a></td>
                      <td class="text-center">{{$revista->volume }}</td>
                      <td class="text-center">{{$revista->number}}</td>
                      <td class="text-center">{{$revista->numberOfCopies}}</td>
                      <td class="text-center">{{$revista->stand->name}}</td>
                      <td class="text-center">
                        <button type="button" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="{{$revista->id}}" class="btn btn-success btnEditar"><i class="fa fa-pencil"></i></button>
                      </td>
                      <td class="text-center">
                        <button type="button" data-id="{{$revista->id}}" class="btn btn-danger btnEliminar"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="modal">
            
          <!-- /.modal-content -->
        </div>
        
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script type="text/javascript">
  $(document).ready(function() {

    $("#btnModal").on('click',function(event){
      $("#modal").load("{{ url('admin/magazines/modalNew/0') }}");
    });
    $(".btnEditar").on('click',function(event){
      $("#modal").load("{{ url('admin/magazines/modalNew/') }}/"+$(this).data('id') );
    });

    $('.btnEliminar').click(function(){
      $id=$(this).data('id');
      swal({
              title: "Eliminar Revista",
              text: "¿Esta seguro de querer eliminar esta revista? \n",   
              type: "warning",   
              showCancelButton: true,   
              confirmButtonColor: "#DD6B55",   
              confirmButtonText: "Si , eliminar !", 
              cancelButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false  
          }, function(isConfirm){   
              if (isConfirm) {     
                  swal({
                    title: "Eliminada!", 
                    text: "La revista ha sido eliminada.",
                    type: "success",
                    timer: 2000,   
                  },function(){
                     $.ajax({
                       url: '{{url("/admin/magazines/")}}/'+$id+'/destroy',
                       type:'post',
                       data:{_token:'{{csrf_token()}}',
                       },
                       success: function(data)
                       {
                        if(data=="true"){
                          console.log("eliminado"); 
                          location.reload();
                        }else{
                          swal("Operación Inválida", "Esta revista no puede ser eliminada, debido a que tiene un préstamo actual con el usuario :\n"+data, "error"); 
                        }
                       }
                     });
                  });
              } else {     
                  swal("Cancelado", "La operacion fue cancelada", "error");   
              }
          });
    });

    $(".verRevista").on('click',function(event){
      $("#modal").load("{{ url('admin/magazines/modalSee/') }}/"+$(this).data('id') );
    });


  });
</script>
