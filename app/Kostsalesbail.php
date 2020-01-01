<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kostsalesbail extends Model
{
	protected $fillable = ['customerID', 'employeeID', 'ammount', 'waktumasuk', 'waktukeluar'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];
	
	public function customer(){
		return $this->belongsTo('App\Customer', 'customerID')->with('customertype', 'company');
	}

	public function employee(){
		return $this->belongsTo('App\Employee', 'employeeID')->with('role');
	}
}
