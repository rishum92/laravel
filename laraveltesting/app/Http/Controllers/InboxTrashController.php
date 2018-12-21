<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;
class InboxTrashController extends Controller
{
    public function inboxtrash()
    {
       $sid  = Session::get('id');
       $data = DB::table('message_send')
             ->select('*')
             ->where('to_id',$sid)
             ->get();
        
       $sentdata = DB::table('message_send')
                ->select('*')
                ->where('from_id',$sid)
                ->get();
        
       return view('inboxtrash',['users'=>$data, 'senttrashdata'=>$sentdata]);
   }
    
}
                                        