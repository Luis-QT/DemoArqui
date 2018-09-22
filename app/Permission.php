<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 
    ];

    public function userTypes()
    {
      return $this->belongsToMany('App\UserType', 'userType_permission');
    }
}
