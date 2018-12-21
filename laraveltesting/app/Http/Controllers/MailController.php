<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use DB;

class MailController extends Controller
{
    public function index(Request $request)
    {
      $fullname = $request->input('fullname');
      $email = $request->input('email');

      //$mymail = array($request->input('email'));
      $address = $request->input('address');
      $city = $request->input('city');
      $country = $request->input('country');
      $username = $request->input('username');
      $password = $request->input('password');
      $password = md5($password);
      

      $data = DB::table('user_registration')
            ->insertGetId(['full_name'=>$fullname,'email'=>$email,'address'=>$address,'city'=>$city,'country'=>$country,
              'username'=>$username,'password'=>$password]);
     
      $userid = $data;
      dd($userid);
  //      Mail::send('mailverification',['userid'=>$userid],function($m) use($email)
  // {
  //   $m->to($email,'Pankaj Kevat')->subject('Activation Link');
  //    $m->from('rishum92@gmail.com','Rishabh MOdi');
  // });
  //     //return redirect('/')->with('success','Mail has been Successfully Send'); 

   // return "Successfully Send Mail";

     //return redirect('/')->with('success','Successfully Registered');     
    }
}
