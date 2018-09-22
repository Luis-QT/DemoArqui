<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="row">
      <div class="col-md-12">
        <div class="white-box">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="m-b-0 m-t-0">{{ $book->title }}</h2>
          <hr>
          <div class="scrollInformationBook">
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
                                <th>Lugar</th>
                                <th>Pedir</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($book->bookCopies as $bookCopy)
                              <tr>
                                  <td>{{$bookCopy->incomeNumber}}</td>
                                  <td>{{$bookCopy->barcode}}</td>
                                  <td>{{$bookCopy->copy}}</td>
                                  @if($bookCopy->availability == 0)
                                  <td><span class="label label-danger-lqt">{{$bookCopy->getState()}}</span></td>
                                  @elseif($bookCopy->availability == 1)
                                  <td><span class="label label-success-lqt">{{$bookCopy->getState()}}</span></td>
                                  @elseif($bookCopy->availability == 2)
                                  <td><span class="label label-danger-lqt">{{$bookCopy->getState()}}</span></td>
                                  @elseif($bookCopy->availability == 3)
                                  <td><span class="label label-warning-lqt">{{$bookCopy->getState()}}</span></td>
                                  @endif
                                  <td>
                                    <select class="form-control" style="max-width: 150px;border-radius: 60px;height: 30px;">
                                        <option value="0">Sala</option>
                                        @if($bookCopy->copy != 1)
                                        <option value="1">Domicilio</option>
                                        @endif
                                    </select>
                                  </td>
                                  <td><button type="button" class="btn btn-success btn-sm btnOrderBook" data-id="{{ $bookCopy->id }}" @if($bookCopy->availability !=1) disabled @endif ><i class="fa fa-hand-pointer"></i></button></td>
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
                                  <td> {{ $book->clasification }} </td>
                              </tr>
                              <tr>
                                  <td>Edición</td>
                                  <td> {{ $book->edition }} </td>
                              </tr>
                              <tr>
                                  <td>Tomo</td>
                                  @if($book->bookSpecification->tome!="")
                                  <td> {{ $book->bookSpecification->tome }} </td>
                                  @else
                                  <td> - </td>
                                  @endif
                              </tr>
                              <tr>
                                  <td>Año de Publicación</td>
                                  <td> {{ $book->year }} </td>
                              </tr>
                              <tr>
                                  <td>ISBN</td>
                                  <td> {{ $book->bookSpecification->isbn }} </td>
                              </tr>
                              <tr>
                                  <td>Autor Principal</td>
                                  <td> {{ $book->getPrincipalAuthor()->implode('name',' ,') }} </td>
                              </tr>
                              <tr>
                                  <td>Autor Secundario</td>
                                  @if($book->getSecondaryAuthor()->isNotEmpty())
                                  <td> {{ $book->getSecondaryAuthor()->implode('name',' ,') }} </td>
                                  @else
                                  <td> - </td>
                                  @endif
                              </tr>
                              <tr>
                                  <td>Extensión</td>
                                  <td> {{ $book->bookSpecification->extension }} </td>
                              </tr>
                              <tr>
                                  <td>Dimensiones</td>
                                  <td> {{ $book->bookSpecification->dimensions }} </td>
                              </tr>
                              <tr>
                                  <td>Observaciones</td>
                                  <td> {{ $book->bookSpecification->observations }} </td>
                              </tr>
                              <tr>
                                  <td>Acompañamiento</td>
                                  <td> {{ $book->bookSpecification->accompaniment }} </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
                @if($book->bookSpecification->keywords!="")
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">PALABRAS CLAVE</h3>                
                  <p> {{ $book->bookSpecification->keywords }} </p>
                </div>
                @endif
              </div>
              <div class="col-md-6">
                <div class="col-md-12">
                  <h3 class="box-title m-t-10">RESUMEN</h3>
                  <p> {{ $book->bookSpecification->summary }} </p>
                </div>
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">CONTENIDO</h3>
                  <p> {{ $book->bookSpecification->content }} </p>
                </div>
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
    $('.scrollInformationBook').slimScroll({
        height: '50em'
    });
    $('.btnOrderBook').on('click',function(){
      $id = $(this).data('id');
      var place = $(this).parent().parent().find('select').val();

      $.ajax({
         url: 'books/'+$id+'/order',
         type:'post',
         data:{_token : $('#token').val(),
               place : place,
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