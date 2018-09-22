<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'highlightSearch',
        'user_id',
    ];

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }
}
