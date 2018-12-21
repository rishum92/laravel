<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class ForgetPasswordController extends Controller
{
  public function forgetpassword(Request $request)
  {
  	 $email = $request->email;

  	 Mail::send(['text'=>'forgetlink'],['email'=>$email],function($m) use($email)
     {
        $m->to($email,'Rishabh')->subject('Activation Link');
        $m->from('rishum92@gmail.com','Rishabh Modi');
     });
      return redirect('/')->with('success','Mail has been Successfully Send'); 
  }
}
