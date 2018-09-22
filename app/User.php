<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastName',
        'dni',
        'code',
        'instEmail',
        'userType_id',
        'school_id',
        'state',
    ];

    protected $hidden = [
        'remember_token',
    ];
    public function loans(){
      return $this->hasMany('App\Loan','employee_id');
    }
    public function userSpecification()
    {
      return $this->hasOne('App\UserSpecification','user_id');
    }
    public function userType()
    {
      return $this->belongsTo('App\UserType','userType_id');
    }
    public function school()
    {
      return $this->belongsTo('App\School','school_id');
    }
    public function publications()
    {
      return $this->hasMany('App\Publication','user_id');
    }
    public function orders()
    {
      return $this->hasMany('App\Order','user_id');
    }
    public function surveys()
    {
      return $this->hasMany('App\Survey','user_id');
    }
    public function surveyResponses()
    {
      return $this->hasMany('App\SurveyResponse','user_id');
    }
    public function configuration(){
      return $this->hasOne('App\Configuration','user_id');
    }

    public function esEmpleado(){
      $type = $this->userType->id;
      if($type==1 || $type ==2|| $type ==3|| $type ==4){
        return true;
      }else{
        return false;
      }
    }
    public function getState(){
      if ($this->esEmpleado()) {
        switch ($this->state) {
          case 3:
            return "Sin Asignar";
            break;
            case 4:
              return "Asignado";
              break;

          default:
            // code...
            break;
        }
      }else {
        switch ($this->state) {
          case 0:
            return "Sin Castigo";
            break;
            case 1:
              return "Bloqueado";
              break;
              case 2:
                return "Castigado";
                break;
          default:
            // code...
            break;
        }
      }
    }

    public function getEmailWithoutUnmsm(){
      $partes = explode("@",$this->instEmail);
      return $partes[0];
    }

    public function getType(){
      if ($this->esEmpleado()) {
        switch ($this->userType_id) {
          case 1:
            return "Jefe de biblioteca";
            break;
            case 2:
              return "Trabajador";
              break;
              case 3:
                return "Administrador";
                break;
                case 5:
                  return "Bolsista";
                  break;

          default:
            // code...
            break;
        }
      }else {
        //Lector
        switch ($this->userType_id) {
          case 5:
            return "Pregrado";
            break;
            case 6:
              return "Postgrado";
              break;
              case 7:
                return "Docente";
                break;
                case 7:
                  return "Externo";
                  break;
          default:
            // code...
            break;
        }
      }
    }



}
