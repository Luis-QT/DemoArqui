<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{
    protected $fillable = [
    	'endDatePunishment', 
        'state', 
        'loan_id', 
    	'orderTime_id', 
        'description'
    ];

    public function loan()
    {
      return $this->belongsTo('App\Loan','loan_id');
    }
    public function orderTime()
    {
      return $this->belongsTo('App\OrderTime','orderTime_id');
    }
}
