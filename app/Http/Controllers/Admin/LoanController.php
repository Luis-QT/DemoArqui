<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Order as Order;
use App\Loan as Loan;
use App\ThesisCopy as ThesisCopy;
use App\Thesis as Thesis;
use App\Magazine as Magazine;
use App\MagazineCopy as MagazineCopy;
use App\Editorial as Editorial;
use App\User as User;
use App\BookCopy as BookCopy;
use App\Book as Book;
use App\Profile as Profile;
use DateTime;

class LoanController extends Controller
{

  public function index(Request $request)
  {
    //El metodo where funciona como filtro deL metodo all
    $pedidos = Order::where('state',0)->get();
    $prestamos = Order::where('state',1)->get();

    $showPedidos = view('admin.md_prestamos.showPedidos',[
          'pedidos' => $pedidos,
          'prestar' => true,
          'rechazar' => true
    ]);
    
    $showPrestamo = view('admin.md_prestamos.showPrestamo',[
          'prestamos' => $prestamos,
          'recibir' => true,
          'masTiempo' => true
        ]);
    return view('admin.md_prestamos.index', [
       'showPedidos'     => $showPedidos,
       'showPrestamo'    => $showPrestamo,
    ]);
  }


  //Realiza el prestamo de una copia , por ahora solo se puede para libros
  //Para agregar mas tipos , solo modificar el switch.
  public function prestar(Request $request)
  {
    $pedido = Order::find($request->id);
    //Cambiando el estado del pedido a aceptado
    $pedido->state = 1;
    //Poniendo la fecha en la que fue prestado
    $pedido->startLoan = Carbon::now('America/Lima');
    //Indica si el usuario quiere devolver el libro
    $pedido->return = false;
    //Se guarda el empleado que acepta el pedido (prestamo)
    $pedido->employeeLoanId = $request->employeeId;
    //Se modifica la disponibilidad de la copia
    $fechaFinalDeseada= new DateTime ('America/Lima');
    $estadisticaUsuario = \App\StatisticalUser::dameEstadisticaUserConConsistencia($pedido->userId);

    switch ($pedido->typeItem) {
      case 1:
         $bookCopy = BookCopy::find($pedido->copyId);
         $bookCopy->availability = 2;
         $bookCopy->save();
         $fechaFinalDeseada=date_time_set($fechaFinalDeseada, 20, 0, 0);
         $estadistica = \App\StatisticalMaterial::dameEstadisticaMaterialConConsistencia($pedido->typeItem, $bookCopy->bookId);
         $estadisticaTipo = \App\StatisticalTypeMaterial::dameEstadisticaTipoMaterialConConsistencia($pedido->typeItem);
         if($pedido->place){
           //pedidos en domicilio
           $dias = $pedido->user->userType->timeBookLoan;
           $fechaFinalDeseada->modify('+'.$dias.' days');
           $bandera=\App\StatisticalUser::llenarDiaDeHoy($estadisticaUsuario->id,6);
           $estadisticaUsuario->loanDomicilioBook=$estadisticaUsuario->loanDomicilioBook+1;

           if($pedido->user->userType->type=="PreGrado"){
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,6);
             $estadistica->loanDomicilioPreGrado=$estadistica->loanDomicilioPreGrado+1;
             $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,6);
             $estadisticaTipo->loanDomicilioPreGrado=$estadisticaTipo->loanDomicilioPreGrado+1;
           }else if($pedido->user->userType->type=="PostGrado"){
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,7);
             $estadistica->loanDomicilioPostGrado=$estadistica->loanDomicilioPostGrado+1;
             $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,7);
             $estadisticaTipo->loanDomicilioPostGrado=$estadisticaTipo->loanDomicilioPostGrado+1;
           }else if($pedido->user->userType->type=="Externo"){
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,8);
              $estadistica->loanDomicilioExterno=$estadistica->loanDomicilioExterno+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,8);
              $estadisticaTipo->loanDomicilioExterno=$estadisticaTipo->loanDomicilioExterno+1;
           }else if($pedido->user->userType->type=="Profesor"){
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,9);
             $estadistica->loanDomicilioProfesor=$estadistica->loanDomicilioProfesor+1;
             $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,9);
             $estadisticaTipo->loanDomicilioProfesor=$estadisticaTipo->loanDomicilioProfesor+1;
           }else{
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,10);
             $estadistica->loanDomicilioTrabajador=$estadistica->loanDomicilioTrabajador+1;
             $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,10);
             $estadisticaTipo->loanDomicilioTrabajador=$estadisticaTipo->loanDomicilioTrabajador+1;
           }
         }else{
           //pedido en sala
           $bandera=\App\StatisticalUser::llenarDiaDeHoy($estadisticaUsuario->id,2);
           $estadisticaUsuario->loanSalaBook=$estadisticaUsuario->loanSalaBook+1;
           if($pedido->user->userType->type=="PreGrado"){
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,1);
             $estadistica->loanSalaPreGrado=$estadistica->loanSalaPreGrado+1;
             $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,1);
             $estadisticaTipo->loanSalaPreGrado=$estadisticaTipo->loanSalaPreGrado+1;
           }else if($pedido->user->userType->type=="PostGrado"){
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,2);
             $estadistica->loanSalaPostGrado=$estadistica->loanSalaPostGrado+1;
             $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,2);
             $estadisticaTipo->loanSalaPostGrado=$estadisticaTipo->loanSalaPostGrado+1;
           }else if($pedido->user->userType->type=="Externo"){
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,3);
              $estadistica->loanSalaExterno=$estadistica->loanSalaExterno+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,3);
              $estadisticaTipo->loanSalaExterno=$estadisticaTipo->loanSalaExterno+1;
           }else if($pedido->user->userType->type=="Profesor"){
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,4);
             $estadistica->loanSalaProfesor=$estadistica->loanSalaProfesor+1;
             $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,4);
             $estadisticaTipo->loanSalaProfesor=$estadisticaTipo->loanSalaProfesor+1;
           }else{
             $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,5);
             $estadistica->loanSalaTrabajador=$estadistica->loanSalaTrabajador+1;
             $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,5);
             $estadisticaTipo->loanSalaTrabajador=$estadisticaTipo->loanSalaTrabajador+1;
           }
         }
         break;

         case 2:
            $magazineCopy = MagazineCopy::find($pedido->copyId);
            $magazineCopy->availability = "Prestado";
            $magazineCopy->save();
            $fechaFinalDeseada=date_time_set($fechaFinalDeseada, 20, 0, 0);
            $estadistica = \App\StatisticalMaterial::dameEstadisticaMaterialConConsistencia($pedido->typeItem, $magazineCopy->magazineId);
            $estadisticaTipo = \App\StatisticalTypeMaterial::dameEstadisticaTipoMaterialConConsistencia($pedido->typeItem);
            if($pedido->place){
              //pedidos en domicilio
              $dias = $pedido->user->userType->timeMagazineLoan;
              $fechaFinalDeseada->modify('+'.$dias.' days');
              $bandera=\App\StatisticalUser::llenarDiaDeHoy($estadisticaUsuario->id,6);
              $estadisticaUsuario->loanDomicilioMagazine=$estadisticaUsuario->loanDomicilioMagazine+1;

              if($pedido->user->userType->type=="PreGrado"){
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,6);
                $estadistica->loanDomicilioPreGrado=$estadistica->loanDomicilioPreGrado+1;
                $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,6);
                $estadisticaTipo->loanDomicilioPreGrado=$estadisticaTipo->loanDomicilioPreGrado+1;
              }else if($pedido->user->userType->type=="PostGrado"){
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,7);
                $estadistica->loanDomicilioPostGrado=$estadistica->loanDomicilioPostGrado+1;
                $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,7);
                $estadisticaTipo->loanDomicilioPostGrado=$estadisticaTipo->loanDomicilioPostGrado+1;
              }else if($pedido->user->userType->type=="Externo"){
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,8);
                 $estadistica->loanDomicilioExterno=$estadistica->loanDomicilioExterno+1;
                 $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,8);
                 $estadisticaTipo->loanDomicilioExterno=$estadisticaTipo->loanDomicilioExterno+1;
              }else if($pedido->user->userType->type=="Profesor"){
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,9);
                $estadistica->loanDomicilioProfesor=$estadistica->loanDomicilioProfesor+1;
                $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,9);
                $estadisticaTipo->loanDomicilioProfesor=$estadisticaTipo->loanDomicilioProfesor+1;
              }else{
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,10);
                $estadistica->loanDomicilioTrabajador=$estadistica->loanDomicilioTrabajador+1;
                $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,10);
                $estadisticaTipo->loanDomicilioTrabajador=$estadisticaTipo->loanDomicilioTrabajador+1;
              }
            }else{
              //pedido en sala
              $bandera=\App\StatisticalUser::llenarDiaDeHoy($estadisticaUsuario->id,2);
              $estadisticaUsuario->loanSalaMagazine=$estadisticaUsuario->loanSalaMagazine+1;
              if($pedido->user->userType->type=="PreGrado"){
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,1);
                $estadistica->loanSalaPreGrado=$estadistica->loanSalaPreGrado+1;
                $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,1);
                $estadisticaTipo->loanSalaPreGrado=$estadisticaTipo->loanSalaPreGrado+1;
              }else if($pedido->user->userType->type=="PostGrado"){
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,2);
                $estadistica->loanSalaPostGrado=$estadistica->loanSalaPostGrado+1;
                $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,2);
                $estadisticaTipo->loanSalaPostGrado=$estadisticaTipo->loanSalaPostGrado+1;
              }else if($pedido->user->userType->type=="Externo"){
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,3);
                 $estadistica->loanSalaExterno=$estadistica->loanSalaExterno+1;
                 $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,3);
                 $estadisticaTipo->loanSalaExterno=$estadisticaTipo->loanSalaExterno+1;
              }else if($pedido->user->userType->type=="Profesor"){
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,4);
                $estadistica->loanSalaProfesor=$estadistica->loanSalaProfesor+1;
                $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,4);
                $estadisticaTipo->loanSalaProfesor=$estadisticaTipo->loanSalaProfesor+1;
              }else{
                $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,5);
                $estadistica->loanSalaTrabajador=$estadistica->loanSalaTrabajador+1;
                $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,5);
                $estadisticaTipo->loanSalaTrabajador=$estadisticaTipo->loanSalaTrabajador+1;
              }
            }
            break;

            case 4:
               $compendiumCopy = CompendiumCopy::find($pedido->copyId);
               $compendiumCopy->availability = "Prestado";
               $compendiumCopy->save();
               $fechaFinalDeseada=date_time_set($fechaFinalDeseada, 20, 0, 0);
               $estadistica = \App\StatisticalMaterial::dameEstadisticaMaterialConConsistencia($pedido->typeItem, $compendiumCopy->compendiumId);
               $estadisticaTipo = \App\StatisticalTypeMaterial::dameEstadisticaTipoMaterialConConsistencia($pedido->typeItem);
               if($pedido->place){
                 //pedidos en domicilio
                 $dias = $pedido->user->userType->timeCompendiumLoan;
                 $fechaFinalDeseada->modify('+'.$dias.' days');
                 $bandera=\App\StatisticalUser::llenarDiaDeHoy($estadisticaUsuario->id,6);
                 $estadisticaUsuario->loanDomicilioCompendium=$estadisticaUsuario->loanDomicilioCompendium+1;

                 if($pedido->user->userType->type=="PreGrado"){
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,6);
                   $estadistica->loanDomicilioPreGrado=$estadistica->loanDomicilioPreGrado+1;
                   $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,6);
                   $estadisticaTipo->loanDomicilioPreGrado=$estadisticaTipo->loanDomicilioPreGrado+1;
                 }else if($pedido->user->userType->type=="PostGrado"){
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,7);
                   $estadistica->loanDomicilioPostGrado=$estadistica->loanDomicilioPostGrado+1;
                   $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,7);
                   $estadisticaTipo->loanDomicilioPostGrado=$estadisticaTipo->loanDomicilioPostGrado+1;
                 }else if($pedido->user->userType->type=="Externo"){
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,8);
                    $estadistica->loanDomicilioExterno=$estadistica->loanDomicilioExterno+1;
                    $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,8);
                    $estadisticaTipo->loanDomicilioExterno=$estadisticaTipo->loanDomicilioExterno+1;
                 }else if($pedido->user->userType->type=="Profesor"){
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,9);
                   $estadistica->loanDomicilioProfesor=$estadistica->loanDomicilioProfesor+1;
                   $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,9);
                   $estadisticaTipo->loanDomicilioProfesor=$estadisticaTipo->loanDomicilioProfesor+1;
                 }else{
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,10);
                   $estadistica->loanDomicilioTrabajador=$estadistica->loanDomicilioTrabajador+1;
                   $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,10);
                   $estadisticaTipo->loanDomicilioTrabajador=$estadisticaTipo->loanDomicilioTrabajador+1;
                 }
               }else{
                 //pedido en sala
                 $bandera=\App\StatisticalUser::llenarDiaDeHoy($estadisticaUsuario->id,2);
                 $estadisticaUsuario->loanSalaCompendium=$estadisticaUsuario->loanSalaCompendium+1;
                 if($pedido->user->userType->type=="PreGrado"){
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,1);
                   $estadistica->loanSalaPreGrado=$estadistica->loanSalaPreGrado+1;
                   $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,1);
                   $estadisticaTipo->loanSalaPreGrado=$estadisticaTipo->loanSalaPreGrado+1;
                 }else if($pedido->user->userType->type=="PostGrado"){
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,2);
                   $estadistica->loanSalaPostGrado=$estadistica->loanSalaPostGrado+1;
                   $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,2);
                   $estadisticaTipo->loanSalaPostGrado=$estadisticaTipo->loanSalaPostGrado+1;
                 }else if($pedido->user->userType->type=="Externo"){
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,3);
                    $estadistica->loanSalaExterno=$estadistica->loanSalaExterno+1;
                    $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,3);
                    $estadisticaTipo->loanSalaExterno=$estadisticaTipo->loanSalaExterno+1;
                 }else if($pedido->user->userType->type=="Profesor"){
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,4);
                   $estadistica->loanSalaProfesor=$estadistica->loanSalaProfesor+1;
                   $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,4);
                   $estadisticaTipo->loanSalaProfesor=$estadisticaTipo->loanSalaProfesor+1;
                 }else{
                   $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,5);
                   $estadistica->loanSalaTrabajador=$estadistica->loanSalaTrabajador+1;
                   $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,5);
                   $estadisticaTipo->loanSalaTrabajador=$estadisticaTipo->loanSalaTrabajador+1;
                 }
               }
               break;

      case 3 :
          $thesisCopy = ThesisCopy::find($pedido->copyId);
          $thesisCopy->availability = 2;
          $thesisCopy->save();
          $fechaFinalDeseada=date_time_set($fechaFinalDeseada, 20, 0, 0);
          $estadistica = \App\StatisticalMaterial::dameEstadisticaMaterialConConsistencia($pedido->typeItem, $thesisCopy->thesisId);
          $estadisticaTipo = \App\StatisticalTypeMaterial::dameEstadisticaTipoMaterialConConsistencia($pedido->typeItem);
          if($pedido->place){//pedidos en domicilio
            $dias = $pedido->user->userType->timeThesisLoan;
            $fechaFinalDeseada->modify('+'.$dias.' days');
            $bandera=\App\StatisticalUser::llenarDiaDeHoy($estadisticaUsuario->id,8);
            $estadisticaUsuario->loanDomicilioThesis=$estadisticaUsuario->loanDomicilioThesis+1;

            if($pedido->user->userType->type=="PreGrado"){
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,6);
              $estadistica->loanDomicilioPreGrado=$estadistica->loanDomicilioPreGrado+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,6);
              $estadisticaTipo->loanDomicilioPreGrado=$estadisticaTipo->loanDomicilioPreGrado+1;
            }else if($pedido->user->userType->type=="PostGrado"){
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,7);
              $estadistica->loanDomicilioPostGrado=$estadistica->loanDomicilioPostGrado+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,7);
              $estadisticaTipo->loanDomicilioPostGrado=$estadisticaTipo->loanDomicilioPostGrado+1;
            }else if($pedido->user->userType->type=="Externo"){
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,8);
               $estadistica->loanDomicilioExterno=$estadistica->loanDomicilioExterno+1;
               $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,8);
               $estadisticaTipo->loanDomicilioExterno=$estadisticaTipo->loanDomicilioExterno+1;
            }else if($pedido->user->userType->type=="Profesor"){
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,9);
              $estadistica->loanDomicilioProfesor=$estadistica->loanDomicilioProfesor+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,9);
              $estadisticaTipo->loanDomicilioProfesor=$estadisticaTipo->loanDomicilioProfesor+1;
            }else{
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,10);
              $estadistica->loanDomicilioTrabajador=$estadistica->loanDomicilioTrabajador+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,10);
              $estadisticaTipo->loanDomicilioTrabajador=$estadisticaTipo->loanDomicilioTrabajador+1;
            }
          }else{
            //Pedido en sala
            $bandera=\App\StatisticalUser::llenarDiaDeHoy($estadisticaUsuario->id,4);
            $estadisticaUsuario->loanSalaThesis=$estadisticaUsuario->loanSalaThesis+1;
            if($pedido->user->userType->type=="PreGrado"){
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,1);
              $estadistica->loanSalaPreGrado=$estadistica->loanSalaPreGrado+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,1);
              $estadisticaTipo->loanSalaPreGrado=$estadisticaTipo->loanSalaPreGrado+1;
            }else if($pedido->user->userType->type=="PostGrado"){
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,2);
              $estadistica->loanSalaPostGrado=$estadistica->loanSalaPostGrado+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,2);
              $estadisticaTipo->loanSalaPostGrado=$estadisticaTipo->loanSalaPostGrado+1;
            }else if($pedido->user->userType->type=="Externo"){
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,3);
               $estadistica->loanSalaExterno=$estadistica->loanSalaExterno+1;
               $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,3);
               $estadisticaTipo->loanSalaExterno=$estadisticaTipo->loanSalaExterno+1;
            }else if($pedido->user->userType->type=="Profesor"){
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,4);
              $estadistica->loanSalaProfesor=$estadistica->loanSalaProfesor+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,4);
              $estadisticaTipo->loanSalaProfesor=$estadisticaTipo->loanSalaProfesor+1;
            }else{
              $bandera=\App\StatisticalMaterial::llenarDiaDeHoy($estadistica->id,5);
              $estadistica->loanSalaTrabajador=$estadistica->loanSalaTrabajador+1;
              $bandera=\App\StatisticalTypeMaterial::llenarDiaDeHoy($estadisticaTipo->id,5);
              $estadisticaTipo->loanSalaTrabajador=$estadisticaTipo->loanSalaTrabajador+1;
            }
          }
          break;
    }
    $estadistica->save();
    $estadisticaTipo->save();
    $estadisticaUsuario->save();
    $pedido->endDateWanted=$fechaFinalDeseada;
    $pedido->endDateOrigin=$fechaFinalDeseada;

    //Ver si se intersecta con un feriado
    $feriados= \App\Fullcalendarevento::all();
    if($feriados!=null){
      foreach($feriados as $feriado){
        $comienzoFeriado=new DateTime ($feriado->fechaIni);
        if($feriado->fechaFin!=null){
          $finDeFeriado=new DateTime ($feriado->fechaFin);
          $finDeFeriado->modify('-1 days');
          $comparacion1=\App\Fullcalendarevento::compararFechasPorDia($fechaFinalDeseada,$comienzoFeriado);
          $comparacion2=\App\Fullcalendarevento::compararFechasPorDia($fechaFinalDeseada,$finDeFeriado);
          if($comparacion1>=0 && $comparacion2<=0){
            //Se intersecta
            $pedido->holidayId=$feriado->id;
            if(strcmp($finDeFeriado->format('l'),"Saturday")==0){
              $finDeFeriado->modify('+2 days');
            }else{
              $finDeFeriado->modify('+1 days');
            }
            $finDeFeriado=date_time_set($finDeFeriado, 20, 0, 0);
            $pedido->endDateWanted=$finDeFeriado;
            break;
          }
        }else{
          $comparacion=\App\Fullcalendarevento::compararFechasPorDia($fechaFinalDeseada,$comienzoFeriado);
          if($comparacion==0){
            //Se intersecta
            $pedido->holidayId=$feriado->id;
            if(strcmp($comienzoFeriado->format('l'),"Saturday")==0){
              $comienzoFeriado->modify('+2 days');
            }else{
              $comienzoFeriado->modify('+1 days');
            }
            $comienzoFeriado=date_time_set($comienzoFeriado, 20, 0, 0);
            $pedido->endDateWanted=$comienzoFeriado;
            break;
          }
        }

      }
    }
    $pedido->save();
    return redirect(redirect()->getUrlGenerator()->previous());
  }

  //Se realiza el rechazo de un pedido , por ahora solo se puede para libros
  //Para agregar mas tipos , solo modificar el switch
  public function rechazar(Request $request)
  {
    //Encontrando el pedido
    $pedido = Order::find($request->id);
    //Poniendo la fecha en la que fue rechazado
    $pedido->endDateReal = Carbon::now('America/Lima');
    //Cambiando el estado del pedido a rechazado
    $pedido->state = 2;
    //Se guarda el empleado que rechaza el pedido
    $pedido->employeeLoanId = $request->employeeId;
    //Se modifica la disponibilidad de la copia
    switch ($pedido->typeItem) {
      case 1:
        $bookCopy = BookCopy::find($pedido->copyId);
        $bookCopy->availability = 1;
        $bookCopy->save();
        break;
      case 2:
        $magazineCopy = MagazineCopy::find($pedido->copyId);
        $magazineCopy->availability = "Disponible";
        $magazineCopy->save();
        break;
      case 3:
        $thesisCopy = ThesisCopy::find($pedido->copyId);
        $thesisCopy->availability = 1;
        $thesisCopy->save();
        break;
      case 4:
        $compendiumCopy = CompendiumCopy::find($pedido->copyId);
        $compendiumCopy->availability = "Disponible";
        $compendiumCopy->save();
        break;
    }
    //Regresando a la ruta anterior
    $pedido->save();
    return redirect(redirect()->getUrlGenerator()->previous());
  }

  public function devolver(Request $request){
     //Encontrando el prestamo
     $prestamo = Order::find($request->id);
     Order::analizarElPrestamo($prestamo->id);
     //Se asigan la hora de devolucion
     $prestamo->endDateReal = Carbon::now('America/Lima');
     //Modificando el estado del prestamo a entregado
     $prestamo->state = 3;
     //Pone al prestamo como ya revisado
     $prestamo->reviewed=true;
     //Se guarda el empleado que entrega la copia
     $prestamo->employeeReturnId = $request->employeeId;
     //Se modifica la disponiblidad de la copia
     switch ($prestamo->typeItem) {
       case 1:
         $bookCopy = BookCopy::find($prestamo->copyId);
         $bookCopy->availability = 1;
         $bookCopy->save();
         break;
      case 2:
         $magazineCopy = MagazineCopy::find($prestamo->copyId);
         $magazineCopy->availability = "Disponible";
         $magazineCopy->save();
           break;
       case 3:
         $thesisCopy = ThesisCopy::find($prestamo->copyId);
         $thesisCopy->availability = 1;
         $thesisCopy->save();
         break;
      case 4:
        $compendiumCopy = CompendiumCopy::find($prestamo->copyId);
        $compendiumCopy->availability = "Disponible";
        $compendiumCopy->save();
         break;
     }
      $prestamo->save();

     return redirect(redirect()->getUrlGenerator()->previous());
  }
  public function actualizar(Request $request){
    //Actualizar el prestamo
     $prestamo = Order::find($request->id);
     $finDelPrestamo = new DateTime ($prestamo->endDateWanted);
     if(strcmp($finDelPrestamo->format('l'),"Saturday")==0){
       $finDelPrestamo->modify('+2 days');
     }else{
       $finDelPrestamo->modify('+1 days');
     }
     $prestamo->endDateWanted=$finDelPrestamo;
     $prestamo->endDateUpdate=$finDelPrestamo;

     //Ver si se intersecta con un feriado
     $feriados= \App\Fullcalendarevento::all();
     $bandera=false;
     if($feriados!=null){
       foreach($feriados as $feriado){
         $comienzoFeriado=new DateTime ($feriado->fechaIni);
         if($feriado->fechaFin!=null){
           $finDeFeriado=new DateTime ($feriado->fechaFin);
           $finDeFeriado->modify('-1 days');
           $comparacion1=\App\Fullcalendarevento::compararFechasPorDia($finDelPrestamo,$comienzoFeriado);
           $comparacion2=\App\Fullcalendarevento::compararFechasPorDia($finDelPrestamo,$finDeFeriado);
           if($comparacion1>=0 && $comparacion2<=0){
             //Se intersecta
             $prestamo->holidayId=$feriado->id;
             if(strcmp($finDeFeriado->format('l'),"Saturday")==0){
               $finDeFeriado->modify('+2 days');
             }else{
               $finDeFeriado->modify('+1 days');
             }
             $finDeFeriado=date_time_set($finDeFeriado, 20, 0, 0);
             $prestamo->endDateWanted=$finDeFeriado;
             $bandera=true;
             break;
           }
         }else{
           $comparacion=\App\Fullcalendarevento::compararFechasPorDia($finDelPrestamo,$comienzoFeriado);
           if($comparacion==0){
             //Se intersecta
             $prestamo->holidayId=$feriado->id;
             if(strcmp($comienzoFeriado->format('l'),"Saturday")==0){
               $comienzoFeriado->modify('+2 days');
             }else{
               $comienzoFeriado->modify('+1 days');
             }
             $comienzoFeriado=date_time_set($comienzoFeriado, 20, 0, 0);
             $prestamo->endDateWanted=$comienzoFeriado;
             $bandera=true;
             break;
           }
         }

       }
     }
     if($bandera==false){
       $prestamo->holidayId=null;
     }
     $prestamo->save();
     return redirect(redirect()->getUrlGenerator()->previous());
  }

  public function informacionUsuario($id){
      $user = User::find($id);
      return view('admin.md_prestamos.modalUser',[
        'user' => $user,
      ]);
  }
  public function informacionLibro($id){
      $bookCopy = BookCopy::find($id);
      $book = $bookCopy->book;
      return view('admin.md_prestamos.modalBook',[
        'copy' => $bookCopy,
        'book' => $book
      ]);
  }
  public function informacionTesis($id){
      $thesisCopy = ThesisCopy::find($id);
      $thesis = $thesisCopy->thesis;
      return view('admin.md_prestamos.modalThesis',[
        'copy' => $thesisCopy,
        'thesis' => $thesis
      ]);
  }

  public function informacionRevistas($id){
      $magazineCopy = MagazineCopy::find($id);
      $magazine = $magazineCopy->magazine;
      return view('admin.md_prestamos.modalMagazine',[
        'copy' => $magazineCopy,
        'magazine' => $magazine
      ]);
  }

  public function informacionCompendios($id){
      $compendiumCopy = CompendiumCopy::find($id);
      $compendium = $compendiumCopy->compendium;
      return view('admin.md_prestamos.modalCompendium',[
        'copy' => $compendiumCopy,
        'compendium' => $compendium
      ]);
  }

  public function historial(){
    //El metodo where funciona como filtro deL metodo all
    $prestamos = Order::where('state',3)->get();
    $employee = Auth::User()->employee;

    $permisos=Auth::User()->employee->profile->permissions;
    $permisos=Profile::decodificar($permisos);
    $permisos=Profile::permisosDeTipo($permisos,"prestamos");
    if($permisos==-1){
      dd("ERROR : Su cuenta no puede tener acceso a esta ruta");
    }else{
      $ver=$permisos[0];

      $showPrestamo = "";
      if($ver){
        $showPrestamo = view('admin.md_historialPrestamos.showPrestamo',[
          'prestamos' => $prestamos,
          'employee' => $employee,
        ]);
      }
    }

     return view('admin.md_historialPrestamos.index', [
        'showPrestamo'    => $showPrestamo
     ]);
  }

  public function sePuedeEliminarFeriado(){
    $fechaSiguiente=new DateTime ( 'America/Lima' );
    if(strcmp($fechaSiguiente->format('l'),"Saturday")==0){
      $fechaSiguiente->modify('+2 days');
    }else{
      $fechaSiguiente->modify('+1 days');
    }
    $comienzaEvento=new DateTime ($_POST['comienzoEvento']);
    $comparacion=\App\Fullcalendarevento::compararFechasPorDia($fechaSiguiente,$comienzaEvento);
    if($comparacion==0){
      echo "Verdadero";
    }
    else{
      echo "Falso";
    }
  }
  public function actualizarPedidos(){

    $pedidos = Order::where('state',0)->get();
    $employee = Auth::User()->employee;

    $permisos=Auth::User()->employee->profile->permissions;
    $permisos=Profile::decodificar($permisos);
    $permisos=Profile::permisosDeTipo($permisos,"pedidos");
    if($permisos==-1){
      dd("ERROR : Su cuenta no puede tener acceso a esta ruta");
    }else{
      $ver=$permisos[0];
      $prestar=$permisos[1];
      $rechazar=$permisos[2];

      $showPedidos ="";
      if($ver){
        $showPedidos = view('admin.md_prestamos.showPedidos',[
          'pedidos' => $pedidos,
          'employee' => $employee,
          'prestar' => $prestar,
          'rechazar' => $rechazar
        ]);
      }
    }
    return $showPedidos;
  }
  public function actualizarPrestamos(){
    $prestamos = Order::where('state',1)->get();
    $employee = Auth::User()->employee;

    $permisos=Auth::User()->employee->profile->permissions;
    $permisos=Profile::decodificar($permisos);
    $permisos=Profile::permisosDeTipo($permisos,"prestamos");
    if($permisos==-1){
      dd("ERROR : Su cuenta no puede tener acceso a esta ruta");
    }else{
      $ver=$permisos[0];
      $recibir=$permisos[1];
      $masTiempo=$permisos[2];

      $showPrestamo = "";
      if($ver){
        $showPrestamo = view('admin.md_prestamos.showPrestamo',[
          'prestamos' => $prestamos,
          'employee' => $employee,
          'recibir' => $recibir,
          'masTiempo' => $masTiempo
        ]);
      }
    }
    return $showPrestamo;
  }
  public function actualizarHistorial(){
    $prestamos = Order::where('state',3)->get();

    return view('admin.md_historialPrestamos.showPrestamo',[
        'prestamos' => $prestamos,
     ]);
  }
}
