<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ActivationController extends Controller
{
    public function activation(Request $request)
    {
    	$id = $request->id;

    	  $data = DB::table('user_registration')
    	        ->where('id',$id)
    	        ->update(['status'=>1]);

    	        return redirect('/');
    }
}
