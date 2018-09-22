<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTime extends Model
{
    protected $table = 'orderTimes';

    protected $fillable = [
    	'time',
    ];

    public function punishment()
    {
      return $this->hasMany('App\Punishment','orderTime_id');
    }
}
