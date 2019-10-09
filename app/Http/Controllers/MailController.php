<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function send() {
     $code = rand(100000,1000000); 
     // Mail::send()的返回值为空，所以可以其他方法进行判断 
     Mail::send('emails.emailTemplate',['code'=>$code],function($message){ 
     $to = 's3561226@student.rmit.edu.au'; $message ->to($to)->subject('Verification code'); 
     }); 
    } 
}
