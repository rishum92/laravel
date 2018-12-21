<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;

class MyProfileController extends Controller
{
   public function index(Request $request)
   {

      $sid = Session::get('id');

      $data = DB::table('user_registration')
             ->select('*')
            ->where(['id'=>$sid])
            ->get();

          return view('myprofile',['users'=>$data]);
    }
}