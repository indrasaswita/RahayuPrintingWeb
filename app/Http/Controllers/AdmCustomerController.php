<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class AdmCustomerController extends Controller
{
    public function index() {
    	$customers = Customer::with('company')
    					->get();

    	return view('pages.customers.index', compact('customers'));
    }
}
