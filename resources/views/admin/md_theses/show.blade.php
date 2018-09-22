<div class="panel panel-celeste-lqt">
    <div class="panel-heading"><i class="fa fa-list-alt"></i> LISTA DE TESIS E INFORMES
      <div class="pull-right">
        <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
      </div>
    </div>
    <div class="panel-wrapper collapse in">
        <div class="white-box p-t-10">
          <div class="clearfix m-t-0 m-b-10">
            <div class="pull-left">
              <a type="button" target="_blank" href="{{ url('/admin/theses/viewPDF') }}" class="btn btn-default"><i class="fa fa-eye"></i> Vista PDF</a>
              <a type="button" href="{{ url('/admin/theses/exportPDF') }}" class="btn btn-default"><i class="fa fa-file-pdf"></i> PDF</a>
              <a type="button" href="{{ url('/admin/theses/exportExcel') }}" class="btn btn-default"><i class="fas fa-file-excel"></i> EXCEL</a>
            </div>
            <div class="pull-right">
              <button data-toggle="modal" data-target=".modalAgregar" class="btn btn-primary openModalAddThesis"><i class="fa fa-plus"></i> Agregar</button>
            </div>
          </div>

          <div class="table-responsive changeTable">
            <input type="hidden" value="{{ $search }}" id="inputHiddenSearch">
            <table class="table table-hover dataTableThesis">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Clasificación</th>
                      <th>Título</th>
                      <th>Tipo</th>
                      <th>Autor</th>
                      <th>Stand</th>
                      <th>Año</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($theses as $i => $thesis)
                    <tr data-id="{{$thesis->id}}">
                      <td class="text-center">{{$i+1}}</td>
                      <td>{{ $thesis->clasification }}</td>
                      <td><a href="#" class="btnInformationThesis" data-info="0" data-toggle="modal" data-target=".modalInformacion">{{ $thesis->title }}</a></td>
                      <td>{{ $thesis->typeToString() }}</td>
                      <td>{{ $thesis->authors->implode('name',', ') }}</td>
                      <td>{{ $thesis->stand->name }}</td>
                      <td>{{ $thesis->year }}</td>
                      <td>
                        <button type="button" class="btn btn-verde-lqt openModalEditThesis" data-toggle="modal" data-target=".modalAgregar"><i class="fa fa-pencil"></i></button>
                      </td>
                      <td>
                        <button type="button" class="btn btn-danger btnEliminarTesis"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>


<div class="modal fade bs-example-modal-lg modalAgregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="panel panel-default">
              <div class="panel-heading"><div id="tituloModalAgregar"><i class="fa fa-plus"></i> AGREGAR TESIS E INFORME
                <div class="pull-right">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
               </div>
              </div>
              <div class="panel-wrapper collapse in">
                  <div class="panel-body">
                    <div class="sttabs tabs-style-bar sttabs-tesis">
                        <nav>
                            <ul>
                                <li class="active tab-current"><a href="#" data-tab="tab-1" role="tab" data-toggle="tab" aria-expanded="true" class="sticon ti-pencil-alt"><span> Paso 1</span></a></li>

                                <li><a href="#" data-tab="tab-2" role="tab" data-toggle="tab" aria-expanded="true" class="sticon ti-files"><span> Paso 2</span></a></li>

                                <li><a href="#" data-tab="tab-3" role="tab" data-toggle="tab" aria-expanded="true" class="sticon ti-check-box .not-active" id="btnCrearTesis" data-id='0' style="color: #686868;"><span id="tituloPorcentajeAgregar"> Crear </span><span id="porcentaje">( 0% )</span></a></li>

                            </ul>
                        </nav>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                              <div class="scrollAddTesis">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="well">
                                      <div class="row">
                                        <div class="row row-form">
                                          <div class="col-lg-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Título *</label>
                                              <input type="text" class="form-control" data-toggle="validator-lqt" placeholder="Título" id="inputTitle"><div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row row-form">
                                          <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Clasificación *</label>
                                              <input type="text" class="form-control" maxlength="12" data-max="20" data-toggle="validator-lqt" placeholder="Clasificación" id="inputClasification" data-id="0"><div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Tipo de Material *</label>
                                              <select class="select2 form-control" id="inputType" data-toggle="validator-lqt">
                                                <option value="0">Sin Seleccionar</option>
                                                <option value="1">Tesis</option>
                                                <option value="2">Informe</option>
                                              </select>
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row row-form">
                                          <div class="col-lg-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Autor Principal *</label>
                                              <select class="select2 select2-multiple" multiple="multiple" id="inputPrincipalAuthor" data-toggle="validator-lqt">
                                                @foreach($authors as $author)
                                                  <option value="{{ $author->id }}">{{ $author->name }}</option>
                                                @endforeach
                                              </select>
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row row-form">
                                          <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Asesor</label>
                                              <input type="text" maxlength="35" data-max="35" class="form-control" placeholder="Asesor" data-key="2" id="inputAdviser"><div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Escuela Académica *</label>
                                              <select class="select2 form-control" id="inputSchool" data-toggle="validator-lqt">
                                                <option value="0">Sin Seleccionar</option>
                                                @foreach($schools as $school)
                                                  <option value="{{ $school->id }}">{{ $school->name }}</option>
                                                @endforeach
                                              </select>
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row row-form">
                                          <div class="col-lg-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Mención *</label>
                                              <input type="text" data-key="2" class="form-control" placeholder="Mención" id="inputMention" maxlength="35" data-max="35" data-toggle="validator-lqt">
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row row-form">
                                          <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Año de Sustentación *</label>
                                              <input type="text" class="form-control" placeholder="Año de Sustentación" id="inputYear" data-key="1" data-mask="9999" data-toggle="validator-lqt">
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Acompañamiento *</label>
                                              <input type="text" class="form-control" placeholder="Acompañamiento" id="inputAcompaniment" maxlength="35" data-max="35" data-toggle="validator-lqt">
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row row-form">
                                          <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Extensión *</label>
                                              <input type="text" class="form-control" placeholder="Extensión" id="inputExtension" maxlength="4" data-max="4" data-key="1" data-toggle="validator-lqt">
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                              <label class="control-label">Ubicación *</label>
                                              <select class="select2 form-control" id="inputStand" data-toggle="validator-lqt">
                                                <option value="0">Sin Seleccionar</option>
                                                @foreach($stands as $stand)
                                                  <option value="{{ $stand->id }}">{{ $stand->name }}</option>
                                                @endforeach
                                              </select>
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="well">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="control-label">Resumen *</label>
                                            <textarea rows="7" class="form-control" id="inputSummary" data-toggle="validator-lqt"></textarea>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="control-label">Contenido *</label>
                                            <textarea rows="7" class="form-control" id="inputContent" data-toggle="validator-lqt"></textarea>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="control-label">Recomendaciones</label>
                                            <textarea rows="7" class="form-control" id="inputRecomendations"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                              <div class="scrollAddTesis">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="well">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="control-label">Conclusiones</label>
                                            <textarea rows="4" class="form-control" id="inputConclusions"></textarea>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="control-label">Observaciones *</label>
                                            <textarea rows="4" class="form-control" id="inputObservations" data-toggle="validator-lqt"></textarea>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="control-label">Bibliografía</label>
                                            <textarea rows="4" class="form-control" id="inputBibliography"></textarea>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="control-label">Palabras Clave *</label>
                                            <textarea rows="4" class="form-control" id="inputKeywords" data-toggle="validator-lqt"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="row" id="contenedorEjemplares">
                                        <div class="col-md-12 div-ejemplar" data-id="0">
                                          <div class="panel panel-default panel-border">
                                            <div class="panel-heading">
                                                <span> Ejemplar 1</span>
                                                <div class="panel-action">
                                                  <button type="button" class="btn btn-success btn-circle" id="btnAgregarEjemplarTesis"><i class="fa fa-plus"></i> </button>
                                                  <button type="button" class="btn btn-danger btn-circle" id="btnEliminarEjemplarTesis"><i class="fa fa-times"></i> </button>
                                                </div>
                                            </div>
                                            <div class="panel-wrapper collapse in" aria-expanded="true" style="">
                                                <div class="panel-body panel-body-simple" style="padding: 10px; padding-top: 20px;">
                                                   <div class="row row-form">
                                                     <div class="col-md-6">
                                                       <div class="form-group">
                                                         <label class="control-label">Número de Ingreso *</label>
                                                         <input type="text" class="form-control incomeNumber" data-mask="999999" placeholder="Número de Ingreso" data-key="1" data-toggle="validator-lqt">
                                                         <div class="help-block with-errors"></div>
                                                       </div>
                                                     </div>
                                                     <div class="col-md-6">
                                                       <div class="form-group">
                                                         <label class="control-label">Código de Barras *</label>
                                                         <input type="text" class="form-control barcode" placeholder="Código de Barras" data-key="1" data-mask="200000009999" data-toggle="validator-lqt">
                                                         <div class="help-block with-errors"></div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                   <div class="row row-form">
                                                     <div class="col-md-12">
                                                       <div class="form-group">
                                                         <label>Disponibilidad</label>
                                                         <select class="form-select form-control availability">
                                                           <option value="1">Disponible</option>
                                                           <option value="2">Prestado</option>
                                                           <option value="3">En espera</option>
                                                           <option value="0">Deshabilitado</option>
                                                         </select>
                                                       </div>
                                                     </div>
                                                   </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="white-box">
                                      <div class="cargando-img">
                                          <img src="http://localhost/Biblioteca/public/img/cargando.gif">
                                      </div>
                                  </div>
                              </div>
                              </div>
                            </div>
                        </div>
                        <!-- /content -->
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal bs-example-modal-lg fade modalInformacion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
</div>
