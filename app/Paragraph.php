<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    protected $fillable = [
        'content', 
        'imgUrl',
        'location',
        'orderTyme',
        'publication_id',
    ];

    public function publication()
    {
      return $this->belongsTo('App\Publication','publication_id');
    }
}
