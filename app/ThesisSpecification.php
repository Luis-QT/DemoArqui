<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThesisSpecification extends Model
{

    protected $table = 'thesisSpecifications';

    protected $fillable = [
        'adviser',
        'extension',
        'observations',
        'accompaniment',
        'content',
        'summary',
        'recomendations',
        'conclusions',
        'bibliography',
        'keywords',
        'mention',
        'thesis_id',
    ];

    public function thesis()
    {
      return $this->belongsTo('App\Thesis','thesis_id');
    }

}
