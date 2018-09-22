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
              <div class="col-md-6">
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">INFORMACION GENERAL</h3>
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
                                  <td>{{ $thesis->authors->implode('name',', ') }}</td>
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
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">RESUMEN</h3>
                  <p> {{ $thesis->thesisSpecification->summary }} </p>
                </div>
                @if($thesis->thesisSpecification->recomendations!="")
                  <div class="col-md-12">
                    <h3 class="box-title m-t-0">CONCLUSIONES</h3>
                    <p> {{ $thesis->thesisSpecification->conclusions }} </p>
                  </div>
                @endif
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">OBSERVACIONES</h3>
                  <p> {{ $thesis->thesisSpecification->observations }} </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">EJEMPLARES</h3>
                  <div class="table-responsive">
                      <table class="table table-hover">
                          <thead>
                            <tr>
                                <th>Numero de Ingreso</th>
                                <th>Codigo de Barras</th>
                                <th>Ejemplar</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($thesis->thesisCopies as $thesisCopy)
                              <tr>
                                  <td>{{$thesisCopy->incomeNumber}}</td>
                                  <td>{{$thesisCopy->barcode}}</td>
                                  <td>{{$thesisCopy->copy}}</td>
                              </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>
                </div>
                <div class="col-md-12">
                  <h3 class="box-title m-t-0">CONTENIDO</h3>
                  <p> {{ $thesis->thesisSpecification->content }} </p>
                </div>

                @if($thesis->thesisSpecification->recomendations!="")
                  <div class="col-md-12">
                    <h3 class="box-title m-t-0">RECOMENDACIONES</h3>
                    <p> {{ $thesis->thesisSpecification->recomendations }} </p>
                  </div>
                @endif
                @if($thesis->thesisSpecification->keywords!="")
                  <div class="col-md-12">
                    <h3 class="box-title m-t-0">PALABRAS CLAVE</h3>
                    <p> {{ $thesis->thesisSpecification->keywords }} </p>
                  </div>
                @endif
                @if($thesis->thesisSpecification->bibliography!="")
                  <div class="col-md-12">
                    <h3 class="box-title m-t-0">BIBLIOGRAFÍA</h3>
                    <p> {{ $thesis->thesisSpecification->bibliography }} </p>
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
  });
</script>
