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


	public function managerLogout(){
		session(['manager'=>null]);
		\Auth::logout();
		return redirect('/login');
	}


	public function showHomePage(){
		return view('/layouts/managerMenu');
	}
}