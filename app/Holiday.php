<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    protected $fillable = [
    	'title', 
    	'color', 
        'startDate', 
        'endDate', 
    ];

    public function loans()
    {
      return $this->hasMany('App\Loan','holiday_id');
    }

}
