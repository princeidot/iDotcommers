<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\plan;

class packageController extends Controller
{

    function index()
    {
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $package=DB::table('plan')->get();

        return view('admin.package_list')->with(compact('package'));
    }

    function delete($id)
    {
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
       plan::where('id',$id)->delete();
       return redirect('admin/package');
    }
}
