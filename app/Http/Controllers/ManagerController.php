<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Http\Models\Manager;

class ManagerController extends Controller{
	public function ManagerLogin(Request $request){
		$input = Input::all();

		$manager = Manager::where('email', $input['email'])->first();
    	if(!$manager){
      	 	return view('login')->with('errorMsg', "Can not find this email, please regist first");
       	}
   	 	else if($manager->password == $input['password']){
			$request->session()->push('manager', $manager);
			return redirect('/managerMenu');
   		}
   		else{
			return view('login')->with('errorMsg', "Invalid email or password, please try again");
   		}
	}
	public function managerRegister(){
		$input = Input::all();
		$manager = Manager::where('email', $input['email'])->first();
    	if($manager){
      	 	return view('register')->with('errorMsg', "Email has been used");
       	}

       	if($input['password'] != $input['re-password']) {
       		return view('register')->with('errorMsg', 'Please enter the same password');
       	}

		$newManager = new Manager;
		$newManager->email = $input['email'];
		$newManager->name = $input['name'];	
		$newManager->password = $input['password'];
		$newManager->address = $input['address'];
		$newManager->save();

		return view('register')->with('successMsg', 'Registed successful, please login in.');

	}


	public function managerLogout(){
		session(['manager'=>null]);
		\Auth::logout();
		return redirect('/login');
	}


	public function showHomePage(){
		return view('home');
	}
}