<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    protected $table = 'thesis';

    protected $fillable = [
        'type',
        'clasification',
        'title',
        'year',
        'school_id',
        'editorial_id',
        'stand_id',
    ];

    public function school()
    {
      return $this->belongsTo('App\School','school_id');
    }
    public function stand()
    {
      return $this->belongsTo('App\Stand','stand_id');
    }
    public function thesisCopies()
    {
      return $this->hasMany('App\ThesisCopy','thesis_id');
    }
    public function editorial()
    {
      return $this->belongsTo('App\Editorial','editorial_id');
    }
    public function authors()
    {
      return $this->belongsToMany('App\Author', 'thesis_authors');
    }
    public function thesisSpecification()
    {
      return $this->hasOne('App\ThesisSpecification','thesis_id');
    }

    public function typeToString(){
        switch ($this->type) {
            case 1: return "Tesis"; break;
            case 2: return "Informe"; break;
        }
    }

    public function getTypeWithArticle(){
        switch ($this->type) {
            case 1: return "la Tesis"; break;
            case 2: return "el Informe"; break;
        }
    }

    public function totalAvailable(){
        $cont =0;
        foreach ($this->thesisCopies as $thesisCopy) {
            if($thesisCopy->availability == 1){
                $cont++;
            }
        }
        return $cont;
    }

}
