<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printingtimerdetial extends Model
{
   protected $fillable = ['printingsalesID']
   protected $guarded = ['id'];
			protected $dates = ['created_at','ended_at'];

			// public function printingtimerheader(){
			// 	return $this->hasMany('App\printingtimerheader', 'printingtimerID')->with('printingsalesID');
}
