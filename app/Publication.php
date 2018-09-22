<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'title', 
        'mainUrl',
        'state',
        'user_id',
    ];

    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }
    public function paragraphs()
    {
      return $this->hasMany('App\Paragraph','publication_id');
    }
    public function files()
    {
      return $this->hasMany('App\File','publication_id');
    }
}
