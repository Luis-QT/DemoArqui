<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSpecification extends Model
{
    protected $fillable = [
        'phone',
        'cellPhone',
        'personalEmail',
        'address',
        'description',
        'urlImg',
        'password',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }



}
