<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThesisCopy extends Model
{
    protected $table = 'ThesisCopies';
    protected $fillable = [
        'incomeNumber',
        'barcode',
        'copy',
        'availability',
        'thesis_id',
    ];

    public function thesis()
    {
      return $this->belongsTo('App\Thesis','thesis_id');
    }

    public function getState(){
     $txt="";
     switch ($this->availability) {
       case 0: $txt="Desabilitado"; break;
       case 1: $txt="Disponible"; break;
       case 2: $txt="Prestado"; break;
       case 3: $txt="En espera"; break;
     }
     return $txt;
  }    
}
