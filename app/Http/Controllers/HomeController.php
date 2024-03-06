<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\contact;
use App\Models\audit;
use Illuminate\Support\Facades\Mail;
use App\Mail\AuditMail;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
   function index ()
   {
    $web=DB::table('project_details')->where('project_type','=','WEBSITE DEVELOPMENT')
    ->limit(4)
    ->orderByDesc('id')
    ->get();

    $seo=DB::table('project_details')->where('project_type','=','SEO')
    ->limit(4)
    ->orderByDesc('id')
    ->get();

    $sem=DB::table('project_details')->where('project_type','=','SEM')
    ->limit(4)
    ->orderByDesc('id')
    ->get();

    $smm=DB::table('project_details')->where('project_type','=','SMM')
    ->limit(4)
    ->orderByDesc('id')
    ->get();

    $blogs = DB::table('blog')
                ->select('blog.*')
                ->orderByDesc('id')
                ->limit(3)
                ->get();

    return view('home-design-agency',compact('web','seo','sem','smm','blogs'));
   }

  

function contact()
{
   return view ('contact-us-classic');
}

function contacted(Request $request)
{

    $datas = $request->input();
        $req=new contact();
        $req->name=$datas['name'];
        $req->email=$datas['email'];
        $req->number=$datas['number'];
        $req->message=$datas['message'];

        $req->save();
        $details=array(
    'name'=>$request->name,
    'email'=>$request->email,
    'number'=>$request->number,
    'message'=>$request->message,
        );


        Alert::success("Contact Details Sent!","Thank You for Contacting Us Our Representative will Contact You shortly");
 Mail::to($req->email)->send(new AuditMail($details));


    mail::to('info@idotcommers.com')->send(new  \App\Mail\ContactMail($details));
   
    return redirect('/contact');
}


function team()
{
   return view ('our-team');
}

function audit()
{
   return view ('audit');
}

function audited(Request $request)
{

    $datas = $request->input();
        $req=new audit();
        $req->name=$datas['name'];
        $req->email=$datas['email'];
        $req->number=$datas['number'];
        $req->url=$datas['url'];

        $req->save();

        $details=array(
    'name'=>$request->name,
    'email'=>$request->email,
    'number'=>$request->number,
    'url'=>$request->url

);
Mail::to($req->email)->send(new AuditMail($details));
        Alert::success("Contact Details Sent!","Thank You for Contacting Us Our Representative will Contact You shortly");

         return redirect('/free-website-audit/');
}

public function sitemap()
{
    return view('sitemap_index');
}

public function sitemap1()
{

      $blogs = DB::table('blog')
                 ->orderByDesc('id')
                 ->get();
        $categories = DB::table('blog_category')
                ->get();

     return view('sitemap',compact('blogs','categories'));
}
public function privacy()
{
    return view('privacy-policy');
}

}
