<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Models\VerificationCode;
class MailController extends Controller
{
    public function send() {
     $code = rand(100000,1000000); 
     // Mail::send()的返回值为空，所以可以其他方法进行判断 
     $input = Input::all();
    $data = [
       'email' => $input['email'],
       'code' => $code
	];
     Mail::send('emails.emailTemplate', $data ,function( $message)use ($data)
     { 
     $message ->to($data['email'])->subject('Verification code');
     }); 
     // 返回的一个错误数组，利用此可以判断是否发送成功
         $email = $input['email'];
     	$VerificationCode = new VerificationCode;
		$VerificationCode->email = $email;
		$VerificationCode->code = $code;	
		$VerificationCode->save();
 

     return view('sendCode')->with('email',$email);
    } 
}
