<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printingtimerheader extends Model
{
    protected $fillable = ['printingsalesID','customerID','employeeID','keterangan','status']
    protected $guarded = ['id'];
				protected $dates = ['created_at'];

				public function customer(){
					return $this->belongsTo('App\Customer', 'customerID');
				}

				public function employee(){
					return $this->belongsTo('App\Employee', 'employeeID');
				}

				public function printingsales(){
					return $this->belongsTo('App\Printingtimerdetail', 'printingsalsesID');
				}
}
