<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BookCopy as BookCopy;
use App\ThesisCopy as ThesisCopy;

class OrderCopy extends Model
{
    protected $table = 'order_copies';

    protected $fillable = [
        'copy_id',
    	'copyNumber',
    	'materialType', // 1 : libro , 2 : tesis o informe , 3 .revista
    	'material_id',
        'order_id',
    ];

    public function order()
    {
      return $this->belongsTo('App\Order','order_id');
    }
    public function dameMaterial(){
        if($this->materialType==1){
            //Es libro
            return BookCopy::find($this->material_id);
        }else if($this->materialType==2){
            //Es tesis
            return ThesisCopy::find($this->material_id);
        }
    }

    public function dameClasificacion(){
        if($this->materialType==1){
            //Es libro
            return BookCopy::find($this->material_id)->clasification;
        }else if($this->materialType==2){
            //Es tesis
            return ThesisCopy::find($this->material_id)->thesis->clasification;
        }
    }

    public function obtenerTipoItem(){
     $txt="";
     switch ($this->materialType) {
        case 1: $txt="Libro";  break;
        case 2: $txt ="Tesis/Informe"; break;
        case 3: $txt="Revista";   break;
        default: return -1;        break;
     }
     return $txt;
   }

}
