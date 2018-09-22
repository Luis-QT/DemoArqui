<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{

    protected $fillable = [
        'level',
        'name',
        'type',
        'state',
    ];

    public function theses()
    {
      return $this->hasMany('App\Thesis','stand_id');
    }
    public function bookCopies()
    {
      return $this->hasMany('App\BookCopy','stand_id');
    }
    public function magazines()
    {
      return $this->hasMany('App\Magazine','stand_id');
    }

    public function getState(){
      switch ($this->state) {
        case 0: return "Habilitado";break;
        case 1: return "Almacén";break;
        case 2: return "Deshabilitado";break;
      }
    }

    public function getType(){
      switch ($this->type) {
        case 0: return "Libro";break;
        case 1: return "Tesis|Informe";break;
        case 2: return "Revista";break;
      }
    }

}
