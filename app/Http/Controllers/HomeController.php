<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\SalesHeaderController;

class HomeController extends Controller
{
    public function dashboard(){
    	$salesheader = new SalesHeaderController();
    	$siapcetak = $salesheader->dashboardSiapCetak('');
    	return view('pages.dashboard', compact('siapcetak'));
    }
}
