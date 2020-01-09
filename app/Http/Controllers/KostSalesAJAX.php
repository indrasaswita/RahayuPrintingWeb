<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kostsalesheader;
use App\Kostsalescustomer;

class KostSalesAJAX extends Controller
{
	public function getlastbyroom($roomid){
		$salesheader = Kostsalesheader::where('roomID', $roomid)
				->orderBy('endtime', 'desc')
				->first();

		if($salesheader != null)
			return $salesheader;
		else
			return null;
	}

	public function addnew(Request $request, $roomid){

		return "test";
		$data = $request->all();

		$salesheader = new Kostsalesheader();
		$salesheader->roomID = $roomid;
		$salesheader->starttime = $data['starttime'];
		$salesheader->endtime = $data['endtime'];
		$salesheader->baseprice = $data['price'];
		$salesheader->discount = $data['discount'];
		$salesheader->paid_at = null;
		$salesheader->created_at = $data['created_at'];
		$result = $salesheader->save();

		if($result){
			$last = Kostsalesheader::latest('id')->first();

			$salescustomer = new Kostsalescustomer();
			$salescustomer->customerID = $data['customer1']['id'];
			$salescustomer->kostsalesID = $last['id'];
			$salescustomer->save();
			if($data['customer2']!=null){
				$salescustomer = new Kostsalescustomer();
				$salescustomer->customerID = $data['customer2']['id'];
				$salescustomer->kostsalesID = $last['id'];
				$salescustomer->save();
			}

			
			$salesheader = Kostsalesheader::where('id', $last['id'])
					->with('kostsalescustomer')
					->get();
		}


		if($result)
			return $salesheader;
		else
			return "failed";
	}
}
