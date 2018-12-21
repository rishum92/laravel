<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class DraftMessageController extends Controller
{
    public function draftmessage(Request $request)
    {
        $id = $request->id;
    	$data = DB::table('draft_message')
    	      ->select('*')
    	      ->where('draft_id',$id)
    	      ->get();

    	    // echo"<pre>";print_r($data);die;
      //return $data;
    	return view('includes.compose',['users'=>$data]); 
    }
}
