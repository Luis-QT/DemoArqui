<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User as User;
use App\Loan as Loan;
use App\Punishment as Punishment;
use App\Cycle as Cycle;
use Redirect;
use DateTime;

class PunishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.md_punishments.index');
    }

    public function pedirDesactivacionCastigo($castigoId){
        $castigo = Punishment::find($castigoId);
        if($castigo->state==2){
            //Es un castigo desactivo
            return "Este castigo ya está desactivado";
        }else{
            if($castigo->state==1){
                //Es un castigo activo
                if(PunishmentController::desactivarCastigo($castigoId,null)==true){
                    return "true";
                }
            }else{
                return "No se puede desactivar el bloqueo porque aún no se ha devuelto el material.";
            }
        }
        return "falso";
    }

    public static function desactivarCastigo($castigoId,$descripcion){
        $castigo = Punishment::find($castigoId);
        if($castigo!=null){
            $fechaActual = new DateTime('America/Lima');
            $castigo->endDatePunishment = $fechaActual;
            if($descripcion==null){
                $castigo->description = "El castigo fue desactivado.";
            }else{
                $castigo->description = $descripcion;
            }
            $castigo->state = 2;
            $castigo->save();
            $usuario = $castigo->loan->order->user;
            $usuario->state = 0;
            $usuario->save();
            return true;
        }else{
            return false;
        }
    }

    public function pedirEliminacionCastigo($castigoId){
        $castigo = Punishment::find($castigoId);
        if($castigo!=null){
            if(PunishmentController::eliminarCastigo($castigoId)==true){
                return "true";
            }else{
                return "No se puede eliminar el bloqueo, debido a que todavia no se ha devuelto el material.";
            }
        }
        return "No se ha encontrado ningun castigo con ese id.";
    }
    public static function eliminarCastigo($castigoId){
        $castigo = Punishment::find($castigoId);
        if($castigo!=null){
            if($castigo->state==2){
                //Es un castigo desactivo
                $castigo->delete();
                return true;
            }else{
                if($castigo->state==1){
                    //Es un castigo activo
                    if(PunishmentController::desactivarCastigo($castigoId,null)==true){
                        $castigo->delete();
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function infoCastigo($id)
    {
        $usuario = User::find($id);
        $ciclos = Cycle::all()->sortByDesc('id');
        $pedidos = $usuario->orders;
        $listaPedidos = $pedidos->groupBy('cycle_id')->sortKeysDesc();

        $i = 0;
        $j = 0;
        $listaCastigos = null;

        foreach($listaPedidos as $pedidos){
            foreach($pedidos as $pedido){
                if($pedido->loan!=null){
                    if($pedido->loan->punishment!=null){
                        $listaCastigos[$i][$j] = $pedido->loan->punishment;
                        $j++;
                    }
                }
            }
            $i++;
        }        
        
        return  view('admin.md_punishments.infoUser', [
            'user' => $usuario,
            'listaCastigos' => $listaCastigos,
            'ciclos' => $ciclos
        ]);
    }
    public static function contarCastigos($idUsuario){
        $usuario = User::find(7);
        $pedidos = $usuario->orders->where('state',1);
        $i=0;
        $castigos=null;
        foreach($pedidos as $pedido){
            if($pedido->loan->state==1){
                if($pedido->loan->punishment!=null){
                    $castigos[$i]=$pedido->loan->punishment;    
                }
                $i++;
            }
        }
        
        $contador = 0;
        if($castigos!=null){
            $ciclo =Cycle::find(Cycle::count());
            $inicioCiclo = new DateTime($ciclo->startDate);
            $finCiclo = new DateTime($ciclo->endDate);
            foreach($castigos as $castigo){
                $dia = new DateTime($castigo->loan->devolutionDate);
                if($dia<=$finCiclo && $dia>=inicioCiclo){
                    //Es castigo actual
                    $contador++;
                }
            }
        }


        return $contador;
    }
    public static function AnalizadorBloqueo(){
        $prestamos = Loan::all()->where('state',0);
        $prestamosSinRevision = null;
        $i=0;
        $hoy = new DateTime('America/Lima');
        foreach($prestamos as $prestamo){
            if($prestamo->punishment == null){
                $fechaEntrega = new DateTime($prestamo->endDateLoan);
                if($hoy > $fechaEntrega){
                    //Se bloquea al usuario
                    $usuario = $prestamo->order->user;
                    $usuario->state = 1;
                    $usuario->save();
                    $castigo = Punishment::create([
                      'state' => 0, 
                      'loan_id' => $prestamo->id, 
                      'orderTime_id' => (PunishmentController::contarCastigos($usuario->id)+1)
                    ]);
                }
                $prestamosSinRevision[$i] = $prestamo;
                $i++;
            }
        }
    }
    public static function CalcularCastigo($idPrestamo){
        $prestamo = Loan::find($idPrestamo);
        if($prestamo){
            if($prestamo->punishment!=null && $prestamo->punishment->state==0){
                //Se calcula la fecha en que terminara el castigo
                $fechaActual = new DateTime('America/Lima');
                $pedido= $prestamo->order;
                $prestamo->devolutionDate = new DateTime('America/Lima');
                $castigo = $prestamo->punishment;
                $tiempoAdicional = $castigo->orderTime->time;
                if($tiempoAdicional!=null){
                    $castigo->endDatePunishment = $fechaActual->modify('+ '.$tiempoAdicional.' days');
                }else{
                    $castigo->endDatePunishment = $pedido->cycle->endDate;
                }
                $castigo->state = 1;
                
                $castigo->save();
                $prestamo->state=1;
                $prestamo->save();
                
                $pedido->state = 3;
                $pedido->save();
                $usuario= $pedido->user;
                $usuario->state=2;
                $usuario->save();

                //Cambiar estado del material prestamo
                $copiaMaterial= $pedido->orderCopy;
                $material = $copiaMaterial->dameMaterial();
                $material->availability=1;
                $material->save();
            }else{
                if($prestamo->punishment==null){
                    dd("ERROR, el préstamo no presenta un castigo existente.");
                }else{
                    dd("ERROR, se ha ingresado un castigo que ya había sido calculado.");
                }
            }
        }else{
            dd("ERROR, se introdujo un id de un préstamo no válido.");
        }
    }

    public static function AnalizarTerminoCastigo(){
        $castigos = Punishment::all()->where('state',1)->where('state',1);
        $fechaActual = new DateTime('America/Lima');
        foreach ($castigos as $castigo) {
            $fechaEntrega = new DateTime($castigo->endDatePunishment);
            if($fechaActual>$fechaEntrega){
                $usuario = $castigo->loan->order->user;
                $usuario->state = 0;
                $usuario->save();
                $castigo->state = 2;
                $castigo->save();
            }
        }
    }

    public function pedirExportacion($idUsuario){
        $usuario = User::find($idUsuario);
        $ciclos = Cycle::all()->sortByDesc('id');

        $pedidos = $usuario->orders;
        $listaPedidos = $pedidos->groupBy('cycle_id')->sortKeysDesc();

        
        $i = 0;
        $j = 0;
        $listaCastigos = null;

        foreach($listaPedidos as $pedidos){
            foreach($pedidos as $pedido){
                if($pedido->loan!=null){
                    if($pedido->loan->punishment!=null){
                        $listaCastigos[$i][$j] = $pedido->loan->punishment;
                        $j++;
                    }
                }
            }
            $i++;
        } 

        $mpdf = new \Mpdf\Mpdf();
        $cadena = " <!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='utf-8'>
                        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
                        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>
                        <title>Título</title>
                    </head>
                    <body>";
        $cadena .= "<h1>Usuario : ".$usuario->lastName ." ".$usuario->name."</h1>";
        $cadena .= "<p>Código : ".$usuario->code." - Correo Institucional : ".$usuario->instEmail." - Tipo : ".$usuario->userType->name."</p>";
        if($listaCastigos!=null){
            foreach($listaCastigos as $castigos){
                $cadena .= "<h1 style='margin-left: 4px; margin-bottom: 0px;'>".$castigos[0]->loan->order->cycle->name."</h1>";
                $cadena .= "<table class='table table-striped table-bordered'>
                        <caption style='margin-left: 5px;'>Castigos del ". $castigos[0]->loan->order->cycle->name ."</caption>
                        <thead> 
                              <tr class='active'>
                                  <th>Orden</th>
                                  <th>Tipo</th>
                                  <th>Fecha Inicial</th>
                                  <th>Fecha Final</th>
                                  <th>Item</th>
                              </tr>
                          </thead>
                          <tbody>";
                if($castigos!=null){
                    foreach($castigos as $castigo){
                        $cadena .= "<tr class='active'>
                                <td>".$castigo->orderTime_id."</td>
                                <td>Bloqueo ";
                                if($castigo->state==0){
                                    $cadena .= "Activado";
                                }else{
                                    $cadena .= "Desactivado";
                                }
                                $cadena .= "</td>
                                <td>".$castigo->loan->endDateLoan."</td>
                                <td>";
                                if($castigo->loan->devolutionDate!=null){
                                    $cadena .= $castigo->loan->devolutionDate;
                                }else{
                                    $cadena .= "No termina";
                                }
                                $cadena .= "</td>
                                <td>".$castigo->loan->order->orderCopy->dameClasificacion()."</td>
                              </tr>";
                        if($castigo->state!=0){
                            $cadena .= "<tr class='danger'>
                                  <td>".$castigo->orderTime_id."</td>
                                  <td>";
                                  if($castigo->state==1){
                                     $cadena .="Activado";
                                  }else{
                                    $cadena .="Desactivado";
                                  }
                                  $cadena .="</td>
                                  <td>".$castigo->loan->devolutionDate."</td>
                                  <td>".$castigo->endDatePunishment."</td>
                                  <td>".$castigo->loan->order->orderCopy->dameClasificacion()."</td>
                                </tr>";
                        }
                    }
                }

                $cadena .= "</tbody>
                      </table>";
            }
        }else{
            $cadena .= "<p style='text-align: center; font-size: 19px;'>Historial limpio de castigos</p>";
        }
        
        $cadena .= "
                    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
                  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
                  </body>
                  </html>
                  ";
        $mpdf->WriteHTML($cadena);
        $mpdf->Output();
    }


    
}
