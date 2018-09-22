<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\BookCopy;
use App\Thesis;
use App\ThesisCopy;
use App\Order;
use App\OrderCopy;
use App\ThesisSpecification;
use App\Author;
use DateTime;
use Carbon\Carbon;


class BookController extends Controller
{
    public function index()
    {	
      $books = Book::all()->take(50);
      $searchBook = view('user.md_order_book.search.viewSearch1',[
          'books' => $books,
          'search' => "",
          'year' => "",
          'edition' => "",
          'highlightSearch'=>0,
      ]);
      
      $show = view('user.md_order_book.show',[
        'searchBook' => $searchBook,
      ]);

    	return view('user.md_order_book.index',[
        'show' => $show,
    	]);
    }

    public function search(Request $request){
      $highlightSearch = Auth::User()->configuration->highlightSearch;
      /* BUSQUEDA POR TITULO */
      if($request->typeSearch == '1'){
        $books = Book::where('books.title', 'like', '%'.$request->search.'%');
        /* Avanzada */
        if($request->edition!=""){
          $books->where('books.edition',"=",$request->edition);
        }
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $books->where('books.year',"=",$request->year);
          }else{
            $books->where('books.year',">",$years[0]-1)->where('books.year',"<",$years[1]+1);
          }
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_book.search.viewSearch1',[
          'books' => $books->get(),
          'search' => $request->search,
          'year' => $request->year,
          'edition' => $request->edition,
          'highlightSearch'=>$highlightSearch,
        ]);

      }else if ($request->typeSearch == "2") {
        $authors = Author::where('name', 'like', '%'.$request->search.'%')->get();
        $books = collect([]);
        foreach ($authors as $author) {
          $books = $books->concat($author->getPrincipalBook());
        }
        $books  = $books->unique('id');
        /* Avanzada */
        if($request->edition!=""){
          $books->where('edition',"=",$request->edition);
        }
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $books = $books->where('year',"=",$request->year);
          }else{
            $books = $books->where('year',">",$years[0]-1)->where('year',"<",$years[1]+1);
          }
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_book.search.viewSearch1',[
          'books' => $books,
          'search' => $request->search,
          'year' => $request->year,
          'edition' => $request->edition,
          'highlightSearch'=>$highlightSearch,
        ]);
      }else if ($request->typeSearch == "3") {
        $authors = Author::where('name', 'like', '%'.$request->search.'%')->get();
        $books = collect([]);
        foreach ($authors as $author) {
          $books = $books->concat($author->getSecondaryBook());
        }
        $books  = $books->unique('id');
        /* Avanzada */
        if($request->edition!=""){
          $books->where('edition',"=",$request->edition);
        }
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $books = $books->where('year',"=",$request->year);
          }else{
            $books = $books->where('year',">",$years[0]-1)->where('year',"<",$years[1]+1);
          }
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_book.search.viewSearch1',[
          'books' => $books,
          'search' => $request->search,
          'year' => $request->year,
          'edition' => $request->edition,
          'highlightSearch'=>$highlightSearch,
        ]);
      }else if ($request->typeSearch == "4") {
        
        $books = Book::join('bookSpecifications', 'books.id', '=', 'bookSpecifications.book_id')->where('bookSpecifications.keywords', 'like', '%'.$request->search.'%');

        /* Avanzada */
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $theses->where('thesis.year',"=",$request->year);
          }else{
            $theses->where('thesis.year',">",$years[0]-1)->where('thesis.year',"<",$years[1]+1);
          }
        }
        if($request->edition!=""){
          $theses->where('books.edition','=',$request->mention);
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_book.search.viewSearch1',[
          'books' => $books->get(),
          'search' => $request->search,
          'year' => $request->year,
          'edition' => $request->edition,
          'highlightSearch'=>$highlightSearch,
        ]);
      }else if ($request->typeSearch == "5") {
        $books = Book::join('book_copies', 'books.id', '=', 'book_copies.book_id')->where('book_copies.incomeNumber', 'like', '%'.$request->search.'%');
        /* Avanzada */
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $theses->where('thesis.year',"=",$request->year);
          }else{
            $theses->where('thesis.year',">",$years[0]-1)->where('thesis.year',"<",$years[1]+1);
          }
        }
        if($request->edition!=""){
          $theses->where('books.edition','=',$request->mention);
        }
        /* Corrigiendo ids */
        $books = $books->get()->unique('book_id');
        foreach ($books as $book) {
          $book->id = $book->book_id;
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_book.search.viewSearch2',[
          'books' => $books,
          'search' => $request->search,
          'year' => $request->year,
          'edition' => $request->edition,
        ]);
      }else if ($request->typeSearch == "6") {
        
        $books = Book::join('book_copies', 'books.id', '=', 'book_copies.book_id')->where('book_copies.barcode', 'like', '%'.$request->search.'%');

        /* Avanzada */
        if($request->year!=""){
          $years = explode("-", str_replace(" ", "", $request->year));
          if(count($years)==1){
            $theses->where('thesis.year',"=",$request->year);
          }else{
            $theses->where('thesis.year',">",$years[0]-1)->where('thesis.year',"<",$years[1]+1);
          }
        }
        if($request->edition!=""){
          $theses->where('books.edition','=',$request->mention);
        }
        /* Corrigiendo ids */
        $books = $books->get()->unique('book_id');
        foreach ($books as $book) {
          $book->id = $book->book_id;
        }
        /* Fin busqueda avanzada */
        $view = view('user.md_order_book.search.viewSearch2',[
          'books' => $books,
          'search' => $request->search,
          'year' => $request->year,
          'edition' => $request->edition,
        ]);
      }

      return $view;
    }

    public function information($id)
    {
      $book = Book::find($id);
      return  view('user.md_order_book.information', [
         'book' => $book,
      ]);
    }

    public function order(Request $request, $id)
    {
       // CASO 0 : Pedido correcto
       // CASO 1 : Pedido incorrecto
       $caso = 1;
       $user = Auth::User();
       $bookCopy = BookCopy::find($id);
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
       if($bookCopy->availability == 0){//deshabilitado
         $bandera = true;
         $titulo = "Ejemplar Desabilitado";
         $contenido = "Lo sentimos . El ejempalar se encuentra desabilitado";
       }else if($bookCopy->availability == 3){//en espera
         $bandera = true;
         $titulo = "Ejemplar en espera";
         $contenido = "Lo sentimos , el ejemplar ya ha sido solicitado por un usuario";
       }else if($bookCopy->availability==2){//prestado
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
         $contenido = "Solo puede pedir un material bibliográfico, tiene un préstamo pendiente.";
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
          'place' => $request->place, 
          'user_id' => $user->id,
          'cycle_id' => 1,
       ]);

       OrderCopy::create([
          'copy_id' => $id,
          'copyNumber' =>  $bookCopy->copy,
          'materialType' => 1,
          'material_id' =>  $bookCopy->book_id,
          'order_id' => $order->id,
       ]);

       //Se cambia el estado de la tesis  : En espera
       $bookCopy->availability = 3;
       $bookCopy->save();

       //Mensaje de confirmacion
       $titulo = "Pedido Exitoso !!";
       $contenido = "El libro se ha pedido , por favor espere hasta que lo atiendan";

       //ULTIMO INICIO VALIDACION
       //Algormitmo encargado de verificar y eliminar los pedidos repetidos : pedidos que apuntan al
       //mismo ejemplar
       /* Obtengo todas orderCopy que sean del ejemplar que se pidio */
       $orderCopies = OrderCopy::where('material_id',$bookCopy->book_id)->where('materialType',1)->where('copyNumber',$bookCopy->copy)->get();
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
