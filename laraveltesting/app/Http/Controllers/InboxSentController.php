<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;

class InboxSentController extends Controller
{
    public function inboxsent()
    {
       $sid = Session::get('id');
       $message = DB::table('user_registration')
            ->join('message_send','user_registration.id','=','message_send.to_id')
            ->where('from_id',$sid)
            ->select('message_send.*','user_registration.*')
            ->get();

           return view('inboxsent',['users'=>$message]);
    }
}
