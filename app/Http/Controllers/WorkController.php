<?php

namespace App\Http\Controllers;

use App\Models\project_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{

function website($id)
{
    $website = project_details::where('id',$id)->first();

    // $website = DB::table('project_details')
    // ->select('project_details.*')
    // ->where('id', '=' ,$id)
    // ->limit(1)
    // ->get();

 $previous = project_details::where('id', '<', $id)->orderBy('id','desc')->first();
    $next = project_details::where('id', '>', $id)->orderBy('id')->first();

return view('single-project-page-04',compact('website','previous','next'));
}

function seo($id)
{

    $seow =project_details::where('id',$id)->first();


 $previous = project_details::where('id', '<', $id)->orderBy('id','desc')->first();
    $next = project_details::where('id', '>', $id)->orderBy('id')->first();

return view('seo',compact('seow','previous','next'));}



function smm($id)
{

    $smme = project_details::where('id',$id)->first();

 $previous = project_details::where('id', '<', $id)->orderBy('id','desc')->first();
    $next = project_details::where('id', '>', $id)->orderBy('id')->first();

return view('smm',compact('smme','previous','next'));

}

function sem($id)
{

    $seme =  project_details::where('id',$id)->first();

 $previous = project_details::where('id', '<', $id)->orderBy('id','desc')->first();
    $next = project_details::where('id', '>', $id)->orderBy('id')->first();

return view('sem',compact('seme','previous','next'));

}

function job()
{
    return view('job-detail');
}


}
