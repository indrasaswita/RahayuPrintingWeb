<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $fillable = ['customertypeID', 'companyID', 'addressID', 'name', 'phone', 'phone2', 'phone3', 'email', 'cardnumber', 'cardUID'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];

	public function customertype(){
		return $this->belongsTo('App\Customertype', 'customertypeID');
	}

	public function company(){
		return $this->belongsTo('App\Company', 'companyID')->with('parentcompany');
	}

	public function kostsalescustomer(){
		return $this->hasMany('App\Kostsalescustomer', 'customerID')->with('kostsalesheader');
	}

	public function kostsalesbail(){
		return $this->hasMany('App\Kostsalesbail', 'customerID');
	}
}
