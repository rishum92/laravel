<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;

class UserDetailController extends Controller
{
   public function userdetail(Request $request)
   {
   	 $id = $request->id;
     $sid = Session::get('id');
     
     $data = DB::table('user_registration')
            ->select('full_name','email','username','country','profile_pic','id')
            ->where('id',$id)
            ->get();
//echo"<pre>";print_r($data);die;
       
            if($data == true)
            {

                $status = DB::table('friend_request')
                ->select('status')
                ->where('receiver_id',$id)
                ->where('sender_id',$sid)
                ->get(); 

           //echo"<pre>";print_r($status);die;
            return view('userdetail',['users'=>$data],['status'=>$status]);
           }
   }
}
