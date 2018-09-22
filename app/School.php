<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name', 
        'faculty_id',
    ];

    public function users()
    {
      return $this->hasMany('App\User','school_id');
    }

    public function faculty()
    {
      return $this->belongsTo('App\Faculty','faculty_id');
    }
    public function theses()
    {
      return $this->hasMany('App\Thesis','school_id');
    }
}
