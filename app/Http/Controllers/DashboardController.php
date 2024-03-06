<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    function login(){
        return view('admin.login');
    }

   function dashboard(Request $request){

    $username = $request->input('username');
    $password = $request->input('password');

    $login = DB::table('login')->where(['username'=>$username,'password'=>$password])->get();
    
    if(count($login)>0)
    {
        $request->session()->put('data',$request->input());
        return view('admin.index');
    }
    else
        {
               return view('admin.login');
        }
    }


    public function dashboard1(){
    if(!session()->has('data'))
    {
        return redirect('admin/login');
    }
    return view('admin.index');
}


}

