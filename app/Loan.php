<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
      'employee_id',
    	'startDateLoan',
    	'endDateLoan',
      'devolutionDate',
      'state',
      'endDateLoanExit',
    	'order_id',
    	'holiday_id'
    ];

    /*
      Loan -> state
      0 -> pendiente
      1 -> devuelto
    */
    public function employee(){
      return $this->belongsTo('App\User','employee_id');
    }
    public function order()
    {
      return $this->belongsTo('App\Order','order_id');
    }
    public function holiday()
    {
      return $this->belongsTo('App\Holiday','holiday_id');
    }
    public function punishment()
    {
      return $this->hasOne('App\Punishment','loan_id');
    }

}
