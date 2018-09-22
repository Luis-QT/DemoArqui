<div class="panel panel-default">
    <div class="panel-heading">LISTA DE EDITORIALES
    <a data-id="" class="btn btn-success  pull-right" href='{{url("/admin/editorials/export")}}' target="_blank" onclick="window.open(this.href, this.target, 'width=900,height=600'); return false;"><i class="fa fa-file-pdf" ></i>Exportar</a></div>
    <div class="panel-wrapper collapse in">
        <div class="white-box">
          <div class="table-responsive">
            <table id="dataTable" class="table table-hover">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Nombre</th>
                      <th>Categorias</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($editoriales as $i => $editorial)
                    <tr>
                      <td class="text-center">{{$i+1}}</td>
                      <td>{{ $editorial->name }}</td>
                      <td>@foreach($editorial->categories as $i => $categoria)
                            @if($i>0)
                              {{' , '}}
                            @endif
                            {{$categoria->name}}
                          @endforeach
                      </td>
                      <td>
                        <button type="button" data-id="{{$editorial->id}}" class="btn btn-success editar"><i class="fa fa-pencil"></i></button>
                      </td>
                      <td>
                        <a type="button" data-id="{{$editorial->id}}"  data-name="{{ $editorial->name }}" class="btn btn-danger eliminar">
                          <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>

<script type="text/javascript">
  
  $(document).ready(function() {
        $(".editar").on('click',function(event) {
          $id = $(this).data('id')
          $("#div-edit").html('<div class="box box-success box-solid"><div class="box-header with-border">'+
          '<h3 class="box-title">Editar</h3><div class="box-tools pull-right"><button type="button"'+
          ' class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div></div>'+
          '<div class="box-body"></div><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div></div>')
          $("#div-edit").load('{{ url("/admin/editorials/") }}/' + $id + '/edit/0');
        });

        $('.eliminar').click(function(){
            $name = $(this).data('name');
            $id = $(this).data('id');

            $.ajax({
                   url: '{{url("/admin/editorials/")}}/'+$id+'/canDestroy',
                   type:'post',
                   data:{_token:'{{csrf_token()}}',
                   },
                   success: function(data)
                   {
                    if(data=="true"){
                      swal({
                            title: "Estas Seguro?",
                            text: "Se eliminará la editorial "+$name+"!\n",   
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
                                  title: "Eliminado!", 
                                  text: "La editorial ha sido eliminada.",
                                  type: "success",
                                  timer: 2000,   
                                },function(){
                                   $.ajax({
                                     url: '{{url("/admin/editorials/")}}/'+$id+'/destroy',
                                     type:'post',
                                     data:{_token:'{{csrf_token()}}',
                                     },
                                     success: function(data)
                                     {
                                      if(data=="true"){
                                        console.log("eliminada"); 
                                        location.reload();
                                      }else{
                                        swal("Operación Inválida", "Esta editorial no puede ser eliminada, posee relaciones con :\n"+data, "error"); 
                                      }
                                     }
                                   });
                                });
                            } else {     
                                swal("Cancelado", "La operacion fue cancelada", "error");   
                            }
                        });
                    }else{
                      swal("Operación Inválida", "Esta editorial no puede ser eliminado, posee relaciones con :\n"+data, "error"); 
                    }
                   }
           });

            
        });

        $("#dataTable").DataTable({
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