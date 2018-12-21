<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class UpdateProfileController extends Controller
{
    public function update(Request $request)
    {
    	$sid = $request->id;
    	$fullname = $request->input('fullname');
    	$email = $request->input('email');
    	$username = $request->input('username');
    	$country = $request->input('country');

    	$data = DB::table('user_registration')
    	      ->select('full_name','email','username','country')
    	      ->where('id',$sid)
    	      ->update(['full_name'=>$fullname,'email'=>$email,'username'=>$username,'country'=>$country]);

    	      return redirect('myprofile')->with('success','Successfully Update');
    }
}
