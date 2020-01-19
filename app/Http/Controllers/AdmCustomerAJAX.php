<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class AdmCustomerAJAX extends Controller
{

	
   public function addnewcustomer(Request $request){

   	$data = $request->all();

   	$customer = new Customer();

  
   	$customer->customertypeID=$data['customertypeID']['id'];
   	$customer->companyID=$data['companyID']['id'];
   	$customer->addressID=$data['addressID']['id'];
   	$customer->name=$data['name'];
   	$customer->phone = $data["phone"];
		$customer->phone2 = $data["phone2"];
		$customer->phone3 = $data["phone3"];
		$customer->email=$data['email'];
		$customer->cardnumber=$data['cardnumber'];
		$customer->cardUID=$data['cardUID'];

		$result = $customer->save();

		if($result)
					return $customer;
				else
					return "failed";
   }

    public function updatecustomer(Request $request){

   	$data = $request->all();

   $customer = Customer::where('email',$data['email'])->first();
	
  
   	$customer->customertypeID=$data['customertypeID']['id'];
   	$customer->companyID=$data['companyID']['id'];
   	$customer->addressID=$data['addressID']['id'];
   	$customer->name=$data['name'];
   	$customer->phone = $data["phone"];
		$customer->phone2 = $data["phone2"];
		$customer->phone3 = $data["phone3"];
		$customer->email=$data['email'];
		$customer->cardnumber=$data['cardnumber'];
		$customer->cardUID=$data['cardUID'];

		$result = $customer->save(); 
		if($result){
					$customer = Customer::where('email',$data['email'])->first();

					return $customer; }
				else
					return "failed";
   }

   public function deletecustomer(Request $request){

   	$data = $request->all();

   	$customer = Customer::where('email',$data['email'])->first();

		$result = $customer->delete();

		if($result)
					return $customer;
				else
					return "failed";

   }
}
