<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Http\Models\Customer;

class CustomerController extends Controller{
	public function customerLogin(Request $request){
		$input = Input::all();

		$customer = Customer::where('email', $input['email'])->first();
    	if(!$customer){
      	 	return view('login')->with('errorMsg', "Can not find this email, please regist first");
       	}
   	 	else if($customer->password == $input['password']){
			$request->session()->push('customer', $customer);
			return redirect('/');
   		}
   		else{
			return view('login')->with('errorMsg', "Invalid email or password, please try again");
   		}
	}

	public function customerLogout(){
		session(['customer'=>null]);
		\Auth::logout();
		return redirect('/login');
	}

	public function customerRegister(){
		$input = Input::all();
		$customer = Customer::where('email', $input['email'])->first();
    	if($customer){
      	 	return view('register')->with('errorMsg', "Email has been used");
       	}

       	if($input['password'] != $input['re-password']) {
       		return view('register')->with('errorMsg', 'Please enter the same password');
       	}

		$newCustomer = new Customer;
		$newCustomer->email = $input['email'];
		$newCustomer->name = $input['name'];	
		$newCustomer->password = $input['password'];
		$newCustomer->address = $input['address'];
		$newCustomer->save();

		return view('register')->with('successMsg', 'Registed successful, please login in.');

	}

	public function showHomePage(){
		return view('home');
	}
}