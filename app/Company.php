<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable = ['parentcompanyID', 'addressID', 'name', 'alias', 'phone', 'phone2'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];
	
	public function customer(){
		return $this->hasMany('App\Customer', 'companyID')->with('customertype');
	}

	public function parentcompany(){
		return $this->belongsTo('App\Parentcompany', 'parentcompanyID');
	}
}
