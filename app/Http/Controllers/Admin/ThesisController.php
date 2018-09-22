<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stand;
use App\School;
use App\Thesis;
use App\ThesisSpecification;
use App\ThesisCopy;
use App\Author;
use App\OrderCopy;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ThesisExport;

class ThesisController extends Controller
{
    public function index()
    {
      $theses = Thesis::all();
      $schools = School::all();
      $authors = Author::onlyType("Tesis o Informe");
      $stands = Stand::all()->where('type', 1);

    	$show = view('admin.md_theses.show',[
          'theses' => $theses,
          'search' => "",
          'authors' => $authors,
          'schools' => $schools,
          'stands' => $stands,
      ]);

    	return view('admin.md_theses.index',[
    		'show' => $show,
    	]);

    }


    public function search(Request $request){
      /**************** PRIMERA PARTE DE BUSQUEDA ****************************/

      /* Busca por titulo */
      $theses = Thesis::where('title', 'like', '%'.$request->search.'%')->get();

      /* Si no hay nada , busca por clasificacion */
      if($theses->isEmpty()){
        $theses = Thesis::where('clasification', 'like', '%'.$request->search.'%')->get();;
      }

      /* Si no hay nada , busca por autor */
      if($theses->isEmpty()){
        $authors = Author::where('name', 'like', '%'.$request->search.'%')->get();;
        foreach ($authors as $author) {
          $theses = $theses->concat($author->theses);
        }
        $theses  = $theses->unique('id');
      }

      /* Retorna el resultado de la busqueda si hay resultados*/
      if($theses->isNotEmpty()){
        $searchThesis = view('admin.md_theses.search.thesis',[
          'theses' => $theses,
          'search' => $request->search,
        ]);
        return $searchThesis;
      }

      /**************** SEGUNDA PARTE DE BUSQUEDA ****************************/
      /*Si encontro resultados de tesis por clasificacion , titulo o autor no debe entrar nunca aca*/

      /* Busca por numero de ingreso */
      $thesisCopies = ThesisCopy::where('incomeNumber', 'like', '%'.$request->search.'%')->get();;

      /* Si no hay nada , busca por codigo de barras */
      if($thesisCopies->isEmpty()){
        $thesisCopies = ThesisCopy::where('barcode', 'like', '%'.$request->search.'%')->get();;
      }

      /* Retorna el resultado de la busqueda si hay resultados*/
      /* Si no hay resultados entonces retorno la vista thesis*/
      if($thesisCopies->isNotEmpty()){
        $searchThesis = view('admin.md_theses.search.thesisCopy',[
          'thesisCopies' => $thesisCopies,
          'search' => $request->search,
        ]);
        return $searchThesis;
      }else{
        $searchThesis = view('admin.md_theses.search.thesis',[
          'theses' => $theses,
          'search' => $request->search,
        ]);
        return $searchThesis;
      }
    }

    public function store(Request $request)
    {
      $newThesis = Thesis::create([
         'type' => $request->type,
         'clasification' => $request->clasification,
         'title' => $request->title,
         'year' => $request->year,
         'school_id' => $request->school,
         'stand_id' => $request->stand,
      ]);

      ThesisSpecification::create([
          'adviser' => $request->adviser,
          'extension' => $request->extension,
          'observations' => $request->observations,
          'accompaniment' => $request->accompaniment,
          'content' => $request->content,
          'summary' => $request->summary,
          'recomendations' => $request->recomendations,
          'conclusions' => $request->conclusions,
          'bibliography' => $request->bibliography,
          'keywords' => $request->keywords,
          'mention' => $request->mention,
          'thesis_id' => $newThesis->id,
      ]);


      foreach ($request->thesisCopies as $i => $thesisCopy) {
        ThesisCopy::create([
          'incomeNumber'=> $thesisCopy['incomeNumber'],
          'barcode'=> $thesisCopy['incomeNumber'],
          'copy'=> $i+1,
          'availability' => $thesisCopy['availability'],
          'thesis_id' => $newThesis->id,
        ]);
      }

      foreach ($request->principalAuthor as $author_id) {
         $newThesis->authors()->attach($author_id);
      }

      return "1";
    }

    public function clasificationValidation(Request $request)
    {
       /*Si es 0 se trata de la validacion al crear*/
       if($request->id == "0"){
         $theses = Thesis::all()->where('clasification',$request->clasification);
         if($theses->isNotEmpty()){
           $obj = (object) array('valida' => 1, 'html'=>'<ul class="list-unstyled"><li>Ya existe ,<a href="#" data-dismiss="modal" aria-hidden="true" class="btnMasInfo" data-toggle="modal" data-info="1" data-target=".modalInformacion" data-id="'.$theses->first()->id.'">info.</a></li></ul>');
           return json_encode($obj);
         }
         $obj = (object) array('valida' => 0);
         return json_encode($obj);
       }else{
         /*Si no se trata de la validacion al editar*/
         $theses = Thesis::all()->where('clasification',$request->clasification);
         /* Existe una tesis con la misma clasificacion */
         if($theses->isNotEmpty()){
           //Si tal tesis no es la misma error
           if($theses->first()->id != $request->id){
             $obj = (object) array('valida' => 1, 'html'=>'<ul class="list-unstyled"><li>Ya existe ,<a href="#" data-dismiss="modal" aria-hidden="true" class="btnMasInfo" data-toggle="modal" data-info="1" data-target=".modalInformacion" data-id="'.$theses->first()->id.'">info.</a></li></ul>');
              return json_encode($obj);
           }
         }
         $obj = (object) array('valida' => 0);
         return json_encode($obj);
       }

    }

    public function incomeNumberValidation(Request $request)
    {
       if($request->id=="0"){
         $thesisCopies = ThesisCopy::all()->where('incomeNumber',$request->incomeNumber);
         /* Existe un ejemplar con el mismo numero de ingreso */
         if($thesisCopies->isNotEmpty()){
            $obj = (object) array('valida' => 1 , 'html'=>'<ul class="list-unstyled"><li>Ya existe ,<a href="#" data-dismiss="modal" aria-hidden="true"  class="btnMasInfo" data-info="1" data-toggle="modal" data-target=".modalInformacion" data-id="'.$thesisCopies->first()->thesis->id.'">info.</a></li></ul>');
            return json_encode($obj);
         }
         $obj = (object) array('valida' => 0);
         return json_encode($obj);
       }else{
         $thesisCopies = ThesisCopy::all()->where('incomeNumber',$request->incomeNumber);
         /* Existe un ejemplar con el mismo numero de ingreso */
         if($thesisCopies->isNotEmpty()){
           //Si tal ejemplar no es el mismo error
           if($thesisCopies->first()->id != $request->id){
            $obj = (object) array('valida' => 1 , 'html'=>'<ul class="list-unstyled"><li>Ya existe ,<a href="#" data-dismiss="modal" aria-hidden="true"  class="btnMasInfo" data-info="1" data-toggle="modal" data-target=".modalInformacion" data-id="'.$thesisCopies->first()->thesis->id.'">info.</a></li></ul>');
            return json_encode($obj);
           }
         }
         $obj = (object) array('valida' => 0);
         return json_encode($obj);
       }
    }

    public function barcodeValidation(Request $request)
    {
       if($request->id == "0"){
         $thesisCopies = ThesisCopy::all()->where('barcode',$request->barcode);
         if($thesisCopies->isNotEmpty()){
           $obj = (object) array('valida' => 1, 'html'=>'<ul class="list-unstyled"><li>Ya existe ,<a href="#" data-dismiss="modal" aria-hidden="true"  class="btnMasInfo" data-toggle="modal" data-info="1" data-target=".modalInformacion" data-id="'.$thesisCopies->first()->thesis->id.'">info.</a></li></ul>');
           return json_encode($obj);
         }
         $obj = (object) array('valida' => 0);
         return json_encode($obj);
       }else{
         $thesisCopies = ThesisCopy::all()->where('barcode',$request->barcode);
         /* Existe un ejemplar con el mismo numero de codigo de barras */
         if($thesisCopies->isNotEmpty()){
           //Si tal ejemplar no es el mismo error
           if($thesisCopies->first()->id != $request->id){
             $obj = (object) array('valida' => 1, 'html'=>'<ul class="list-unstyled"><li>Ya existe ,<a href="#" data-dismiss="modal" aria-hidden="true"  class="btnMasInfo" data-toggle="modal" data-info="1" data-target=".modalInformacion" data-id="'.$thesisCopies->first()->thesis->id.'">info.</a></li></ul>');
             return json_encode($obj);
           }
         }
         $obj = (object) array('valida' => 0);
         return json_encode($obj);
       }
    }

    public function validateDeleteCopy(Request $request)
    {
       $thesisCopy = ThesisCopy::find($request->id);
       $obj = (object) array('valida' => 0);
       /* PROBAR ESTA FUNCION CUANDO EL MODULO DE PEDIDOS ESTE LISTO */
       /* Revisar si el ejemplar esta pedido o no */
       // $ordersCopy = OrderCopy::all()->where('materialType',2)->where('material_id',$thesisCopy->thesis_id)->where('copyNumber',$thesisCopy->copy);
       // foreach ($ordersCopy as $orderCopy) {
       //   if($orderCopy->order->state == 0){
       //      $user = $orderCopy->order->user;
       //      $mensaje = "Un usuario ha solicitado la tesis o informe \nUSUARIO :\nNombre : ".$user->name." ".$user->lastName."\nCodigo : ".$user->code."\nEscuela : ".$user->school->name;
       //      $obj = (object) array('valida' => 1, 'titulo'=>'Ejemplar Pedido','texto'=>$mensaje);
       //      break;
       //   }else if($orderCopy->order->state == 1){
       //      $user = $orderCopy->order->user;
       //      $mensaje = "El ejemplar que trata de eliminar se encuentra prestado en este momento. No es posible eliminar , el usuario debe devolver el ejemplar antes de ser eliminado\nUSUARIO :\nNombre : ".$user->name." ".$user->lastName."\nCodigo : ".$user->code."\nEscuela : ".$user->school->name;
       //      $obj = (object) array('valida' => 1, 'titulo'=>'Ejemplar Prestado','texto'=>$mensaje);
       //      break;
       //   }
       // }
       return json_encode($obj);
    }

    public function information($id)
    {
      $thesis = Thesis::find($id);
      return  view('admin.md_theses.information', [
         'thesis' => $thesis,
      ]);
    }


    public function edit($id)
    {
      $thesis = Thesis::find($id);
      $obj = (object) array('thesis' => $thesis ,'thesisSpecification' => $thesis->thesisSpecification , 'thesisCopies' => $thesis->thesisCopies ,  'principalAuthor'=> $thesis->authors->implode('id',','));
      return json_encode($obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $thesis = Thesis::find($request->id);
        $thesis->type = $request->type;
        $thesis->clasification = $request->clasification;
        $thesis->title = $request->title;
        $thesis->school_id = $request->school;
        $thesis->stand_id = $request->stand;
        $thesis->year = $request->year;

        $thesis->thesisSpecification->adviser = $request->adviser;
        $thesis->thesisSpecification->extension = $request->extension;
        $thesis->thesisSpecification->observations = $request->observations;
        $thesis->thesisSpecification->accompaniment = $request->accompaniment;
        $thesis->thesisSpecification->content = $request->content;
        $thesis->thesisSpecification->summary = $request->summary;
        $thesis->thesisSpecification->recomendations = $request->recomendations;
        $thesis->thesisSpecification->conclusions = $request->conclusions;
        $thesis->thesisSpecification->recomendations = $request->recomendations;
        $thesis->thesisSpecification->bibliography = $request->bibliography;
        $thesis->thesisSpecification->keywords = $request->keywords;
        $thesis->thesisSpecification->mention = $request->mention;

        /*+++++++   Edicion de los items nuevo   +++++*/

        // Numero de ejemplares de la tesis antigua
        $numero_copias_antiguo = $thesis->thesisCopies->count();
        // Numero de ejemplares de la tesis editada
        $numero_copias_nuevo = count($request->thesisCopies);

        // Analizo los tres casos
        // CASO I
        // El numero de copias es el mismo . Solo se debe modificar los datos de estos
        // Entra en este caso cuando el numero de ejemplares nuevo es igual al antiguo
        if($numero_copias_antiguo == $numero_copias_nuevo) {
           for ($i = 0; $i < $numero_copias_nuevo; $i ++) {
              $thesis->thesisCopies[$i]->incomeNumber = $request->thesisCopies[$i]['incomeNumber'];
              $thesis->thesisCopies[$i]->barcode = $request->thesisCopies[$i]['barcode'];
              $thesis->thesisCopies[$i]->copy = $i+1;
              $thesis->thesisCopies[$i]->availability = $request->thesisCopies[$i]['availability'];
              $thesis->thesisCopies[$i]->save();
           }
        }

        // CASO II
        //Las copias se reducen . Se elimina una copia y las demas solo se modifican
        if ($numero_copias_nuevo < $numero_copias_antiguo) {
           for ($i = 0; $i < $numero_copias_nuevo; $i ++) {
              $thesis->thesisCopies[$i]->incomeNumber = $request->thesisCopies[$i]['incomeNumber'];
              $thesis->thesisCopies[$i]->barcode = $request->thesisCopies[$i]['barcode'];
              $thesis->thesisCopies[$i]->copy = $i+1;
              $thesis->thesisCopies[$i]->availability = $request->thesisCopies[$i]['availability'];
              $thesis->thesisCopies[$i]->save();
           }
           while ($i < $numero_copias_antiguo) {
              $thesis->thesisCopies[$i]->delete();
              $i ++;
           }
        }

        // CASO III
        //Las copias aumentaron .Se crean nuevas copias y las demas se modifican
        if ($numero_copias_nuevo > $numero_copias_antiguo) {
           for ($i = 0; $i < $numero_copias_antiguo; $i ++) {
              $thesis->thesisCopies[$i]->incomeNumber = $request->thesisCopies[$i]['incomeNumber'];
              $thesis->thesisCopies[$i]->barcode = $request->thesisCopies[$i]['barcode'];
              $thesis->thesisCopies[$i]->copy = $i+1;
              $thesis->thesisCopies[$i]->availability = $request->thesisCopies[$i]['availability'];
              $thesis->thesisCopies[$i]->save();
           }
           while ($i < $numero_copias_nuevo) {
              ThesisCopy::create([
                 'incomeNumber' => $request->thesisCopies[$i]['incomeNumber'],
                 'barcode' => $request->thesisCopies[$i]['barcode'],
                 'copy' => $i+1,
                 'availability' => $request->thesisCopies[$i]['availability'],
                 'thesis_id' => $request->id,
              ]);
              $i ++;
           }
        }

        /*+++++++   Fin de la edicion de los items nuevo    +++++ */
        $thesis->authors()->detach();

        foreach ($request->principalAuthor as $author_id) {
            $thesis->authors()->attach($author_id);
        }
        
        $thesis->save();
        $thesis->thesisSpecification->save();
        return "1";
    }

    //Funcion valida todos los casos de la eliminacion de thesis
    //La primera vez que el admin pulsa el boton de eliminar llama a esta por ajax
    public function destroyValidation($id)
    {
        $thesis = Thesis::find($id);
        /* Encuentra todas las ordernes de la tesis */
        $ordersCopy = OrderCopy::all()->where('materialType',2)->where('material_id',$thesis->id);
        /* Verificar si alguna de sus copias esta pedida o prestada*/
        $valida = true;
        $msj = "El material tiene ejemplares pedidos o prestados";
        foreach ($ordersCopy as $orderCopy) {
          if($orderCopy->order->state == 0 || $orderCopy->order->state == 1){
            $valida = false;
            $user = $orderCopy->order->user;
            $msj = $msj."\nEJEMPLAR ".$orderCopy->copyNumber."\Estado : ".$orderCopy->order->getState()." :\nUsuario : ".$user->name." ".$user->lastName."\nCodigo de usuario : ".$user->code."\nEscuela : ".$user->school->name;
          }
        }
        if($valida){
          $msj = "Se eliminará ".$thesis->getTypeWithArticle()." completamente. \nTitulo : ".$thesis->title."\n Clasificación : ".$thesis->clasification;
          $obj = (object) array('caso' => 0, 'titulo' => 'Estas Seguro?' ,'texto' => $msj);
        }else{
          $obj = (object) array('caso' => 1, 'titulo'=>'No es posible eliminar '.$thesis->getTypeWithArticle(),'texto'=>$msj);
        }
        return json_encode($obj);
    }

    //Tiene tambien la validacion , ya que el codigo jquery(ajax) pudo ser modificado desde el navegador , por eso tiene que pasar por otra validacion
    public function destroy($id)
    {
        $thesis = Thesis::find($id);
        /* Encuentra todas las ordernes de la tesis */
        $ordersCopy = OrderCopy::all()->where('materialType',2)->where('material_id',$thesis->id);
        /* Verificar si alguna de sus copias esta pedida o prestada*/
        $valida = true;
        $msj = "El material tiene ejemplares pedidos o prestados";
        foreach ($ordersCopy as $orderCopy) {
          if($orderCopy->order->state == 0 || $orderCopy->order->state == 1){
            $valida = false;
            $user = $orderCopy->order->user;
            $msj = $msj."\nEJEMPLAR ".$orderCopy->copyNumber."\Estado : ".$orderCopy->order->getState()." :\nUsuario : ".$user->name." ".$user->lastName."\nCodigo de usuario : ".$user->code."\nEscuela : ".$user->school->name;
          }
        }
        if($valida){
          $thesis->thesisSpecification->delete();
          $thesisCopies = $thesis->thesisCopies;
          foreach ($thesisCopies as $thesisCopy) {
            $thesisCopy->delete();
          }
          $thesis->authors()->detach();
          $thesis->delete();

          $obj = (object) array('caso' => 0, 'titulo' => 'Eliminado!"' ,'texto' => 'El material y sus ejemmplares han sido eliminados.');
        }else{
          $obj = (object) array('caso' => 1, 'titulo'=>'No es posible eliminar '.$thesis->getTypeWithArticle(),'texto'=>$msj);
        }
        return json_encode($obj);
    }

    public function viewPDF(){
        $theses = Thesis::all();
        $pdf = PDF::loadView('admin.md_theses.export.pdf',[
          'theses' => $theses,
        ]);
        $pdf->setPaper("A4", "landscape");
        return $pdf->stream('archivo.pdf');
    }

    public function exportPDF(){
        $theses = Thesis::all();
        $pdf = PDF::loadView('admin.md_theses.export.pdf',[
          'theses' => $theses,
        ]);
        $pdf->setPaper("A4", "landscape");
        return $pdf->download('archivo.pdf');
    }

    public function exportExcel(){
       return Excel::download(new ThesisExport, 'thesis.xlsx');
    }

}
