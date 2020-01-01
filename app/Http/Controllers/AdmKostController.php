<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kostroom;
use Carbon\Carbon;
use App\Customer;

class AdmKostController extends Controller
{
	public function index(){
		$now = Carbon::now();

		$rooms = Kostroom::with(['kostsalesheader' => function($query) use ($now){
				$query->where('starttime', '<', $now)
						->where('endtime', '>', $now);
			}])
				->get();

		$customers = Customer::with('company')
				->get();

		return view("pages.kosts.index", compact('rooms', 'customers'));
	}
}
