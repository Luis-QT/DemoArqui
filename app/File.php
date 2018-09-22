<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'urlFile',
        'publication_id',
    ];

    public function publication()
    {
      return $this->belongsTo('App\Publication','publication_id');
    }
}
