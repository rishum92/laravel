<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;

class FriendRequestController extends Controller
{
  public function friendrequest(Request $request)
  {
  	 $sid = Session::get('id');
     $data = DB::table('user_registration')
           ->join('friend_request','friend_request.sender_id','=','user_registration.id')
           ->where('receiver_id',$sid)
          ->where('friend_request.status',0)
           ->get();
    

    return view('friendrequest',['users'=>$data]); 
      
     
 }

  public function requestresult(Request $request)
  {
		  $senderid = $request->senderid;
		  $receiverid = $request->id;

		  	$accepted = $request->input("Accepted");
		  	$rejected = $request->input("Rejected");

		  	if($accepted)
		  	{

		  	$data = DB::table('friend_request')
		  	      ->select('status')
		  	      ->where('id',$senderid)
		         ->update(['status'=>1]);
		         return redirect('myprofile');
		    }
		    else
		    {
		    	 
		    	$delete = DB::table('friend_request')
		    	        ->where('id',$senderid)
		    	        ->update(['status'=>2]);
		    	    return redirect('myprofile');

		    }
}
}
