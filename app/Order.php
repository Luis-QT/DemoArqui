<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'startDateOrder',
    	'state',
          // 0 : en espera
          // 1 : aceptado
          // 2 : rechazado
          // 3 : entregado
          // 4 : cancelado    , el usuario cancela su pedido
          // 5 : descartado   , se elimina cuando dos usuarios piden al mismo tiempo
    	'place', 
      'user_id', 
      'cycle_id', 
    ];

   /*
        State :
        0 -> Pendiente
        1 -> Aceptado
        2 -> Rechazado
   */

    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }
    public function orderCopy()
    {
      return $this->hasOne('App\OrderCopy','order_id');
    }
    public function cycle()
    {
      return $this->belongsTo('App\Cycle','cycle_id');
    }
    public function loan()
    {
      return $this->hasOne('App\Loan','order_id');
    }

    //Devuelve un STRING con el estado del objeto
    public function getState(){
       $txt="";
       switch ($this->state) {
          case 0: $txt="En Espera";  break;
          case 1: $txt="Aceptado";   break;
          case 2: $txt ="Rechazado"; break;
          case 3: $txt= "Entregado"; break;
          case 4: $txt= "Cancelado"; break;
          case 5: $txt= "Descartado"; break;
          default: return -1;
       }
       return $txt;
    }
    

   //Devuelve un STRING con el lugar del pedido
   public function obtenerLugar(){
     $txt="";
     switch ($this->place) {
        case 0: $txt="Sala";  break;
        case 1: $txt="Domicilio";   break;
        default: return -1;        break;
     }
     return $txt;
   }
}
