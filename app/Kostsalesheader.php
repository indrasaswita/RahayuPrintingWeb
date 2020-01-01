<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kostsalesheader extends Model
{
	protected $fillable = ['roomID', 'starttime', 'endtime', 'baseprice', 'discount', 'paid_at'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at', 'paid_at'];
	protected $casts = [
		'starttime'=> 'Y-m-d',
		'endtime'=> 'Y-m-d'
	];
	
	public function kostsalescustomer(){
		return $this->hasMany('App\Kostsalescustomer', 'kostsalesID')->with('customer');
	}

	public function kostroom(){
		return $this->belongsTo('App\Kostroom', 'roomID');
	}
}
