<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'name',
    ];

    public function schools()
    {
      return $this->hasMany('App\School','faculty_id');
    }
}
