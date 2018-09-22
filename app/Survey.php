<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = [
        'title', 
        'description',
        'startDate',
        'endDate',
        'state',
        'suggestion',
        'user_id',
    ];

    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }
    public function surveyResponses()
    {
      return $this->hasMany('App\SurveyResponse','survey_id');
    }
    public function questions()
    {
      return $this->hasMany('App\Question','survey_id');
    }
    public function stragglers()
    {
      return $this->hasMany('App\Straggler','survey_id');
    }
}
