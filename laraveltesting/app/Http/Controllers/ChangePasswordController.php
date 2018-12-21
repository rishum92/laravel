<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ChangePasswordController extends Controller
{
    public function changepassword(Request $request)
    {
    	$id = $request->id;
    	$password = $request->input('password');
    	$password = md5($password);
    	$newpassword = $request->input('newpassword');
    	$newpassword = md5($newpassword);
    	$rpassword = $request->input('rpassword');
    	$rpassword = md5($rpassword);
    
        $data = DB::table('user_registration')
              ->select('password')
              ->where('id',$id)
              ->get();

        $oldpassword = $data[0]->password;
        if($oldpassword == $password)
        {
        	if($newpassword == $rpassword)
        	 {
        		$data = DB::table('user_registration')
        		      ->where('id',$id)
        		      ->update(['password'=>$newpassword]);
        	 }
        	return redirect('myprofile')->with('success','Password Successfully Changed');
        }
        else
        {
        	return redirect('myprofile')->with('error','Password not match');
        }
    }
}
