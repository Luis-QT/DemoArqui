<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function authors()
    {
      return $this->belongsToMany('App\Author', 'author_category');
    }
    public function editorials()
    {
      return $this->belongsToMany('App\Editorial', 'editorial_category');
    }
    
}
