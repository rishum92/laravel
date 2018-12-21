<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;

class UserLoginController extends Controller
{
    public function index(Request $request)
    {
    	$username = $request->input('username');
        $password = $request->input('password');
        $psw      = md5($password);
        $login = DB::table('user_registration')
               ->select('id','full_name','email','username','country','profile_pic')
               ->where(['username'=>$username,'password'=>$psw])
               ->where('status',1)
               ->get();
            //echo "<pre>"; print_r($login);die;
             if($login == true)
               {
                 $id=$login[0]->id;
                 $name = $login[0]->username;
                 $pic = $login[0]->profile_pic;
                 Session::put('id', $id);
                 Session::put('pic',$pic);
                 Session::put('username',$name);

                 return view('myprofile',['users'=>$login])->with('success','Successfully Login');
               }
             else
               {
                 return view('login');
               }
    }
}
