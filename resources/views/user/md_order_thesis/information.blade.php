<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="row">
      <div class="col-md-12">
        <div class="white-box">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="m-b-0 m-t-0">{{ $thesis->title }}</h2>
          <hr>
          <div class="scrollInformationTesis">
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">EJEMPLARES</h3>
                  <div class="table-responsive">
                      <table class="table table-hover table-striped table-center">
                          <thead>
                            <tr>
                                <th>Numero de Ingreso</th>
                                <th>Codigo de Barras</th>
                                <th>Ejemplar</th>
                                <th>Disponibilidad</th>
                                <th>Pedir</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($thesis->thesisCopies as $thesisCopy)
                              <tr>
                                  <td>{{$thesisCopy->incomeNumber}}</td>
                                  <td>{{$thesisCopy->barcode}}</td>
                                  <td>{{$thesisCopy->copy}}</td>
                                  @if($thesisCopy->availability == 0)
                                  <td><span class="label label-danger-lqt">{{$thesisCopy->getState()}}</span></td>
                                  @elseif($thesisCopy->availability == 1)
                                  <td><span class="label label-success-lqt">{{$thesisCopy->getState()}}</span></td>
                                  @elseif($thesisCopy->availability == 2)
                                  <td><span class="label label-danger-lqt">{{$thesisCopy->getState()}}</span></td>
                                  @elseif($thesisCopy->availability == 3)
                                  <td><span class="label label-warning-lqt">{{$thesisCopy->getState()}}</span></td>
                                  @endif
                                  <td><button type="button" class="btn btn-success btn-sm btnPedirThesis" data-id="{{ $thesisCopy->id }}" @if($thesisCopy->availability !=1) disabled @endif ><i class="fa fa-hand-pointer"></i></button></td>
                              </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-12">
                  <h3 class="box-title m-t-10">INFORMACION GENERAL</h3>
                  <div class="table-responsive">
                      <table class="table">
                          <tbody>
                              <tr>
                                  <td width="200">Clasificación</td>
                                  <td> {{ $thesis->clasification }} </td>
                              </tr>
                              <tr>
                                  <td>Año de Publicación</td>
                                  <td> {{ $thesis->year }} </td>
                              </tr>
                              <tr>
                                  <td>Escuela Académica</td>
                                  <td> {{ $thesis->school->name }} </td>
                              </tr>
                              <tr>
                                  <td>Autor Principal</td>
                                  <td> {{ $thesis->authors->implode('name',' ,') }} </td>
                              </tr>
                              <tr>
                                  <td>Ubicación</td>
                                  <td> {{ $thesis->stand->name }} </td>
                              </tr>
                              <tr>
                                  <td>Asesor</td>
                                  @if($thesis->thesisSpecification->adviser!="")
                                    <td> {{ $thesis->thesisSpecification->adviser }} </td>
                                  @else
                                    <td> - </td>
                                  @endif
                              </tr>
                              <tr>
                                  <td>Extensión</td>
                                  <td> {{ $thesis->thesisSpecification->extension }} </td>
                              </tr>
                              <tr>
                                  <td>Mención</td>
                                  <td> {{ $thesis->thesisSpecification->mention }} </td>
                              </tr>
                              <tr>
                                  <td>Acompañamiento</td>
                                  <td> {{ $thesis->thesisSpecification->accompaniment }} </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
                @if($thesis->thesisSpecification->keywords!="")
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">PALABRAS CLAVE</h3>                
                  <p> {{ $thesis->thesisSpecification->keywords }} </p>
                </div>
                @endif
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">OBSERVACIONES</h3>
                  <p> {{ $thesis->thesisSpecification->observations }} </p>                
                </div>
                @if($thesis->thesisSpecification->bibliography!="")
                  <div class="col-md-12">
                    <h3 class="box-title m-t-0">BIBLIOGRAFÍA</h3>
                    <p> {{ $thesis->thesisSpecification->bibliography }} </p>
                  </div>
                @endif
              </div>
              <div class="col-md-6">
                <div class="col-md-12">
                  <h3 class="box-title m-t-10">RESUMEN</h3>
                  <p> {{ $thesis->thesisSpecification->summary }} </p>
                </div>
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">CONTENIDO</h3>
                  <p> {{ $thesis->thesisSpecification->content }} </p>
                </div>
                @if($thesis->thesisSpecification->conclusions!="")
                  <div class="col-md-12">
                    <h3 class="box-title m-t-0">CONCLUSIONES</h3>
                    <p> {{ $thesis->thesisSpecification->conclusions }} </p>
                  </div>
                @endif
                @if($thesis->thesisSpecification->recomendations!="")
                  <div class="col-md-12">
                    <h3 class="box-title m-t-0">RECOMENDACIONES</h3>
                    <p> {{ $thesis->thesisSpecification->recomendations }} </p>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.scrollInformationTesis').slimScroll({
        height: '710px'
    });
    $('.btnPedirThesis').on('click',function(){
      $id = $(this).data('id');
      
    });
    $('.btnPedirThesis').on('click',function(){
      $id = $(this).data('id');
      $.ajax({
         url: 'theses/'+$id+'/order',
         type:'post',
         data:{_token : $('#token').val(),
         },
         success: function(data)
         {
            var obj =  JSON.parse(data);
            $('.modalInformacion').modal('toggle');
            if(obj.caso == '1'){
              swal({
                  title: obj.titulo,
                  text: obj.texto,
                  type: "error",
              });
            }
            if(obj.caso == '0'){
              swal({
                  title: obj.titulo,
                  text: obj.texto,
                  type: "success",
              });
            }
         }
       });
    });
  });
</script>