<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customertype extends Model
{
	protected $fillable = ['name'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];
	
	public function customer(){
		return $this->hasMany('App\Customer', 'customerID')->with('company');
	}
}
