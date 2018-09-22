
<div class="modal-dialog row" style="width: 50%">
    <div class="modal-content row">
        <div class="col-md-12 modal-body" style="padding:30px;">
            <section class="row">
              <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#castigosActuales" aria-controls="castigosActuales" role="tab" data-toggle="tab">Castigos Actuales</a></li>
                  <li role="presentation"><a href="#historial" aria-controls="historial" role="tab" data-toggle="tab">Historial</a></li>
                  <li role="presentation" class="pull-right"><a href="#" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></li>
                  <li role="presentation" class="pull-right"><a href='{{url("/admin/punishments/export/".$user->id)}}' aria-controls="exportar" role="tab" target="_blank" onclick="window.open(this.href, this.target, 'width=900,height=600'); return false;">Exportar</a></li>
                </ul>

                <div class="tab-content" style="margin-top: 10px;">
                <div role="tabpanel" class="tab-pane active" id="castigosActuales" style="max-height: 380px; overflow-y: auto;">
                  <h1 style="margin-left: 4px; margin-bottom: 0px;">{{$ciclos->first()->name}}</h1>
                  <table class="table table-striped table-bordered">
                    <caption style="margin-left: 5px;">Castigos Actuales del Usuario</caption>
                    <thead> 
                          <tr class="active">
                              <th>Orden</th>
                              <th>Tipo</th>
                              <th>Fecha Inicial</th>
                              <th>Fecha Final</th>
                              <th>Item</th>
                              <th>D/E</th>
                          </tr>
                      </thead>
                      <tbody>
                        @if($listaCastigos!=null && $listaCastigos[0][0]->loan->order->cycle->id == count($ciclos))
                          @foreach($listaCastigos[0] as $castigo)
                            <tr class=" @if($castigo->state==0) danger @else active @endif ">
                              <td>{{$castigo->orderTime_id}}</td>
                              <td>Bloqueo @if($castigo->state==0) Activado @else Desactivado @endif</td>
                              <td>{{$castigo->loan->endDateLoan}}</td>
                              <td>@if($castigo->loan->devolutionDate!=null){{$castigo->loan->devolutionDate}}
                                @else No termina @endif</td>
                              <td>{{$castigo->loan->order->orderCopy->dameClasificacion()}}</td>
                              <td>
                                <button type="button" class="btn btn-sm btn-warning btn-desactivar"  @if($castigo->state!=0) disabled @endif data-id="{{$castigo->id}}"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span></button>
                                <button type="button" class="btn btn-sm btn-danger btn-eliminar"  @if($castigo->state!=0) disabled @endif data-id="{{$castigo->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                              </td>
                            </tr>
                            @if($castigo->state!=0)
                              <tr class=" @if($castigo->state==1) danger @else active @endif ">
                                <td>{{$castigo->orderTime_id}}</td>
                                <td>@if($castigo->state==1)Activado @else Desactivado @endif</td>
                                <td>{{$castigo->loan->devolutionDate}}</td>
                                <td>{{$castigo->endDatePunishment}}</td>
                                <td>{{$castigo->loan->order->orderCopy->dameClasificacion()}}</td>
                                <td>
                                  <button type="button" class="btn btn-sm btn-warning btn-desactivar" data-id="{{$castigo->id}}"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span></button>
                                  <button type="button" class="btn btn-sm btn-danger btn-eliminar" data-id="{{$castigo->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                </td>
                              </tr>
                            @endif
                          @endforeach
                        @endif
                      </tbody>
                  </table>
                  @if($listaCastigos==null || $listaCastigos[0][0]->loan->order->cycle->id != count($ciclos) )
                    <p style="text-align: center; font-size: 16px;">No presenta castigos</p>
                  @endif
                </div>

                  <div role="tabpanel" class="tab-pane" id="historial" style="max-height: 380px; overflow-y: auto;">
                    @if($listaCastigos!=null)
                    @foreach($listaCastigos as $castigos)
                      <h1 style="margin-left: 4px; margin-bottom: 0px;">{{$castigos[0]->loan->order->cycle->name}}</h1>
                      <table class="table table-striped table-bordered">
                        <caption style="margin-left: 5px;">Castigos del {{$castigos[0]->loan->order->cycle->name}}</caption>
                        <thead> 
                              <tr class="active">
                                  <th>Orden</th>
                                  <th>Tipo</th>
                                  <th>Fecha Inicial</th>
                                  <th>Fecha Final</th>
                                  <th>Item</th>
                                  <th>D/E</th>
                              </tr>
                          </thead>
                          <tbody>
                            @if($castigos!=null)
                            @foreach($castigos as $castigo)
                              <tr class=" @if($castigo->state==0) danger @else active @endif ">
                                <td>{{$castigo->orderTime_id}}</td>
                                <td>Bloqueo @if($castigo->state==0) Activado @else Desactivado @endif</td>
                                <td>{{$castigo->loan->endDateLoan}}</td>
                                <td>@if($castigo->loan->devolutionDate!=null){{$castigo->loan->devolutionDate}}
                                  @else No termina @endif</td>
                                <td>{{$castigo->loan->order->orderCopy->dameClasificacion()}}</td>
                                <td>
                                  <button type="button" class="btn btn-sm btn-warning btn-desactivar"  @if($castigo->state!=0) disabled @endif data-id="{{$castigo->id}}"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span></button>
                                  <button type="button" class="btn btn-sm btn-danger btn-eliminar"  @if($castigo->state!=0) disabled @endif data-id="{{$castigo->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                </td>
                              </tr>
                              @if($castigo->state!=0)
                                <tr class=" @if($castigo->state==1) danger @else active @endif ">
                                  <td>{{$castigo->orderTime_id}}</td>
                                  <td>@if($castigo->state==1)Activado @else Desactivado @endif</td>
                                  <td>{{$castigo->loan->devolutionDate}}</td>
                                  <td>{{$castigo->endDatePunishment}}</td>
                                  <td>{{$castigo->loan->order->orderCopy->dameClasificacion()}}</td>
                                  <td>
                                    <button type="button" class="btn btn-sm btn-warning btn-desactivar" data-id="{{$castigo->id}}"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span></button>
                                    <button type="button" class="btn btn-sm btn-danger btn-eliminar" data-id="{{$castigo->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                  </td>
                                </tr>
                              @endif
                            @endforeach
                            @endif
                          </tbody>
                      </table> 
                    @endforeach
                    @else
                      <p style="text-align: center; font-size: 19px;">Historial limpio de castigos</p>
                    @endif
                  </div>
              </div>
              <footer style="text-align: center;">
                <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Aceptar</button>
              </footer>
            </section>
        </div>
    </div>
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

<script type="text/javascript">
  $(document).ready(function(){

    $(".btn-desactivar").on('click',function(event){
      $id=$(this).data('id');
      swal({
              title: "Desactivar Castigo",
              text: "¿Esta seguro de querer desactivar este castigo? \n",   
              type: "warning",   
              showCancelButton: true,   
              confirmButtonColor: "#DD6B55",   
              confirmButtonText: "Si , desactivar !", 
              cancelButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false  
          }, function(isConfirm){ 
            if (isConfirm){
              $.ajax({
                 url: '{{url("/admin/punishments/deactivate")}}/'+$id,
                 type:'post',
                 data:{_token:'{{csrf_token()}}',
                 },
                 success: function(data)
                 {
                  if(data=="true"){
                    swal({
                            title: "Proceso Exitoso", 
                            text: "Ha sido desactivado el castigo.",
                            type: "success"},function(){location.reload();});
                  }else{
                    swal("Operación Inválida", data, "error"); 
                  }
                 }
               });
            }else {     
                swal("Cancelado", "La operación fue cancelada", "error");   
            }
          });
    });


    $(".btn-eliminar").on('click',function(event){
      $id=$(this).data('id');
      swal({
              title: "Eliminar Castigo",
              text: "¿Esta seguro de querer eliminar este castigo? \n",   
              type: "warning",   
              showCancelButton: true,   
              confirmButtonColor: "#DD6B55",   
              confirmButtonText: "Si , eliminar !", 
              cancelButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false  
          }, function(isConfirm){ 
            if (isConfirm){
              $.ajax({
                 url: '{{url("/admin/punishments/delete")}}/'+$id,
                 type:'post',
                 data:{_token:'{{csrf_token()}}',
                 },
                 success: function(data)
                 {
                  if(data=="true"){
                    swal({
                            title: "Proceso Exitoso", 
                            text: "Ha sido eliminado el castigo.",
                            type: "success"},function(){location.reload();});
                  }else{
                    swal("Operación Inválida", data, "error"); 
                  }
                 }
               });
            }else {     
                swal("Cancelado", "La operación fue cancelada", "error");   
            }
          });
    });

  });
</script>