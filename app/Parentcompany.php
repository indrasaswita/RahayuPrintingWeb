<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentcompany extends Model
{
	protected $fillable = ['name', 'alias'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];
	
	public function company(){
		return $this->belongsTo('App\Company', 'parentcompanyID')->with('customer');
	}
}
