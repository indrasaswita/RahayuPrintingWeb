<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kostroom extends Model
{
	protected $fillable = ['roomnumber', 'floornumber', 'acsupplied', 'price', 'pricefortwo', 'tokennumber'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];


	public function kostsalesheader(){
		return $this->hasMany('App\Kostsalesheader', 'roomID')->with('kostsalescustomer');
	}

}
