<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Input;
use DB;

class UserFileUploadController extends Controller
{
  public function upload(Request $request)
   {
     	$sid = Session::get('id');
      $destination = 'uploading'; // your upload folder
      $image       = $request->file('file');
      $filename    = $image->getClientOriginalName(); // get the filename
      $image->move($destination, $filename); // move file to destination
   
    
      $upload = DB::table('user_registration')
              ->where('id',$sid)
              ->update(['profile_pic'=>$filename]);
      return back()->with('success','Successfully Update!');
    }
}

