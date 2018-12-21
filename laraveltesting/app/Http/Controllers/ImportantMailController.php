<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;

class ImportantMailController extends Controller
{
  public function importantdata(Request $request)
  {
  	$id = $request->id;
    
    $data = DB::table('message_send')
          ->where('m_id',$id)
          ->update(['is_marked'=>1]);

          return back();
  }

  public function importantview(Request $request)
  {
     $sid = Session::get('id');

     $viewdata = DB::table('message_send')
              ->join('user_registration','message_send.to_id','=','user_registration.id')
              ->where('id',$sid)
              ->select('message_send.*','user_registration.*')
              ->get();

              return view('inboximportant',['users'=>$viewdata]);
  }

  public function editimportant(Request $request)
  {
  	 $id = $request->id;

  	$editdata = DB::table('message_send')
  	          ->where('is_marked',1)
  	          ->update(['is_marked'=>0]);
      
     // echo "<pre>";print_r($editdata);die;
     return back();
  	          //location.href = "{{ url('/inboximportant') }}";
  }
}
