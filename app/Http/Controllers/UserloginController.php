<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Hash;

class UserloginController extends Controller
{

	public function index(){
		$employees = Employee::select('username')
				->get();;

		return view('login', compact('employees'));
	}



	public function login(Request $request)
	{
		$data = $request->all();
		$username = $data['username'];
		$password = $data['password'];

		$employee = Employee::where('username', $username)
				->with('role')
				->first();
		if($employee == null)
			$employee = Employee::where('phone', $username)
				->with('role')
				->first();

		if($employee == null)
			return response()->json("employee not found", '200');
			//return null;

		if($employee['password'] == ''){
			return response()->json("password not set yet", '200');
		}

		if(Hash::check($password, $employee['password']))
		{
			session()->put('role', $employee['role']);
			session()->put('name', $employee['name']);
			session()->put('userid', $employee['employeeID']);
			session()->save();

			return response()->json($employee, '200');
		} else	{
			return response()->json("wrong password", '200');
		}

	}



}
