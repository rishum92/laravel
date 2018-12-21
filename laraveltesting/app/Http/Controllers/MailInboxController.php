<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;

class MailInboxController extends Controller
{
    public function mailinbox(Request $request)
    {
    	$sid = Session::get('id');

        $msg = DB::table('message_send')
            ->join('user_registration','message_send.from_id','=','user_registration.id')
            ->where('to_id',$sid)
            ->select('message_send.*','user_registration.*')
           ->get();



        // echo "<pre>";print_r($msg);die;
         
         return view('inboxview',['users'=>$msg]); 
    }
}
