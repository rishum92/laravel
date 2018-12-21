<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;

class InsertAboutUsController extends Controller
{
    public function insertabout(Request $request)
    {

    	$sid = Session::get('id');
    	$textarea = $request->input('textabout');

    	$insert = DB::table('user_about')
    	        ->insert(['user_id'=>$sid,'text_area'=>$textarea]);

    	     return back()->with('success','Successfully Inserted');
    }
}
