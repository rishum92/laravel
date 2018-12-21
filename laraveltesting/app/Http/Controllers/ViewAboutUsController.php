<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ViewAboutUsController extends Controller
{
    public function viewaboutus(Request $request)
    {
    	$rid = $request->id;

    	$data = DB::table('user_about')
    	     ->where('user_id',$rid)
    	     ->select('text_area')
    	     ->get();

    	     return view('aboutusview',['users'=>$data]);
    }
}
