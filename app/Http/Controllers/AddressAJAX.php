<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Address;

class AddressAJAX extends Controller
{
    public function getall(){
    	$address  = Address::all();

    	return $address;
    }
}
