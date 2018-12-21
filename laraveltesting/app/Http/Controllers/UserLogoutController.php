<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class UserLogoutController extends Controller
{
   public function logout(Request $request)
   {
     Session::flush();
     return view('login');
   }
}
