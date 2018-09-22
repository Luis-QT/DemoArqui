<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionResponse extends Model
{
    protected $fillable = [
        'answer',
        'surveyResponse_id', 
        'question_id',
    ];

    public function surveyResponse()
    {
      return $this->belongsTo('App\SurveyResponse','surveyResponse_id');
    }
    public function question()
    {
      return $this->belongsTo('App\Question','question_id');
    }
}
