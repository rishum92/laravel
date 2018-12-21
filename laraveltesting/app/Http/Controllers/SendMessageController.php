<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;

class SendMessageController extends Controller
{

   public function sendmessage(Request $request)
   {
   	 $sid = Session::get('id');
   	 $toemail = $request->input('to');
   	 $subject = $request->input('subject');
   	 $message = $request->input('message');
       
         $send = $request->input('send');
         $close =$request->input('close');

       if($close)
       {
          $data = DB::table('user_registration')
            ->select('id')
            ->where('email',$toemail)
            ->get();

          $fromid = $data[0]->id;    
         

          $insert = DB::table('draft_message')
                ->insert(['to_id'=>$fromid,'from_id'=>$sid,'subject'=>$subject,'message'=>$message]);
               // echo "<pre>";print_r($insert);die;

            return redirect('myinbox');

       }
       else
         {
   	 
           $data = DB::table('user_registration')
   	           ->select('id')
   	           ->where('email',$toemail)
   	           ->get();

   	     $to_id = $data[0]->id;    

   	      //echo "<pre>"; print_r($data);die;
   
           $sendmessage =DB::table('message_send')
                        ->insert(['to_id'=>$to_id,'subject'=>$subject,'message'=>$message,'from_id'=>$sid]);

                  return redirect('myinbox')->with('success','Mail Successfully Send');
         }
   }
}
