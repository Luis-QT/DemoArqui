<div class="panel panel-default">
              <div class="panel-heading"><i class="fa fa-plus"></i> @if($revista==null) AGREGAR REVISTA @else EDITAR REVISTA @endif
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

                                <li><a href="#" data-id="tab-4" role="tab" data-toggle="tab" aria-expanded="true" class="sticon ti-check-box" id="btnDom"><span> @if($revista==null) Crear @else Editar @endif </span></a></li>

                            </ul>
                        </nav>
                        <form class="tab-content" id="CrearRevista" role="form" method="POST" @if($revista==null) 
                        action="{{ route('magazines.store') }}" @else action="{{ url('/admin/magazines/update/'.$revista->id) }}" @endif > @csrf

                            <section id="tab-1" class="tab-pane active row">

                                <fieldset class="col-md-6 row-form">
                                  <div class="col-md-12 well">
                                    <legend class="col-md-12">Información Principal 1</legend>
                                    <div class="col-md-12 form-group">
                                      <label class="control-label" for="cTitulo">Título *</label>
                                      <input type="text" class="form-control" placeholder="Título" name="cTitulo"
                                      @if($revista!=null) value="{{$revista->title}}" @endif>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                      <label class="control-label" for="cTituloSec">Resto del Título *</label>
                                      <input type="text" class="form-control" placeholder="Resto del Título" name="cTituloSec"
                                      @if($revista!=null) value="{{$revista->restOfTheTitle}}" @endif>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group"> 
                                      <label class="control-label" for="cISSN">ISSN *</label>
                                      <input type="text" class="form-control" placeholder="ISSN" name="cISSN"
                                      @if($revista!=null) value="{{$revista->magazineSpecification->issn}}" @endif>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group"> 
                                      <label class="control-label" for="cISSN">ISSND *</label>
                                      <input type="text" class="form-control" placeholder="ISSND" name="cISSND"
                                      @if($revista!=null) value="{{$revista->magazineSpecification->issnD}}" @endif>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group"> 
                                      <label class="control-label" for="cVolumen">Volumen *</label>
                                      <input type="text" class="form-control" placeholder="Volumen" name="cVolumen"
                                      @if($revista!=null) value="{{$revista->volume}}" @endif>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group"> 
                                      <label class="control-label" for="cNCopias">N° Copias *</label>
                                      <input type="text" class="form-control" placeholder="N° Copias" name="cNCopias"
                                      @if($revista!=null) value="{{$revista->numberOfCopies}}" @endif>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group"> 
                                      <label class="control-label" for="cEditorial">Editorial *</label>
                                      <select class="select2 form-control" name="cEditorial">
                                        <optgroup label="Editoriales">
                                          <option value="1">Instituto de Investigación</option>
                                        </optgroup>
                                      </select>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </fieldset>

                                <fieldset class="col-md-6 row-form">
                                  <div class="col-md-12 well">
                                    <legend class="col-md-12">Información Principal 2</legend>
                                    <div class="col-md-12 form-group">
                                      <label class="control-label" for="cAutor">Autor *</label>
                                      <select class="select2 form-control" name="cAutor">
                                        <optgroup label="Autores">
                                          <option value="1">Facultad de Ingeniería de Sistemas e Informática</option>
                                        </optgroup>
                                      </select>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                      <label class="control-label" for="cDirectiva">Directiva*</label>
                                      <input type="text" class="form-control" name="cDirectiva" 
                                      @if($revista==null) value="Universidad Nacional Mayor de San Marcos" @else
                                      value="{{$revista->magazineSpecification->directive}} @endif">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group"> 
                                      <label class="control-label" for="cFPublicacion">Fecha de Publicación *</label>
                                      <select class="select2 form-control" name="cFPublicacion">
                                        <optgroup label="Fechas">
                                          <option @if($revista!=null && $revista->magazineSpecification->publicationDate=="Enero - Julio") selected @endif value="Enero - Julio">Enero - Julio</option>
                                          <option @if($revista!=null && $revista->magazineSpecification->publicationDate=="Julio - Diciembre") selected @endif value="Julio - Diciembre">Julio - Diciembre</option>
                                        </optgroup>
                                      </select>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group"> 
                                      <label class="control-label" for="cNRevista">N° Revista *</label>
                                      <select class="select2 form-control" name="cNRevista">
                                        <optgroup label="Orden">
                                          <option value="1" @if($revista!=null && $revista->number=="1") selected @endif >1</option>
                                          <option value="2" @if($revista!=null && $revista->number=="2") selected @endif >2</option>
                                        </optgroup>
                                      </select>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group"> 
                                      <label class="control-label" for="cStand">Stand *</label>
                                      <select class="select2 form-control" name="cStand">
                                        <optgroup label="Stands">
                                          @foreach($stands as $stand)
                                            <option value="{{$stand->id}}" @if($revista!=null && $revista->stand_id==$stand->id) selected 
                                            @endif >{{$stand->name}}</option>
                                          @endforeach
                                        </optgroup>
                                      </select>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </fieldset>

                            </section>

                            

                            <section id="tab-2" class="tab-pane row">
                              <fieldset class="col-md-12 row-form">
                                <div class="col-md-12 well">
                                  <legend class="col-md-12">Contenido de la Revista</legend>
                                  <div class="col-md-12 form-group">
                                      <label class="control-label" for="cResumen">Resumen</label>
                                      <textarea rows="7" class="form-control" name="cResumen">@if($revista!=null){{$revista->magazineSpecification->summary}}@endif</textarea>
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
                                        @if($revista==null)
                                          <div class='col-md-12' id='articulo1'>
                                             <div class="col-md-12 panel-heading" style="margin-bottom: 20px;">
                                                <span> Artículo N°1</span>
                                                <div class="panel-action">
                                                  <button type="button" class="btn btn-success btn-circle btnAArticulo"><i class="fa fa-plus"></i> </button>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                               <div class="form-group">
                                                 <label class="control-label" for="CNArticulo1">Nombre del articulo</label>
                                                 <input type="text" class="form-control" name="CNArticulo1" placeholder="Nombre del artículo">
                                                 <div class="help-block with-errors"></div>
                                               </div>
                                             </div>
                                             <div class="col-md-6">
                                               <div class="form-group">
                                                 <label class="control-label" for="CColaborador1[]">Colaboradores</label>
                                                 <select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Colaboradores" name="CColaborador1[]">
                                                   <optgroup label="Colaboradores">
                                                     @foreach($autores as $autor)
                                                       <option value="{{$autor->id}}">{{$autor->name}}</option>
                                                     @endforeach
                                                   </optgroup>
                                                 </select>
                                                    
                                                 <div class="help-block with-errors"></div>
                                               </div>
                                             </div>
                                             </div>

                                      @else
                                        @foreach($revista->articles as $i=>$articulo)
                                          <div class='col-md-12' id='articulo{{$i+1}}'>
                                             <div class="col-md-12 panel-heading" style="margin-bottom: 20px;">
                                                <span> Artículo N°{{$i+1}}</span>
                                                <div class="panel-action">
                                                  <button type="button" class="btn btn-success btn-circle btnAArticulo"><i class="fa fa-plus"></i> </button>
                                                  @if($i>0)
                                                  <button type='button' class='btn btn-danger btn-circle btnEArticulo'  id='btnEArticulo{{$i+1}}'><i class='fa fa-times'></i> </button>
                                                  @endif
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                               <div class="form-group">
                                                 <label class="control-label" for="CNArticulo{{$i+1}}">Nombre del articulo</label>
                                                 <input type="text" class="form-control" name="CNArticulo{{$i+1}}" placeholder="Nombre del artículo" value="{{$articulo->title}}">
                                                 <div class="help-block with-errors"></div>
                                               </div>
                                             </div>
                                             <div class="col-md-6">
                                               <div class="form-group">
                                                 <label class="control-label" for="CColaborador{{$i+1}}[]">Colaboradores</label>
                                                 <select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Colaboradores" name="CColaborador{{$i+1}}[]">
                                                   <optgroup label="Colaboradores">
                                                     @foreach($autores as $autor)
                                                       <option value="{{$autor->id}}" @if($articulo->authors->contains($autor)) 
                                                       selected @endif>{{$autor->name}}</option>
                                                     @endforeach
                                                   </optgroup>
                                                 </select>
                                                    
                                                 <div class="help-block with-errors"></div>
                                               </div>
                                             </div>
                                             </div>
                                        @endforeach

                                      @endif
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </fieldset>
                            </section>

                            <section id="tab-4" class="tab-pane">
                                <!--<div class="row">
                                  <div class="col-md-12">
                                    <div class="white-box">
                                        <div class="cargando-img">
                                            <img src="http://localhost/Biblioteca/public/img/cargando.gif">
                                        </div>
                                    </div>
                                  </div>
                                </div> -->
                            </section>
                        </form>
                        <!-- /content -->
                    </div>
                  </div>
              </div>
          </div>

          <script type="text/javascript">
  $(document).ready(function() {
    $('.select2-multiple').select2();
    @if($revista==null)
    var contador=1;
    @else
    var contador= {{count($revista->articles)}};
    @endif


    $(".tabRev a").on('click',function(event){
      var tabSiguiente = $('#'+ $(this).data('id'));
      var tba = $('.tabRev nav ul .tab-current a');
      var tabActual = $('#'+ tba.data('id'));      
         
      if($(this).data('id')!="tab-4"){
        tba.parent().removeClass('tab-current');
        tba.parent().removeClass('active');

        $(this).parent().addClass('tab-current');

        tabActual.removeClass('active');
        tabSiguiente.addClass('active');
      }else{
        $("#CrearRevista").submit();
      }
      
    });

    var crearArticulo = function() {

        contador++;

         var cadena="";

        @foreach($autores as $autor)
          cadena=cadena+"<option value='"+"{{$autor->id}}"+"'> {{$autor->name}} </option>";
        @endforeach

        $( "#panelArticulo" ).append( "<div class='col-md-12' id='articulo"+contador+"'><div class='col-md-12 panel-heading' style='margin-bottom: 20px;'><span> Artículo N°"+contador+"</span><div class='panel-action'><button type='button' class='btn btn-success btn-circle btnAArticulo' id='btnAArticulo"+contador+"'><i class='fa fa-plus'></i> </button><button type='button' class='btn btn-danger btn-circle btnEArticulo'  id='btnEArticulo"+contador+"'><i class='fa fa-times'></i> </button></div></div> "+ 
          "<div class='col-md-6'><div class='form-group'><label class='control-label' for='CNArticulo"+contador+"'>Nombre del articulo</label><input type='text' class='form-control' name='CNArticulo"+contador+"' placeholder='Nombre del artículo'><div class='help-block with-errors'></div></div></div>"+
          "<div class='col-md-6'><div class='form-group'><label class='control-label' for='CColaborador"+contador+"[]'>Colaboradores</label><select class='select2 m-b-10 select2-multiple' multiple='multiple' data-placeholder='Colaboradores' name='CColaborador"+contador+"[]'><optgroup label='Colaboradores'>"+ cadena+ "</optgroup></select><div class='help-block with-errors'></div></div></div></div>" );
        $('.select2-multiple').select2();

        $("#btnAArticulo"+contador).on('click',function(){
          crearArticulo();
        });

        $("#btnEArticulo"+contador).on('click',function(){
          $dato = $("#articulo"+contador);
          $dato.remove();
          contador--;
        });
    };


    $(".btnAArticulo").on('click',function(){
      crearArticulo();
    });
    $(".btnEArticulo").on('click',function(){
      $dato = $("#articulo"+contador);
      $dato.remove();
      contador--;

    });



  });
</script>
