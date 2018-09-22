<div class="white-box">
    <h3 class="box-title">BUSCADOR BIBLIOFISI</h3>
    <div class="form-group" style="margin-bottom: 15px;">
        <div class="input-group">
            <div class="input-group-btn">
                <select class="select2 form-control" id="selectSearchThesis" style="width: 180px;background-color: #fff7d4;">
                    <option value="1">Título</option>
                    <option value="2">Autor</option>
                    <option value="3">Asesor</option>
                    <option value="4">Palabras Clave</option>
                    <option value="5">Número de Ingreso</option>
                    <option value="6">Código de Barras</option>
                </select>
            </div>
            <input type="text" id="inputSearchThesis" class="form-control" placeholder="Buscar"> <span class="input-group-btn"><button type="button" class="btn waves-effect waves-light btn-info" id="btnSearchThesis"><i class="fa fa-search"></i></button></span> 
        </div>
        <div class="m-t-10 m-b-0">
          <button class="btn btn-outline btn-default btn-xs" data-toggle="collapse" data-target="#demo">Ajustes de Búsqueda</button>
        </div>
        <div id="demo" class="collapse form-horizontal">
           <div class="well search-settings" >
             <div class="row">
               <div class="col-md-3">
                 <div class="form-group">
                  <label class="col-sm-3 control-label" >Año</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                       <input type="text" id="inputYear" data-type="1" class="form-control"><span class="input-group-btn"><button type="button" id="btnHelpYear" class="btn btn-default"><i class="fa fa-question"></i></button></span> 
                    </div>
                  </div>
                 </div>
               </div>
               <div class="col-md-3">
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Tipo</label>
                  <div class="col-sm-9">
                    <select class="select2 form-control" id="selectTypeThesis">
                      <option value="0">Sin Especificar</option>
                      <option value="1">Tesis</option>
                      <option value="2">Informe</option>
                    </select>
                  </div>
                 </div>
               </div>
               <div class="col-md-3">
                 <div class="form-group">
                  <label class="col-sm-3 control-label" >Escuela</label>
                  <div class="col-sm-9">
                    <select class="select2 form-control" id="selectSchool">
                      <option value="0">Sin Especificar</option>
                      <option value="1">Ing. de Sistemas</option>
                      <option value="2">Ing. de Software</option>
                    </select>
                  </div>
                 </div>
               </div>
               <div class="col-md-3">
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Mención</label>
                  <div class="col-sm-9">
                    <input type="text" name="" class="form-control" id="inputMention">
                  </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
    </div>
    <div class="box-search-thesis" style="display: block;">
      {!! $searchThesis !!}
    </div>
</div>

<div class="modal bs-example-modal-lg fade modalInformacion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
</div>

<script src="{{ asset('js/mask.js') }}"></script>

<script type="text/javascript">
  function testAnim(x) {
        $('.box-search-thesis').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
            $(this).addClass('box-search-thesis');
        });
    };
  $(document).ready(function($) {
      $("#btnSearchThesis").on('click',function(event) {
          $.ajax({
             url: 'theses/search',
             type:'post',
             data:{
                  _token : $('#token').val(),
                  search: $('#inputSearchThesis').val(),
                  typeSearch: $('#selectSearchThesis').val(),
                  year : $('#inputYear').val(),
                  mention : $('#inputMention').val(),
                  school : $('#selectSchool').val(),
                  typeThesis : $('#selectTypeThesis').val(),
             },
             success: function(data)
             {  
                $('.box-search-thesis').html(data);
                testAnim('bounceInLeft');
             },
          });
      });
      $('#inputSearchThesis').keypress(function(e){
        if(e.which==13){
          $("#btnSearchThesis").click();
        }
      });
      $('#inputYear').keypress(function(e){
        if(e.which==13){
          $("#btnSearchThesis").click();
        }
      });
      $('#inputMention').keypress(function(e){
        if(e.which==13){
          $("#btnSearchThesis").click();
        }
      });
      $(document).on('click','.btnInformationThesis',function(){
        $id = $(this).data('id');
        $('.modalInformacion').load('theses/' + $id + '/information');
      });
      $('#btnHelpYear').on('click',function(){
          swal("Ayuda de año!", "Puede especificar el año de sustentacion escribiendo el año de forma simple, o acotando con guión entre dos años: \n2018\n2015-2018");
      });
  });
</script>