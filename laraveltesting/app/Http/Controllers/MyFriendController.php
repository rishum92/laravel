<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;

class MyFriendController extends Controller
{
   public function myfriend(Request $request)
   {
   	 $sid = Session::get('id');
     
    $data = DB::select("select user_registration.id, user_registration.full_name, user_registration.profile_pic,friend_request.status  FROM user_registration  INNER JOIN(friend_request) ON (friend_request.sender_id = user_registration.id OR friend_request.receiver_id   = user_registration.id) WHERE friend_request.receiver_id = '".$sid."' OR friend_request.sender_id = '".$sid."'  AND user_registration.id != '".$sid."' AND friend_request.status = 1 ");


   // echo "<pre>";print_r($data);die;


     // $data = DB::table('user_registration')
     //       ->join('friend_request','friend_request.sender_id','=','user_registration.id')
     //       ->where('friend_request.receiver_id','=','user_registration.id')
     //       ->orWhere('friend_request.receiver_id','!=',$sid)
     //       ->where('friend_request.sender_id','=',$sid)
     //       ->orWhere('user_registration.id','=',$sid)
     //       ->where('friend_request.status',1)
           // ->Where('friend_request.sender_id','=',$sid)
           // ->Where('friend_request.status',1)
           
           // ->select('user_registration.*','friend_request.*')
           //->get();

      


       return view('myfriends',['users'=>$data]);   

}
}






   	 // 
   	 //       //
   	 //       

   