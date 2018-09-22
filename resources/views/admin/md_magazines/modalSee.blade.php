<div class="panel panel-default">
              <div class="panel-heading"><i class="fa fa-plus"></i> AGREGAR REVISTA
                <div class="pull-right">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
              </div>
              <div class="panel-wrapper collapse in">
                  <div class="panel-body">
                    <div class="sttabs tabs-style-bar tabRev">
                        <nav>
                            <ul>
                                <li class="active tab-current"><a href="#" data-id="tab-1" role="tab" data-toggle="tab" aria-expanded="true" class="sticon ti-pencil-alt"><span> Paso 1</span></a></li>

                                <li><a href="#" data-id="tab-2" role="tab" data-toggle="tab" aria-expanded="true" class="sticon ti-files"><span> Paso 2</span></a></li>
                                <li><a href="#" data-id="tab-3" role="tab" data-toggle="tab" aria-expanded="true" class="sticon ti-files"><span> Paso 3</span></a></li>

                            </ul>
                        </nav>
                        <div class="tab-content">

                            <section id="tab-1" class="tab-pane active row">

                                <fieldset class="col-md-6 row-form">
                                  <div class="col-md-12 well">
                                    <legend class="col-md-12">Información Principal 1</legend>
                                    <div class="col-md-12 form-group">
                                      <label class="control-label" for="cTitulo">Título :</label>
                                      <div>{{$revista->title}}</div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                      <label class="control-label" for="cTituloSec">Resto del Título :</label>
                                      <div>{{$revista->restOfTheTitle}}</div>
                                    </div>
                                    <div class="col-md-6 form-group"> 
                                      <label class="control-label" for="cISSN">ISSN :</label>
                                      <div>{{$revista->magazineSpecification->issn}}</div>
                                    </div>
                                    <div class="col-md-6 form-group"> 
                                      <label class="control-label" for="cISSN">ISSND :</label>
                                      <div>{{$revista->magazineSpecification->issnD}}</div>
                                    </div>
                                    <div class="col-md-6 form-group"> 
                                      <label class="control-label" for="cVolumen">Volumen :</label>
                                      <div>{{$revista->volume}}</div>
                                    </div>
                                    <div class="col-md-6 form-group"> 
                                      <label class="control-label" for="cNCopias">N° Copias :</label>
                                      <div>{{$revista->numberOfCopies}}</div>
                                    </div>
                                    <div class="col-md-12 form-group"> 
                                      <label class="control-label" for="cEditorial">Editorial *</label>
                                      <div>Instituto de Investigación</div>
                                    </div>
                                  </div>
                                </fieldset>

                                <fieldset class="col-md-6 row-form">
                                  <div class="col-md-12 well">
                                    <legend class="col-md-12">Información Principal 2</legend>
                                    <div class="col-md-12 form-group">
                                      <label class="control-label" for="cAutor">Autor *</label>
                                      <div>Facultad de Ingeniería de Sistemas e Informática</div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                      <label class="control-label" for="cDirectiva">Directiva*</label>
                                      <div>{{$revista->magazineSpecification->directive}}</div>
                                    </div>
                                    <div class="col-md-12 form-group"> 
                                      <label class="control-label" for="cFPublicacion">Fecha de Publicación *</label>
                                      <div>{{$revista->magazineSpecification->publicationDate}}</div>
                                    </div>
                                    <div class="col-md-12 form-group"> 
                                      <label class="control-label" for="cNRevista">N° Revista *</label>
                                      <div>{{$revista->number}}</div>
                                    </div>
                                    <div class="col-md-12 form-group"> 
                                      <label class="control-label" for="cStand">Stand *</label>
                                      <div>{{$revista->stand->name}}</div>
                                    </div>
                                  </div>
                                </fieldset>

                            </section>

                            

                            <section id="tab-2" class="tab-pane row">
                              <fieldset class="col-md-12 row-form">
                                <div class="col-md-12 well">
                                  <legend class="col-md-12">Contenido de la Revista</legend>
                                  <div class="col-md-12 form-group">
                                      <label class="control-label" for="cResumen">Resumen :</label>
                                      <div>{{$revista->magazineSpecification->summary}}</div>
                                    </div>
                                </div>
                              </fieldset>
                            </section>


                            <section id="tab-3" class="tab-pane row">
                                <fieldset class="col-md-12 row-form">
                                  <div class="col-md-12 well">
                                    <legend class="col-md-12">Articulos de la Revista</legend>
                                    <div class="col-md-12 panel panel-default panel-border">
                                      

                                      <div class="panel-wrapper collapse in" aria-expanded="true">
                                        <div class="panel-body panel-body-simple row-form" style="padding: 10px; padding-top: 0px;" id="panelArticulo">
                                        @foreach($revista->articles as $i=>$articulo)
                                          <div class='col-md-12' id='articulo{{$i+1}}'>
                                             <div class="col-md-12 panel-heading" style="margin-bottom: 20px;">
                                                <span> Artículo N°{{$i+1}}</span>
                                             </div>
                                             <div class="col-md-6">
                                               <div class="form-group">
                                                 <label class="control-label" for="CNArticulo{{$i+1}}">Nombre del articulo :</label>
                                                 <div>{{$articulo->title}}</div>
                                               </div>
                                             </div>
                                             <div class="col-md-6">
                                               <div class="form-group">
                                                 <label class="control-label" for="CColaborador{{$i+1}}[]">Colaboradores :</label>
                                                   <diV>
                                                   @foreach($articulo->authors as $i=>$autor)
                                                   		@if($i==0)
                                                   			{{$autor->name}}
                                                   		@else
                                                   			{{" - ".$autor->name}}
                                                   		@endif
                                                   		
                                                   @endforeach
                                                   </diV>
                                                 </select>
                                                    
                                                 <div class="help-block with-errors"></div>
                                               </div>
                                             </div>
                                             </div>
                                        @endforeach
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </fieldset>
                            </section>

                        </div>
                        <!-- /content -->
                    </div>
                  </div>
              </div>
          </div>

          <script type="text/javascript">
  $(document).ready(function() {
    $('.select2-multiple').select2();

     $(".tabRev a").on('click',function(event){
      var tabSiguiente = $('#'+ $(this).data('id'));
      var tba = $('.tabRev nav ul .tab-current a');
      var tabActual = $('#'+ tba.data('id'));      
         
    tba.parent().removeClass('tab-current');
    tba.parent().removeClass('active');

    $(this).parent().addClass('tab-current');

    tabActual.removeClass('active');
    tabSiguiente.addClass('active');
      
    });

  });
</script>
