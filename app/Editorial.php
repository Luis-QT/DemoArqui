<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $fillable = [
        'name',
    ];

    public function book()
    {
      return $this->belongsToMany('App\Book', 'books_editorials')->withPivot('type');
    }
    public function thesis()
    {
      return $this->hasOne('App\Thesis','editorial_id');
    }
    public function categories()
    {
      return $this->belongsToMany('App\Category', 'editorials_categories');
    }
}
