$(document).ready(function() {
  var modalInformation = $('#show-information-book');
  var modalCreate = $('#create-book-modal');
  var addcopy = $('#btnAddBookCopy');
  var content = $('#owl-demo');
  var contenedor       = $("#chapterContent");
  var AddButton       = $("#addChapter");
  var pos = $("#contenedorCapitulos div").length;


  //Mostrando informacion del libro
  $('.showBookInformation').click(function(){
    $id = $(this).data('id');
      modalInformation.modal({show:'true'});
      modalInformation.load('books/'+$id+'/information');
      modalInformation.modal({show:'false'});
  });

  //Agregando capitulos
  $('#addChapter').click(function (e) {
      contenedor.append('<div class="input-group" id="chapter'+pos+'"><span class="input-group-addon">'+(pos+1)+'</span><input type="text"  name="chapter['+pos+']" class="form-control" required></div>');
      pos++;
      return false;
  });
  //Eliminando capitulos
  $('#deleteChapter').click(function(){
  	if(pos>1){
  		pos--;
  		$('#chapter'+pos).remove();
  	}
  });



    // Custom Navigation Events
    $('.next').click(function(){
        owl.trigger('owl.next');
    })
    $('.prev').click(function(){
        owl.trigger('owl.prev');
    })

    $('#btnAddBookCopy').click(function(){
      $('.owl-carousel').owlCarousel({
        // dots : false ,
        // nav : true ,
        dots:true,
        autoplay : true ,
        dotsEach : true ,
        addClassActive : true,
        singleItem : true,
        transitionStyle : 'fade',
        responsiveRefreshRate : 25

      }).owlCarousel('add', getTextCopy())
        .owlCarousel('update');


    });


});

function getTextCopy(){
 return '<div class="item">'+
   '<div id="copy1">'+
   '  <div class="panel panel-default panel-border">'+
     '  <div class="panel-heading">'+
         '  <span> Ejemplar 1</span>'+
     '  </div>'+
     '  <div class="panel-body panel-body-simple" style="padding: 10px; padding-top: 20px;">'+
       '  <div class="form-group">'+
         '  <div class="row">'+
             '  <div class="col-xs-4">'+
               '  <label>Número de Ingreso </label>'+
                 '<input  type="text" name="incomeNumber" id="inputIncomeNumber"'+
                 'class="form-control validate-book">'+
               '</div>'+
             '  <div class="col-xs-4">'+
                 '<label>Codigo de Barras *</label> <input type="text"'+
                 '  name="barcode[0]" id="inputBarcode" class="form-control validate-book">'+
               '</div>'+
               '<div class="col-xs-4">'+
               '  <label>Volumen</label> <input type="number"'+
                 '  name="volume[0]" id="inputVolume" class="form-control validate-book">'+
             '  </div>'+
         '  </div>'+
       '  </div>'+
       '  <div class="form-group">'+
           '  <div class="row">'+
               '<div class="col-lg-6">'+
                 '<label>Disponibilidad</label>'+
               '  <select class="form-control select" id="inputAvailability" style="width: 100%;">'+
                 '  <option value="1">Disponible</option>'+
                   '<option value="0">Deshabilitado</option>'+
                   '<option value="2">Prestado</option>'+
               '  </select>'+
               '</div>'+
               '<div class="col-lg-6">'+
               '<label>Ubicación*</label>'+
                 '<select style="width: 100%;"  class="select2" name="libraryLocation[0]" id="inputLocation">'+
                 '  @if($stands!=null)'+
                   '  @foreach($stands as $stand)'+
                       '<option  value="{{$stand->id}}">{{$stand->name}}</option>'+
                   '  @endforeach'+
                 '  @endif'+
               '  </select>'+
             '  </div>'+
           '  </div>'+
         '</div>'+
         '<div class="form-group">'+
           '<div class="row">'+
             '<div class="col-lg-6">'+
               '<label>Modalidad de Adquisión *</label>'+
               '<select	class="form-control select"'+
               '  name="acquisitionModality[0]" id="inputAcquisitionModality"'+
               '  style="width: 100%;">'+
               '  <option value="0">Donación</option>'+
                 '<option value="1">Compra</option>'+
               '  <option value="2">Adquisición</option>'+
             '  </select>'+
         '    </div>'+
             '<div class="col-lg-6">'+
               '<label>Fuente de Adquisición*</label> <input type="text"'+
               '  class="form-control" name="inputAcquisitionSource[0]"'+
               '  id="inputAcquisitionSource">'+
           '  </div>'+
         '  </div>'+
         '</div>'+
         '<div class="form-group">'+
         '  <div class="row">'+
             '<div class="col-lg-6">'+
             '  <label>Precio de Adquisición</label> <input type="number"'+
               '  name="acquisitionPrice[0]" class="form-control"'+
               '  id="inputAcquisitionPrice">'+
             '</div>'+
           '  <div class="col-lg-6">'+
             '  <label>Fecha de Adquisición</label> <input type="date"'+
               '  name="acquisitionDate[0]" class="form-control"'+
               '  id="inputAcquisitionDate">'+
           '  </div>'+
         '  </div>'+
       '  </div>'+
         '<div class="form-group">'+
         '<div class="row">'+
           '<div class="col-lg-6">'+
           '  <label>Tipo de Impresión</label>'+
             '<select	 id="inputPrintType" class="form-control select" name="printType[0]"	style="width: 100%;">'+
             '  <option value="0">Impresión</option>'+
               '<option value="1">Reimpresión</option>'+
           '  </select>'+
         '  </div>'+
         '  <div class="col-lg-6">'+
             '<label>Lugar de Publicación *</label> <input type="text"'+
             '  name="publicationLocation[0]" class="form-control"'+
             '  id="inputPublicationLocation" >'+
         '  </div>'+
       '  </div>'+
     '  </div>'+
       '</div>'+
   '  </div>'+
 '  </div>'+
 '</div>'
}
