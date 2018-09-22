<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    protected $fillable = [
        'orderSurvey', 
        'answerSug',
        'user_id',
        'survey_id',
    ];

    public function survey()
    {
      return $this->belongsTo('App\Survey','survey_id');
    }
    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }
    public function questionResponses()
    {
      return $this->hasMany('App\QuestionResponse','surveyResponse_id');
    }
}
