<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Session;
use App\Http\Models\WTB;

class WtbController extends Controller{	
	public function showWtbList(){
		$wtbs = WTB::all();
		return view('wtb.list')->with('wtbs', $wtbs);
	}

	public function showNewWtb(){
		return view('wtb.new');
	}

	public function createNewWtb(){
		$input = Input::all();

        $newWtb = new WTB;
		$newWtb->customer_id = Session::get('customer')[0]->id;
		$newWtb->topic = $input['topic'];
		$newWtb->context = $input['context'];
		$newWtb->save();

		return redirect('/wtb/list');
	}

	public function showWtbDetail($wtbId){
		$wtb = WTB::where('id', $wtbId)->first();
		return view('wtb.detail')->with('wtb', $wtb);
	}
}