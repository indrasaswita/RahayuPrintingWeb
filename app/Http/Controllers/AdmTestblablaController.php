<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class AdmTestblablaController extends Controller
{
    public function index(){
    	$customers = Customer::with('company')
    		->get();

    	$customerss = Customer::with('kostsalescustomer')->get();

    	//return $customers;
    	return view("testblabla", compact('customers'));
    }
}


