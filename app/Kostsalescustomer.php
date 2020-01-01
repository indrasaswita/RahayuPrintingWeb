<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kostsalescustomer extends Model
{
	protected $fillable = ['customerID', 'kostsalesID'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];
	
	public function customer(){
		return $this->belongsTo('App\Customer', 'customerID')->with('customertype', 'company');
	}

	public function kostsalesheader(){
		return $this->belongsTo('App\Kostsalesheader', 'kostsalesID')->with('kostroom');
	}
}
