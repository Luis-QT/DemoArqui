<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    protected $fillable = [
    	'name',
    	'startDate',
    	'endDate',
    ];

    public function orders()
    {
      return $this->hasMany('App\Order','cycle_id');
    }
}
