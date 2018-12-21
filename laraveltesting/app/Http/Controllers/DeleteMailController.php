<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class DeleteMailController extends Controller
{
    public function deletemail(Request $request)
    {
    	 $check = $request->input('check','[]');
         
         foreach($check as $id)
         {
            
             $delete = DB::table('message_send')
                     ->where('m_id',$id)
                     ->update(['is_deleted'=>1]);
               return back()->with('success','Deleted successfullyy...!!');
         }
    }
     public function sentdeletemail(Request $request)
    {
         $check = $request->input('check','[]');
         
         foreach($check as $id)
         {
            
             $delete = DB::table('message_send')
                     ->where('m_id',$id)
                     ->update(['sent_deleted'=>1]);
               return back()->with('success','Deleted successfullyy...!!');
         }
    }
    public function trashdelete(Request $request)
    {
        $check = $request->input('check','[]');
         
         foreach($check as $id)
         {
            
                $delete = DB::table('message_send')
                     ->where('m_id',$id)
                     ->update(['is_deleted'=>2])
                     ->here('m_id',$id)
                     ->update(['sent_deleted'=>2]);
               return back()->with('success','Deleted successfullyy...!!');
         } 
    }  
}
