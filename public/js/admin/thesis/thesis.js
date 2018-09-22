$(document).ready(function() {
  /* Declaro como variables los inputs , selects y textarea para no llamar con $() y asi reducir tiempo */
  var inputTitle = $('#inputTitle');
  var selectType = $('#inputType');
  var inputClasification= $('#inputClasification');
  var selectPrincipalAuthor= $('#inputPrincipalAuthor');
  var inputAdviser= $('#inputAdviser');
  var selectSchool= $('#inputSchool');
  var inputMention= $('#inputMention');
  var inputYear= $('#inputYear');
  var inputObservations= $('#inputObservations');
  var inputExtension= $('#inputExtension');
  var selectStand= $('#inputStand');
  var inputSummary= $('#inputSummary');
  var inputAcompaniment= $('#inputAcompaniment');
  var inputContent= $('#inputContent');
  var inputRecomendations= $('#inputRecomendations');
  var inputConclusions= $('#inputConclusions');
  var inputBibliography= $('#inputBibliography');
  var inputKeywords= $('#inputKeywords');

  /* Tambien declaro clases , id que usare constantemente */
  var classSttabsTesis = $('.sttabs-tesis');
  var idPorcentaje = $('#porcentaje');
  var classModalInformacion = $('.modalInformacion');
  var classModalAgregar = $('.modalAgregar');
  var idBtnAgregarEjemplarTesis = $('#btnAgregarEjemplarTesis');
  var idBtnEliminarEjemplarTesis = $('#btnEliminarEjemplarTesis');
  var idContenedorEjemplares = $('#contenedorEjemplares');
  var idTituloModalAgregar = $('#tituloModalAgregar');
  var idTituloPorcentajeAgregar = $('#tituloPorcentajeAgregar');


  /* Variable usada para saber si el modal de informacion de abrio desde el modal agregar o editar */
  var masInfo = false;
  /* VARIABLES VALIDACION */
  /* Estas variables se usan para saber si todo esta correcto y se puede proceder a crear la tesis */
  var porcentaje = 0;
  /* FUNCION PORCENTAJE */
  /* Encargado de modificar el porcentaje de acuerdo a los inputs , selects y textarea que llene */
  function calculoPorcentaje(){
    porcentaje = 0;
    var inputs = $('.sttabs-tesis input[data-toggle="validator-lqt"]').size();
    var select = $('.sttabs-tesis select[data-toggle="validator-lqt"]').size();
    var textarea = $('.sttabs-tesis textarea[data-toggle="validator-lqt"]').size();
    total =  inputs+select+textarea;
    var errores = 0;
    $('.sttabs-tesis input[data-toggle="validator-lqt"]').each(function(){
      if($(this).val()=='' || $(this).parent().hasClass('has-error')){
        errores++;
      }
    });
    $('.sttabs-tesis select[data-toggle="validator-lqt"]').each(function(){

      if($(this).hasClass('select2-multiple')){
        if($(this).val() == null){
          errores++;
        }
      }else{
        if($(this).find('option:selected').val() == 0 || $(this).parent().hasClass('has-error')){
          errores++;
        }
      }
    });
    $('.sttabs-tesis textarea[data-toggle="validator-lqt"]').each(function(){
      if($(this).val()=='' || $(this).parent().hasClass('has-error')){
        errores++;
      }
    });
    actual = total - errores ;
    porcentaje = actual*100/total;
    $('#porcentaje').html('( '+porcentaje.toFixed(2)+'% )');
    if(porcentaje == 100){
      $('#btnCrearTesis').css("color", "#4fa74f");
      $('#btnEditarTesis').css("color", "#4fa74f");
    }else{
      $('#btnCrearTesis').css("color", "black");
      $('#btnEditarTesis').css("color", "black");
    }
    console.log("Porcentaje Calculado "+porcentaje);
  }

  /* Config tamaño de scroll */
  $('.scrollAddTesis').slimScroll({
      height: '680px'
  });

  $('select.form-select').select2();

  /* FUNCIONES INFORMACION DE TESIS */
  /* Encargado de gestionar el funcionamiento del modal de informacion */
  /* Informacion desde la tabla */
  $(document).on('click','.btnInformationThesis',function(){
    $id = $(this).parents(':eq(1)').attr('data-id');
    classModalInformacion.modal({
      show: 'true'
    });
    masInfo = false;
    classModalInformacion.load('theses/' + $id + '/information');
    classModalInformacion.modal({
      show: 'false'
    });
  });
  /* Informacion desde el btnMasInfo */
  $(document).on('click','.btnMasInfo',function(){
    $id = $(this).attr('data-id');
    classModalInformacion.modal({
      show: 'true'
    });
    masInfo = true;
    classModalInformacion.load('theses/' + $id + '/information');
    classModalInformacion.modal({
      show: 'false'
    });
  });
  /* Detecta cuando el modal informacion se cierra , verifica que se halla abierto desde el modalAgregar para abrir este modal otra vez */
  classModalInformacion.on("hidden.bs.modal", function () {
    if(masInfo==true){
      classModalAgregar.modal({
        show: 'true'
      });
    }
  });

  /* FUNCIONES CAMBIO VALIDACION */
  /* Eliminan el mensaje de campo vacio y campo repetido cuando activan el evento de escribir o seleccionar respectivamente*/
  classSttabsTesis.on('keyup', 'input[data-toggle="validator-lqt"]', function() {
    $(this).parent().removeClass('has-error');
    $(this).siblings('.help-block').html('');
    calculoPorcentaje();
  });
  classSttabsTesis.on('keyup', 'textarea[data-toggle="validator-lqt"]', function() {
    $(this).parent().removeClass('has-error');
    calculoPorcentaje();
  });
  classSttabsTesis.on('change', 'select[data-toggle="validator-lqt"]', function() {
    $(this).parent().removeClass('has-error');
    $(this).siblings('.help-block').html('');
    calculoPorcentaje();
  });
  /* Validaciones especiales */
  classSttabsTesis.on('keyup', 'input', function(e) {
    /* Usa data-max para limitar el numero de caracteres en input data-max="12" */
    var max = $(this).data('max');
    console.log(e.key);
    if(max != null){
      if($(this).val().length >= max){
        $(this).siblings('.help-block').html('<ul class="list-unstyled"><li>Máx. '+max+' carácteres</li></ul>');
      }
    }
  });

  classSttabsTesis.on('keypress', 'input', function(e) {
    /* Usa data-max para validar el tipo de entrada en input data-key="1" */
    /* 1 -> solo numero */
    /* 2 -> solo letras */
    var key = $(this).data('key');
    if(key!=null){
       if(key==1){
         if(!(e.charCode >= 48 && e.charCode <= 57)){
           $(this).siblings('.help-block').html('<ul class="list-unstyled"><li>Solo números</li></ul>');
           return false;
         }
       }
       if(key==2){
         if(e.charCode >= 48 && e.charCode <= 57){
           $(this).siblings('.help-block').html('<ul class="list-unstyled"><li>Solo letras</li></ul>');
           return false;
         }
       }
    }
  });
  inputAdviser.on('keyup', function() {
    $(this).siblings('.help-block').html('');
  });

  /* VALIDACION DE CLASIFICACION */
  /* Envia un ajax con la informacion que contiene el input miestras escribe , valida en el controlador que el campo no se repita */
  classSttabsTesis.on('keyup','#inputClasification',function(){
    var aux = $(this);
    $.ajax({
       url: 'theses/clasificationValidation',
       type:'post',
       data:{_token : $('#token').val(),
             id : inputClasification.attr('data-id'),
             clasification: aux.val(),
       },
       success: function(data)
       {
         var obj =  JSON.parse(data);
         if(obj.valida == "1"){
            aux.parent().addClass('has-error');
            calculoPorcentaje();
            aux.siblings('.help-block').html(obj.html);
         }
       },
    });
  });

  /* VALIDACION DE NUMERO DE INGRESO */
  /* Envia un ajax con la informacion que contiene el input miestras escribe , valida en el controlador que el campo no se repita */
  classSttabsTesis.on('keyup','.incomeNumber',function(){
    var aux = $(this);
    var validateIncomeNumberInside = true;
    $('.incomeNumber').each(function(){
       if($(this).val() == aux.val() && !aux.is($(this))){
          validateIncomeNumberInside = false;
          aux.parent().addClass('has-error');
          calculoPorcentaje();
          aux.siblings('.help-block').html('<ul class="list-unstyled"><li>Campo repetido en el mismo formulario</li></ul>');
       }
    });
    if(validateIncomeNumberInside){
      /* Me dirijo al padre div-ejemplar , este tiene el id*/
      var id = aux.parents(':eq(6)').attr('data-id');
      $.ajax({
         url: 'theses/incomeNumberValidation',
         type:'post',
         data:{_token : $('#token').val(),
               incomeNumber: aux.val(),
               id : id,
         },
         success: function(data)
         {
           var obj =  JSON.parse(data);
           if(obj.valida == "1"){
              aux.parent().addClass('has-error');
              calculoPorcentaje();
              aux.siblings('.help-block').html(obj.html);
           }
         },
      });
    }
  });

  /* VALIDACION DE CODIGO DE BARRAS */
  /* Envia un ajax con la informacion que contiene el input miestras escribe , valida en el controlador que el campo no se repita */
  classSttabsTesis.on('keyup','.barcode',function(){
    var aux = $(this);
    var validateBarcodeInside = true;
    $('.barcode').each(function(){
       if($(this).val() == aux.val() && !aux.is($(this))){
          validateBarcodeInside = false;
          aux.parent().addClass('has-error');
          calculoPorcentaje();
          aux.siblings('.help-block').html('<ul class="list-unstyled"><li>Campo repetido en el mismo formulario</li></ul>');
       }
    });
    if(validateBarcodeInside){
      /* Me dirijo al padre div-ejemplar , este tiene el id*/
      var id = aux.parents(':eq(6)').attr('data-id');
      $.ajax({
         url: 'theses/barcodeValidation',
         type:'post',
         data:{_token : $('#token').val(),
               barcode: aux.val(),
               id : id,
         },
         success: function(data)
         {
           var obj =  JSON.parse(data);
           if(obj.valida == "1"){
              aux.parent().addClass('has-error');
              calculoPorcentaje();
              aux.siblings('.help-block').html(obj.html);
           }
         },
      });
    }
  });


  /* FUNCION DE CAMBIO TAB */
  /* Esta funcion se activa al cambiar de tab , ademas se encarga de validar que los campos no esten vacios */
  /* Esta funcion se encarga tambien de habilitar el tab-3 cuando la validacion es correcta*/
  classSttabsTesis.find("ul li a").on('click',function(event){

     //Extraigo el id del tab que quiero validar
     var tabSiguiente = $('#'+ $(this).data('tab'));

     var tabActual = classSttabsTesis.find('nav ul .tab-current a').data('tab');
     tabActual = $('#'+tabActual);

     var validaVacio = true;
     var cambiarTab = true;

     calculoPorcentaje();

     tabActual.find('input[data-toggle="validator-lqt"]').each(function(){
      if($(this).val()==''){
         $(this).parent().addClass('has-error');
      }
     });
     tabActual.find('textarea[data-toggle="validator-lqt"]').each(function(){
      if($(this).val()==''){
         $(this).parent().addClass('has-error');
      }
     });
     tabActual.find('select[data-toggle="validator-lqt"]').each(function(){
      if($(this).find('option:selected').val()=='0'){
         $(this).parent().addClass('has-error');
      }
     });
     if($('#inputPrincipalAuthor').val()==null){
        $('#inputPrincipalAuthor').parent().addClass('has-error');
     }

     //validaVacio = true;
     if(tabSiguiente.is($('#tab-3'))){
        if(porcentaje==100){
          //Pronto mostrara un tab con todos los datos de la tesis que se piensa crear
          //Y el boton de crear
          //Cuando pulse en confirmar la creacion , entonces mostrara el gif cargando
          cambiarTab=true;
        }else{
          //Debe mostrar un tab advirtiendo que falta llenar campos o dato ya existe
          cambiarTab=false;
        }
     }
     if(cambiarTab){
       /* Cambiamos su cabecera a activo */
       $(this).parent().addClass('tab-current');
       /* Desactivo la cabecera de los otros */
       $(this).parent().siblings('li').each(function(){
          $(this).removeClass('tab-current');
          $(this).parent().removeClass('active');
       });
       /* Cambio de tab */
       tabActual.removeClass('active');
       tabSiguiente.addClass('active');
     }
  });


  /* FUNCION AGREGAR EJEMPLAR */
  /* Agrega un nuevo formulario para poder ingresar datos de ejemplar*/
  /* Da limite max de 3 ejemplares */
  idBtnAgregarEjemplarTesis.on('click',function(event) {
    var pos = idContenedorEjemplares.find(".div-ejemplar").length+1;
    if(pos>10){
      alert("MAXIMO 10 EJEMPLARES")
    }else{
        idContenedorEjemplares.append('<div class="col-md-12 div-ejemplar" data-id="0">'
                                        +'<div class="panel panel-default panel-border">'
                                          +'<div class="panel-heading">'
                                              +'<span> Ejemplar '+pos+'</span>'
                                              +'<div class="panel-action">'
                                                +'<a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>'
                                              +'</div>'
                                          +'</div>'
                                          +'<div class="panel-wrapper collapse in" aria-expanded="true" style="">'
                                              +'<div class="panel-body panel-body-simple" style="padding: 10px; padding-top: 20px;">'
                                                 +'<div class="row row-form">'
                                                   +'<div class="col-md-6">'
                                                     +'<div class="form-group">'
                                                       +'<label class="control-label">Número de Ingreso *</label>'
                                                       +'<input type="text" data-mask="999999" class="form-control incomeNumber" placeholder="Número de Ingreso" data-key="1" data-toggle="validator-lqt">'
                                                       +'<div class="help-block with-errors"></div>'
                                                     +'</div>'
                                                   +'</div>'
                                                   +'<div class="col-md-6">'
                                                     +'<div class="form-group">'
                                                       +'<label class="control-label">Código de Barras *</label>'
                                                       +'<input type="text" class="form-control barcode" data-key="1" data-mask="200000009999" placeholder="Código de Barras" data-toggle="validator-lqt">'
                                                       +'<div class="help-block with-errors"></div>'
                                                     +'</div>'
                                                   +'</div>'
                                                 +'</div>'
                                                 +'<div class="row row-form">'
                                                   +'<div class="col-md-12">'
                                                     +'<div class="form-group">'
                                                       +'<label>Disponibilidad</label>'
                                                       +'<select class="form-select form-control availability">'
                                                         +'<option value="1">Disponible</option>'
                                                         +'<option value="2">Prestado</option>'
                                                         +'<option value="3">En espera</option>'
                                                         +'<option value="0">Deshabilitado</option>'
                                                       +'</select>'
                                                     +'</div>'
                                                   +'</div>'
                                                 +'</div>'
                                              +'</div>'
                                          +'</div>'
                                        +'</div>'
                                      +'</div>');
        $('select.form-select').select2();
        calculoPorcentaje();
    }
  });

  /* FUNCION ELIMINAR EJEMPLAR */
  /* Elimina el formulario del ultimo ejemplar*/
  /* Da limite min 1 ejemplares */
  idBtnEliminarEjemplarTesis.on('click',function(event) {
    var pos = idContenedorEjemplares.find(".div-ejemplar").length;
    if(pos==1){
      alert("MINIMO 1 EJEMPLAR")
    }else{
      var id = $('.div-ejemplar:last').attr('data-id');
      if(id == 0){
        idContenedorEjemplares.find(".div-ejemplar:last").remove();
      }else{
        $.ajax({
          url: 'theses/validateDeleteCopy',
          type:'post',
          data:{_token : $('#token').val(),
                id: id,
          },success: function(data){
            var obj =  JSON.parse(data);
            if(obj.valida == '1'){
              swal({
                  title: obj.titulo,
                  text: obj.texto,
                  type: "error",
                });
            }else{
              idContenedorEjemplares.find(".div-ejemplar:last").remove();
            }
          }
        });
      }
      calculoPorcentaje();
    }
  });

  /* FUNCION CREAR TESIS*/
  /* Envia por ajax todos los datos de la tesis , muestra un mensaje confirmando el exito de proceso y recarga la pagina */
  $(document).on('click','#btnCrearTesis',function(event) {
    if(porcentaje == 100){
      var ejemplares = new Array();
      $('.div-ejemplar').each(function(){
        var ejemplar = new Object();
        ejemplar.incomeNumber = $(this).find('.incomeNumber').val();
        ejemplar.barcode = $(this).find('.barcode').val();
        ejemplar.availability = $(this).find('.availability option:selected').val();
        ejemplares.push(ejemplar);
      })
      $.ajax({
         url: 'theses/store',
         type:'post',
         data:{_token : $('#token').val(),
               thesisCopies : ejemplares,
               title : inputTitle.val(),
               type : selectType.find('option:selected').val(),
               clasification: inputClasification.val(),
               principalAuthor: selectPrincipalAuthor.val(),
               adviser: inputAdviser.val(),
               school: selectSchool.find('option:selected').val(),
               mention : inputMention.val(),
               year: inputYear.val(),
               observations: inputObservations.val(),
               extension: inputExtension.val(),
               stand: selectStand.find('option:selected').val(),
               summary: inputSummary.val(),
               accompaniment: inputAcompaniment.val(),
               content: inputContent.val(),
               recomendations: inputRecomendations.val(),
               conclusions: inputConclusions.val(),
               bibliography: inputBibliography.val(),
               keywords: inputKeywords.val(),
         }
      }).done( function() {
        classModalAgregar.modal('toggle');
        swal({
          title: "Proceso Exitoso",
          text: "La Tesis ha sido creada !!",
          type: "success",
        },function(){
           console.log("La Tesis ha sido creada !!");
           location.reload();
        });
      }).fail( function() {
          swal({
            title: "Error Inesperado !! ",
            text: "Ha ocurrido un error inesperado , contacte a los desarrolladores :(",
            type: "error",
          });
      });
    }
  });

  /* FUNCION CAMBIO DE TIPO EDITAR A AGREGAR */
  /* Cambia algunos datos como el nombre de titulo , id del elemnento y la referencia de data-id */
  $(document).on('click','.openModalAddThesis',function(){
    idTituloModalAgregar.html('<i class="fa fa-plus"></i> AGREGAR TESIS E INFORME<div class="pull-right"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div>');
    idTituloPorcentajeAgregar.html(' Crear ');
    $id = $(this).attr('data-id');
    $("#btnEditarTesis").attr('data-id', '0' );
    $("#btnEditarTesis").attr("data-id","btnAgregarTesis");
    inputClasification.attr('data-id', '0' );

    $('input[data-toggle="validator-lqt"]').each(function(){
       $(this).parent().removeClass('has-error');
       $(this).siblings('.help-block').html('');
    });

    $('textarea[data-toggle="validator-lqt"]').each(function(){
       $(this).parent().removeClass('has-error');
    });

    $('select[data-toggle="validator-lqt"]').each(function(){
       $(this).parent().removeClass('has-error');
       $(this).siblings('.help-block').html('');
    });

    inputTitle.val('');
    selectType.val('0');
    selectType.change();
    inputClasification.val('');
    
    inputAdviser.val('');
    selectSchool.val('0');
    selectSchool.change();
    inputMention.val('');
    inputYear.val('');
    inputObservations.val('');
    inputExtension.val('');
    selectStand.val('0');
    selectStand.change();
    inputSummary.val('');
    inputAcompaniment.val('');
    inputContent.val('');
    inputRecomendations.val('');
    inputConclusions.val('');
    inputBibliography.val('');
    inputKeywords.val('');

    /* Inicializo el primer ejemplar a todo vacio */
    var div_ejemplar_1 = $('.div-ejemplar:first');
    div_ejemplar_1.find('.incomeNumber').val('');
    div_ejemplar_1.attr('data-id', '0' );
    div_ejemplar_1.find('.barcode').val('');
    div_ejemplar_1.find('.availability').val('1');
    div_ejemplar_1.find('.availability').change();
    /* Elimino todos los demas ejemplares , si es que hay */
    $('.div-ejemplar:gt(0)').each(function(){
       $(this).remove();
    });
    calculoPorcentaje();
  });

  /* FUNCION DE LLENADO DE DATOS EN MODAL */
  /* Funcion encargado de llenar los inputs , selects y textarea del modal al pulsar en el boton editar */
  $(document).on('click','.openModalEditThesis',function(){
    porcentaje = 100;
    idTituloModalAgregar.html('<i class="fa fa-edit"></i> EDITAR TESIS E INFORME<div class="pull-right"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div>');
    idTituloPorcentajeAgregar.html(' Editar ');
    $id = $(this).parents(':eq(1)').attr('data-id');
    $("#btnCrearTesis").attr('data-id', $id );
    $("#btnCrearTesis").attr("id","btnEditarTesis");


    $('input[data-toggle="validator-lqt"]').each(function(){
       $(this).parent().removeClass('has-error');
       $(this).siblings('.help-block').html('');
    });

    $('textarea[data-toggle="validator-lqt"]').each(function(){
       $(this).parent().removeClass('has-error');
    });

    $('select[data-toggle="validator-lqt"]').each(function(){
       $(this).parent().removeClass('has-error');
       $(this).siblings('.help-block').html('');
    });

    $.ajax({
       url: 'theses/'+$id+'/edit',
       type:'post',
       data:{_token : $('#token').val(),
       },
       success: function(data)
       {
         var obj =  JSON.parse(data);
         var thesis = obj.thesis;
         var thesisSpecification = obj.thesisSpecification;
         var thesisCopies = obj.thesisCopies;
         var principalAuthor = obj.principalAuthor;

         inputClasification.attr('data-id', $id);
         inputTitle.val(thesis.title);
         selectType.val(thesis.type);
         selectType.change();
         inputClasification.val(thesis.clasification);
         selectPrincipalAuthor.val(principalAuthor.split(','));
         selectPrincipalAuthor.change();

         inputAdviser.val(thesisSpecification.adviser);
         selectSchool.val(thesis.school_id);
         selectSchool.change();
         inputMention.val(thesisSpecification.mention);
         inputYear.val(thesis.year);
         inputObservations.val(thesisSpecification.observations);
         inputExtension.val(thesisSpecification.extension);
         selectStand.val(thesis.stand_id);
         selectStand.change();
         inputSummary.val(thesisSpecification.summary);
         inputAcompaniment.val(thesisSpecification.accompaniment);
         inputContent.val(thesisSpecification.content);
         inputRecomendations.val(thesisSpecification.recomendations);
         inputConclusions.val(thesisSpecification.conclusions);
         inputBibliography.val(thesisSpecification.bibliography);
         inputKeywords.val(thesisSpecification.keywords);

         /* Modificando los valores del primer ejemplar */
         var div_ejemplar_1 = $('.div-ejemplar:first');
         div_ejemplar_1.attr("data-id",thesisCopies[0].id);
         div_ejemplar_1.find('.incomeNumber').val(thesisCopies[0].incomeNumber);
         div_ejemplar_1.find('.barcode').val(thesisCopies[0].barcode);
         div_ejemplar_1.find('.availability').val(thesisCopies[0].availability);
         div_ejemplar_1.find('.availability').change();

         /* Eliminando los demas ejempalr para luego volverlos a crear con valores incluidos */
         $('.div-ejemplar:gt(0)').each(function(){
            $(this).remove();
         });
         for (var i = 1; i < thesisCopies.length; i++) {
           idBtnAgregarEjemplarTesis.click();
           var div_ejemplar_i = $('.div-ejemplar').eq(i);
           div_ejemplar_i.attr("data-id",thesisCopies[i].id);
           div_ejemplar_i.find('.incomeNumber').val(thesisCopies[i].incomeNumber);
           div_ejemplar_i.find('.barcode').val(thesisCopies[i].barcode);
           div_ejemplar_i.find('.availability').val(thesisCopies[i].availability);
           div_ejemplar_i.find('.availability').change();
         }
         calculoPorcentaje();
       },
    });
  });

  /* FUNCION EDITAR TESIS*/
  /* Envia por ajax todos los datos de la tesis , muestra un mensaje confirmando el exito de proceso y recarga la pagina */
  $(document).on('click','#btnEditarTesis',function(event) {
    $id = $(this).attr('data-id');
    if(porcentaje == 100){
      var ejemplares = new Array();
      $('.div-ejemplar').each(function(){
        var ejemplar = new Object();
        ejemplar.incomeNumber = $(this).find('.incomeNumber').val();
        ejemplar.barcode = $(this).find('.barcode').val();
        ejemplar.availability = $(this).find('.availability option:selected').val();
        ejemplares.push(ejemplar);
      })
      $.ajax({
         url: 'theses/update',
         type:'post',
         data:{_token : $('#token').val(),
               id : $id,
               thesisCopies : ejemplares,
               title : inputTitle.val(),
               type : selectType.find('option:selected').val(),
               clasification: inputClasification.val(),
               principalAuthor: selectPrincipalAuthor.val(),
               adviser: inputAdviser.val(),
               school: selectSchool.find('option:selected').val(),
               mention : inputMention.val(),
               year: inputYear.val(),
               observations: inputObservations.val(),
               extension: inputExtension.val(),
               stand: selectStand.find('option:selected').val(),
               summary: inputSummary.val(),
               accompaniment: inputAcompaniment.val(),
               content: inputContent.val(),
               recomendations: inputRecomendations.val(),
               conclusions: inputConclusions.val(),
               bibliography: inputBibliography.val(),
               keywords: inputKeywords.val(),
         }
      }).done( function() {
        classModalAgregar.modal('toggle');
        swal({
          title: "Proceso Exitoso",
          text: "La Tesis ha sido editada !!",
          type: "success",
        },function(){
           console.log("La Tesis ha sido editada !!");
           location.reload();
        });
      }).fail( function() {
          swal({
            title: "Error Inesperado !! ",
            text: "Ha ocurrido un error inesperado , contacte a los desarrolladores :(",
            type: "error",
          });
      });
    }
  });

  $('.btnEliminarTesis').click(function(){
    $id = $(this).parents(':eq(1)').attr('data-id');
    $.ajax({
       url: 'theses/'+$id+'/destroyValidation',
       type:'post',
       data:{_token : $('#token').val(),
       },
       success: function(data)
       {
          var obj =  JSON.parse(data);
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
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sí , Eliminar !",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              }, function(isConfirm){
                if (isConfirm) {
                     $.ajax({
                       url: 'theses/'+$id+'/destroy',
                       type:'post',
                       data:{_token : $('#token').val(),
                       },
                       success: function(data)
                       {
                         var obj =  JSON.parse(data);
                         if(obj.caso == '1'){
                            swal({
                              title: obj.titulo,
                              text: obj.texto,
                              type: "error",
                            });
                          }else{
                            swal({
                              title: obj.titulo,
                              text: obj.texto,
                              type: "success",
                            },function(){
                              console.log("Eliminado");
                              location.reload();
                            });
                          }
                       },
                     });
                } else {
                    swal("Cancelado", "La operación fue cancelada", "error");
                }
            });
          }
       }
     });
  });

});
