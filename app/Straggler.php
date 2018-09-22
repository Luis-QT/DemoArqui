<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Straggler extends Model
{
    protected $fillable = [
        'startDate', 
        'endDate',
        'description',
        'survey_id',
    ];

    public function survey()
    {
      return $this->belongsTo('App\Survey','survey_id');
    }
}
