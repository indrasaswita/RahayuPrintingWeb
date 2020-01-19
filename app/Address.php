<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['cityID','name','address','addressnotes'];
    protected $dates = ['created_at','update_at'];
    protected $guarded = ['id'];

   public function city(){
				return $this->belongsTo('App\City','cityID');
			}

		public function customer(){
		return $this->belongsTo('App\Customer', 'id');
	}
}


