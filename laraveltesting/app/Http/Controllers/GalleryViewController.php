<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;

class GalleryViewController extends Controller
{
    public function galleryview(Request $request)
    {
    	
    	$rid = $request->id;

       
        $images = DB::table('user_gallery')
               ->select('pictures')
               ->where('user_id',$rid)
               ->get();
        return view('galleryview',['users'=>$images]);
    }
}
