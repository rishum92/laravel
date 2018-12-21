<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use  Session;

class InboxDraftController extends Controller
{
    
    public function draft(Request $request)
    {
    	
    	$sid = Session::get('id');
    	$data = DB::table('draft_message')
    	       ->select('*')
    	       ->where('from_id',$sid)
    	       ->get();

    	       //echo "<pre>";print_r($data);die;
    	       return view('inboxdraft',['users'=>$data]); 
    }
}
