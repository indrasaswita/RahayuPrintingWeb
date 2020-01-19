<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customertype;

class CustomertypeAJAX extends Controller
{
	public function getall (){
		$customertypes = Customertype::all();

		return $customertypes;
	}
}
