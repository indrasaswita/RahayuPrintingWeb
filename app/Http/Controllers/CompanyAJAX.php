<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;

class CompanyAJAX extends Controller
{
    public function getall(){
    	$companys = Company::all();

    	return $companys;
    }
}
