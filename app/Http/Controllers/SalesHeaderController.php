<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Printingsalesheader;
use App\Customer;

class SalesHeaderController extends Controller
{
    public function dashboardSiapCetak(){
    	/*$sales = Printingsalesheader::join('printingsalesdetail', 'printingsalesdetail.printingSalesID', '=', 'printingsalesheader.printingSalesID')
    		->join('mscustomer', 'mscustomer.customerID', '=', 'printingsalesheader.customerID')
    		->join('mscompany', 'mscompany.companyID', '=', 'mscustomer.companyID')
    		->where('jobType', '<>', 'ST')
    		->where('printingsalesdetail.status', '=', 'File Siap Cetak')
    		->orderBy('jobType')
    		->select('printingsalesdetail.*', 'customerName', 'companyName')
    		->get();*/


        $customer = Customer::with('company', 'customertype')
                ->get();
    	return $customer;
    }
}
