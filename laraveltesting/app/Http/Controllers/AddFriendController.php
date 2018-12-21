<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
class AddFriendController extends Controller
{
    public function addfriend(Request $request)
    {
    	$sid = $request->id;
    	$rid = $request->input('receiverid');

    	$insert = DB::table('friend_request')
    		   ->insert(['sender_id'=>$sid,'receiver_id'=>$rid]); 
    	return back();
    }
}
