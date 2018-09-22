<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'magazine_id'
    ];

    public function magazine()
    {
      return $this->belongsTo('App\Magazine','magazine_id');
    }
    public function authors()
    {
      return $this->belongsToMany('App\Author', 'articles_authors');
    }
}
