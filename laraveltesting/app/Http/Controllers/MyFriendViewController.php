<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;

class MyFriendViewController extends Controller
{
    public function myfriendview(Request $request)
    {
    	 $rid = $request->id;

    	 $data = DB::table('user_registration')
    	      ->select('full_name','email','username','country','profile_pic','id')
    	      ->where('id',$rid)
    	      ->get();
         return view('myfriendview',['users'=>$data]);
    }
}
