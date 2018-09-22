<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCopy extends Model
{
    protected $fillable = [
        'incomeNumber',
        'clasification',
        'barcode',
        'copy',
        'volume',
        'acquisitionModality',
        'acquisitionSource',
        'acquisitionPrice',
        'acquisitionDate',
        'availability',
        'printType',
        'publicationLocation',
        'stand_id',
        'book_id',
    ];

    public function stand()
    {
      return $this->belongsTo('App\Stand','stand_id');
    }
    public function book()
    {
      return $this->belongsTo('App\Book','book_id');
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
