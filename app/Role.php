<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = ['name'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];

	public function employee(){
		return $this->hasMany('App\Employee', 'employeeID');
	}
}
