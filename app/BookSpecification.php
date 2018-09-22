<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookSpecification extends Model
{   

    protected $table = "bookSpecifications";

    protected $fillable = [
    	'book_id',
        'summary',
        'isbn',
        'extension',
        'observations',
        'dimensions',
        'accompaniment',
        'keywords',
        'content',
        'tome',
    ];

    public function book()
    {
      return $this->belongsTo('App\Book','book_id');
    }
    
}
