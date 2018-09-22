<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'questionType',
        'content', 
        'orderTime',
        'alternative',
        'survey_id',
    ];

    public function questionResponses()
    {
      return $this->hasMany('App\QuestionResponse','question_id');
    }
    public function survey()
    {
      return $this->belongsTo('App\Survey','survey_id');
    }
    public function alternative()
    {
      return $this->hasOne('App\Alternative','question_id');
    }
}
