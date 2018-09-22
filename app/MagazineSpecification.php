<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MagazineSpecification extends Model
{
    protected $fillable = [
        'issn',
        'issnD', 
        'publicationDate',
        'summary',
        'directive', 
        'magazine_id'
    ];

    public function magazine()
    {
      return $this->belongsTo('App\Magazine','magazine_id');
    }
    
}
