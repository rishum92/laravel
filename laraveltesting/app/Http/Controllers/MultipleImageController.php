<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Image; //Intervention Image
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use DB;

class MultipleImageController extends Controller
{
  public function multipleupload(Request $request)
    {
    	$sid = Session::get('id');
    	 if($request->hasFile('file'))
    	 {
    	 	foreach($request->file as $file)
             {
              $filename = $file->getClientOriginalName();
              $filesiz = $file->getClientSize();
              $file->move('uploads',$filename);
              $insert = DB::table('user_gallery')
                     ->insert(['user_id'=>$sid,'pictures'=>$filename]);
            }
             return back()->with('success','Images Successfully Inserted');
         }

	}
}        
