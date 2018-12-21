<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class UserListController extends Controller
{
   public function userlist(Request $request)
   {
       $userlist = DB::table('user_registration')
           ->select('*')
           ->paginate(4);
       return view('userlist',['userlist'=>$userlist]);
   }
}
