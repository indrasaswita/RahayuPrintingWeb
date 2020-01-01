<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'username', 'password', 'phone', 'cardnumber', 'cardUID', 'roleID', 'app_token', 'remember_token'];
    protected $hidden = ['cardUID', 'app_token', 'remember_token', 'cardnumber', 'password'];
    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    public function role(){
    	return $this->belongsTo('App\Role', 'roleID');
    }

    public function kostsalesbail(){
    	return $this->hasMany('App\Kostsalesbail', 'employeeID');
    }
}
