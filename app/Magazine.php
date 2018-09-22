<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    protected $fillable = [
        'title', 
        'restOfTheTitle',
        'volume',
        'number',
        'numberOfCopies',
        'author_id',
        'editorial_id',
        'stand_id'
    ];

    public function stand()
    {
      return $this->belongsTo('App\Stand','stand_id');
    }
    public function author()
    {
      return $this->belongsTo('App\Author','author_id');
    }
    public function magazineSpecification()
    {
      return $this->hasOne('App\MagazineSpecification','magazine_id');
    }
    public function articles()
    {
      return $this->hasMany('App\Article','magazine_id');
    }

}
