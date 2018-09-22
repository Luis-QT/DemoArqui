<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Thesis;
use App\ThesisCopy;
use App\Order;
use App\OrderCopy;
use App\ThesisSpecification;
use App\Author;
use DateTime;
use Carbon\Carbon;


class ThesisController extends Controller
{
    public function index()
    {	
      $theses = Thesis::all();
      $searchThesis = view('user.md_order_thesis.search.viewSearch1',[
          'theses' => $theses,
          'search' => "",
          'school' => 0,
          'typeThesis' => 0,
          'year' => "",
          'mention' => "",
          'highlightSearch'=> 0,
      ]);
      
      $show = view('user.md_order_thesis.show',[
        'searchThesis' => $searchThesis,
      ]);

    	return view('user.md_order_thesis.index',[
        'show' => $show,
    	]);
    }


    public function search(Request $request){
      $highlightSearch = Auth::User()->configuration->highlightSearch;

      /* BUSQUEDA POR TITULO */
      if($request->typeSearch == '1'){
        $theses = Thesis::where('thesis.title', 'like', '%'.$request->search.'%');
        /* Avanzada */
        if($request->typeThesis!=0){
          $theses->where('thesis.type',"=",$request->typeThesis);
        }
        if($request->school!=0){
          $theses->where('thesis.school_id',"=",$request->school);
        }
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $theses->where('thesis.year',"=",$request->year);
          }else{
            $theses->where('thesis.year',">",$years[0]-1)->where('thesis.year',"<",$years[1]+1);
          }
        }
        if($request->mention!=""){
          $theses->join('thesisSpecifications', 'thesis.id', '=', 'thesisSpecifications.thesis_id')->where('thesisSpecifications.mention','like','%'.$request->mention.'%');
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_thesis.search.viewSearch1',[
          'theses' => $theses->get(),
          'search' => $request->search,
          'school' => $request->school,
          'typeThesis' => $request->typeThesis,
          'year' => $request->year,
          'mention' => $request->mention,
          'highlightSearch'=>$highlightSearch,
        ]);
      }else if ($request->typeSearch == "2") {

        $authors = Author::where('name', 'like', '%'.$request->search.'%')->get();
        $theses = collect([]);
        foreach ($authors as $author) {
          $theses = $theses->concat($author->theses);
        }
        $theses  = $theses->unique('id');
        /* Avanzada */
        if($request->typeThesis!=0){
          $theses = $theses->where('type',"=",$request->typeThesis);
        }
        if($request->school!=0){
          $theses = $theses->where('school_id',"=",$request->school);
        }
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $theses = $theses->where('year',"=",$request->year);
          }else{
            $theses = $theses->where('year',">",$years[0]-1)->where('year',"<",$years[1]+1);
          }
        }
        if($request->mention!=""){
          $arreglo = collect([]);
          foreach ($theses as $thesis) {
            if(stripos($thesis->thesisSpecification->mention,$this->normaliza($request->mention)) !== FALSE){
              $arreglo->push($thesis);
            }
          }
          $theses = $arreglo;
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_thesis.search.viewSearch1',[
          'theses' => $theses,
          'search' => $request->search,
          'school' => $request->school,
          'typeThesis' => $request->typeThesis,
          'year' => $request->year,
          'mention' => $request->mention,
          'highlightSearch'=>$highlightSearch,
        ]);
      }else if ($request->typeSearch == "3") {
        
        $theses = Thesis::join('thesisSpecifications', 'thesis.id', '=', 'thesisSpecifications.thesis_id')->where('thesisSpecifications.adviser', 'like', '%'.$request->search.'%');

        /* Avanzada */
        if($request->typeThesis!=0){
          $theses->where('thesis.type',"=",$request->typeThesis);
        }
        if($request->school!=0){
          $theses->where('thesis.school_id',"=",$request->school);
        }
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $theses->where('thesis.year',"=",$request->year);
          }else{
            $theses->where('thesis.year',">",$years[0]-1)->where('thesis.year',"<",$years[1]+1);
          }
        }
        if($request->mention!=""){
          $theses->where('thesisSpecifications.mention','like','%'.$request->mention.'%');
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_thesis.search.viewSearch1',[
          'theses' => $theses->get(),
          'search' => $request->search,
          'school' => $request->school,
          'typeThesis' => $request->typeThesis,
          'year' => $request->year,
          'mention' => $request->mention,
          'highlightSearch'=>$highlightSearch,
        ]);
      }else if ($request->typeSearch == "4") {
        
        $theses = Thesis::join('thesisSpecifications', 'thesis.id', '=', 'thesisSpecifications.thesis_id')->where('thesisSpecifications.keywords', 'like', '%'.$request->search.'%');

        /* Avanzada */
        if($request->typeThesis!=0){
          $theses->where('thesis.type',"=",$request->typeThesis);
        }
        if($request->school!=0){
          $theses->where('thesis.school_id',"=",$request->school);
        }
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $theses->where('thesis.year',"=",$request->year);
          }else{
            $theses->where('thesis.year',">",$years[0]-1)->where('thesis.year',"<",$years[1]+1);
          }
        }
        if($request->mention!=""){
          $theses->where('thesisSpecifications.mention','like','%'.$request->mention.'%');
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_thesis.search.viewSearch1',[
          'theses' => $theses->get(),
          'search' => $request->search,
          'school' => $request->school,
          'typeThesis' => $request->typeThesis,
          'year' => $request->year,
          'mention' => $request->mention,
          'highlightSearch'=>$highlightSearch,
        ]);
      }else if ($request->typeSearch == "5") {
        
        $theses = Thesis::join('thesisCopies', 'thesis.id', '=', 'thesisCopies.thesis_id')->where('thesisCopies.incomeNumber', 'like', '%'.$request->search.'%');

        /* Avanzada */
        if($request->typeThesis!=0){
          $theses->where('thesis.type',"=",$request->typeThesis);
        }
        if($request->school!=0){
          $theses->where('thesis.school_id',"=",$request->school);
        }
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $theses->where('thesis.year',"=",$request->year);
          }else{
            $theses->where('thesis.year',">",$years[0]-1)->where('thesis.year',"<",$years[1]+1);
          }
        }
        if($request->mention!=""){
          $theses->join('thesisSpecifications', 'thesis.id', '=', 'thesisSpecifications.thesis_id')->where('thesisSpecifications.mention','like','%'.$request->mention.'%');
        }
        /* Corrigiendo ids */
        $theses = $theses->get()->unique('thesis_id');
        foreach ($theses as $thesis) {
          $thesis->id = $thesis->thesis_id;
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_thesis.search.viewSearch2',[
          'theses' => $theses,
          'search' => $request->search,
          'school' => $request->school,
          'typeThesis' => $request->typeThesis,
          'year' => $request->year,
          'mention' => $request->mention,
        ]);
      }else if ($request->typeSearch == "6") {
        
        $theses = Thesis::join('thesisCopies', 'thesis.id', '=', 'thesisCopies.thesis_id')->where('thesisCopies.barcode', 'like', '%'.$request->search.'%');

        /* Avanzada */
        if($request->typeThesis!=0){
          $theses->where('thesis.type',"=",$request->typeThesis);
        }
        if($request->school!=0){
          $theses->where('thesis.school_id',"=",$request->school);
        }
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $theses->where('thesis.year',"=",$request->year);
          }else{
            $theses->where('thesis.year',">",$years[0]-1)->where('thesis.year',"<",$years[1]+1);
          }
        }
        if($request->mention!=""){
          $theses->join('thesisSpecifications', 'thesis.id', '=', 'thesisSpecifications.thesis_id')->where('thesisSpecifications.mention','like','%'.$request->mention.'%');
        }
        /* Corrigiendo ids */
        $theses = $theses->get()->unique('thesis_id');
        foreach ($theses as $thesis) {
          $thesis->id = $thesis->thesis_id;
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_thesis.search.viewSearch2',[
          'theses' => $theses,
          'search' => $request->search,
          'school' => $request->school,
          'typeThesis' => $request->typeThesis,
          'year' => $request->year,
          'mention' => $request->mention,
        ]);
      }

      return $view;
    }

    public function information($id)
    {
      $thesis = Thesis::find($id);
      return  view('user.md_order_thesis.information', [
         'thesis' => $thesis,
      ]);
    }

    public function order(Request $request, $id)
    {
       // CASO 0 : Pedido correcto
       // CASO 1 : Pedido incorrecto
       $caso = 1;
       $user = Auth::User();
       $thesisCopy = ThesisCopy::find($id);
       $bandera = false;

       //VALIDACION DE ESTADOS DE USUARIO
       if($user->state == 2){
         $bandera = true;
         $titulo = "Usuario Castigado";
         $contenido = "Lo sentimos . Usted esta castigado, no puede realizar pedidos";
       }

       //RETORNO ESTADO DE ERROR USUARIO
       if($bandera){
         //retornar error
         $obj = (object) array('caso' => $caso, 'titulo'=>$titulo,'texto'=>$contenido);
         return json_encode($obj);
       }

       //VALIDACION DE ESTADOS DE EJEMPLAR
       if($thesisCopy->availability == 0){//deshabilitado
         $bandera = true;
         $titulo = "Ejemplar Desabilitado";
         $contenido = "Lo sentimos . El ejempalr se encuentra desabilitado";
       }else if($thesisCopy->availability == 3){//en espera
         $bandera = true;
         $titulo = "Ejemplar en espera";
         $contenido = "Lo sentimos , el ejemplar ya ha sido solicitado por un usuario";
       }else if($thesisCopy->availability==2){//prestado
         $bandera = true;
         $titulo = "Ejemplar ya prestado";
         $contenido = "Lo sentimos , este ejemplar no se encuentra disponible";
       }

       //RETORNO ESTADO DE ERROR EJEMPLAR
       if($bandera){
         //retornar error
         $obj = (object) array('caso' => $caso, 'titulo'=>$titulo,'texto'=>$contenido);
         return json_encode($obj);
       }

       //VALIDACION DE CANTIDAD DE PEDIDOS EN ESPERA
       /* Solo puede prestarse una tesis */
       $userType = $user->userType;
       $orders = $user->orders->where('state',0);
       if($orders->isNotEmpty()){
         $bandera = true;
         $titulo = "Pedido No Procede";
         $contenido = "Solo puede pedir un material bibliográfico, tiene un pedido pendiente el cual esta siendo atendido.";
         $orderCopy = $orders->first()->orderCopy;
         if($orderCopy->materialType == 1){
           $book = Book::find($orderCopy->material_id);
           $contenido.= "\n Material : Libro"."\nTítulo : ".$book->title;
         }elseif ($orderCopy->materialType == 2) {
           $thesis = Thesis::find($orderCopy->material_id);
           if($thesis->type==1){
             $contenido.= "\n Material : Tesis"."\nTítulo : ".$thesis->title;
           }elseif ($thesis->type==2) {
             $contenido.= "\n Material : Informe"."\nTítulo : ".$thesis->title;
           }
         }elseif($orderCopy->materialType == 3){
           $magazine = Magazine::find($orderCopy->material_id);
           $contenido.= "\n Material : Revista"."\nTítulo : ".$magazine->title;
         }
       }

       //RETORNO ESTADO DE ERROR CANTIDAD DE PEDIDOS EN ESPERA
       if($bandera){
         //retornar error
         $obj = (object) array('caso' => $caso, 'titulo'=>$titulo,'texto'=>$contenido);
         return json_encode($obj);
       }

       //VALIDACION DE CANTIDAD DE EJEMPLARES PRESTADOS
       /* Solo puede prestarse una tesis */
       $userType = $user->userType;
       $orders = $user->orders->where('state',1);
       if($orders->isNotEmpty()){
         $bandera = true;
         $titulo = "Pedido No Procede";
         $contenido = "Solo puede pedir un material bibliográfico, tiene un prestamo pendiente.";
         $orderCopy = $orders->first()->orderCopy;
         if($orderCopy->materialType == 1){
           $book = Book::find($orderCopy->material_id);
           $contenido = "\n Material : Libro"."\nTítulo".$book->title;
         }elseif ($orderCopy->materialType == 2) {
           $thesis = Thesis::find($orderCopy->material_id);
           if($thesis->type==1){
             $contenido = "\n Material : Tesis"."\nTítulo".$thesis->title;
           }elseif ($thesis->type==2) {
             $contenido = "\n Material : Informe"."\nTítulo".$thesis->title;
           }
         }elseif($orderCopy->materialType == 3){
           $magazine = Magazine::find($orderCopy->material_id);
           $contenido = "\n Material : Revista"."\nTítulo".$magazine->title;
         }
       }

       //RETORNO ESTADO DE ERROR CANTIDAD DE EJEMPLARES PRESTADOS
       if($bandera){
         //retornar error
         $obj = (object) array('caso' => $caso, 'titulo'=>$titulo,'texto'=>$contenido);
         return json_encode($obj);
       }


       /* SE REALIZA EL PEDIDO APARENTEMENTE*/
       $caso = 0;
       $fechaFinalDeseada= new DateTime ('America/Lima');
       $fechaFinalDeseada=date_time_set($fechaFinalDeseada, 24, 0, 0);

       $order = Order::create([
          'startDateOrder' => Carbon::now('America/Lima'),
          'state' => 0, 
          'place' => 0, 
          'user_id' => $user->id,
          'cycle_id' => 1,
       ]);

       OrderCopy::create([
          'copy_id' => $id,
          'copyNumber' =>  $thesisCopy->copy,
          'materialType' => 2,
          'material_id' =>  $thesisCopy->thesis_id,
          'order_id' => $order->id,
       ]);

       //Se cambia el estado de la tesis  : En espera
       $thesisCopy->availability = 3;
       $thesisCopy->save();

       //Mensaje de confirmacion
       $titulo = "Pedido Exitoso !!";
       if($thesisCopy->thesis->type == 1){
         $contenido = "La tesis se ha pedido , por favor espere hasta que lo atiendan";
       }elseif($thesisCopy->thesis->type == 2){
         $contenido = "El informe se ha pedido , por favor espere hasta que lo atiendan";
       }

       //ULTIMO INICIO VALIDACION
       //Algormitmo encargado de verificar y eliminar los pedidos repetidos : pedidos que apuntan al
       //mismo ejemplar
       /* Obtengo todas orderCopy que sean del ejemplar que se pidio */
       $orderCopies = OrderCopy::where('material_id',$thesisCopy->thesis_id)->where('materialType',2)->where('copyNumber',$thesisCopy->copy)->get();
       /*Verifico si alguno de estos ordersCopy tiene el state en 0*/
       /*En teoria solo deberia haber un elemento en el arreglo*/
       $arreglo = collect();
       foreach ($orderCopies as $orderCopy) {
         if($orderCopy->order->state == 0){
           $arreglo->push($orderCopy->order);
         }
       }
       /* Si hay mas de un elemento eliminar el que tenga el menor tiempo*/
       if($arreglo->count()>1){
         $arreglo = $arreglo->sortBy('startDateOrder');
         $order = $arreglo->first(); 
         /* Elimino todos menos el primero*/
         foreach ($arreglo as $i => $elemento) {
           if($i!=0){
             $elemento->orderCopy->delete();
             $elemento->delete();
           }
         }
         /* Verifico que el pedido sobreviviente sea el del usuario */
         if($order->user_id != $user->id){
           $caso = 1;
           $bandera = false;
           $titulo = "Pedido no procede";
           $contenido = "Lo sentimos , el ejemplar ya ha sido solicitado por otro usuario";
         }
       }

       /* FINAL DE OBSERVACION */
       //retornar mensaje final , puede ser error o no
       $obj = (object) array('caso' => $caso, 'titulo'=>$titulo,'texto'=>$contenido);
       return json_encode($obj);
    }

    private function normaliza($cadena){
      $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
      ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
          $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
      bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
          $cadena = utf8_decode($cadena);
          $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
          $cadena = strtolower($cadena);
          return utf8_encode($cadena);
    }

}
