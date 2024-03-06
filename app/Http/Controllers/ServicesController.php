<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\plan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResumeMail;
use App\Models\training;
use App\Mail\TrainingMail;

class ServicesController extends Controller
{
 function doctors()
 {
     return view('our-services');
 }

function estate()
 {
     return view('realty');
 }

 function institutes()
 {
     return view('institutes');
 }

function market()
 {
     return view('marketresearch');
 }


 function about()
 {
     return view('about-us');
 }


 function plan(Request $req)
 {
     $name=$req->input('name');

     $email=$req->input('email');
     $mobno=$req->input('number');
     $web_url=$req->input('web_url');
     $service_name=$req->input('pagename');
     $plan=$req->input('plan-type');
     DB::insert('insert into plan (name , emailid , mobno,web_url , service_name , plan_type ) values (?, ?, ? , ? , ? , ?)',
      [$name,$email,$mobno,$web_url,$service_name,$plan]);
 Alert::success(" Details Sent!","Thank You for Contacting Us Our Representative will Contact You shortly");
return redirect()->back();

 }
 
  public function resume(Request $req1)
    {
        $name=$req1->input('name');

        $email=$req1->input('email');
        $mobno=$req1->input('number');

        $position_name=$req1->input('position');
       
        if ($req1->hasFile('filecv')) {
            $filename=$req1->file('filecv')->getClientOriginalName();
          $file=$req1->file('filecv');
        }


        $details=array(
            'name'=>$name,
            'email'=>$email,
            'number'=>$mobno,
            'position'=>$position_name,
            'resume'=>$file,

        );

       
        Alert::success('Success Title', 'Success Message');
        
        Mail::to('patels311298.pp@gmail.com')->send(new  \App\Mail\ResumeMail($details));
        return redirect('/our-team')->with('success','Your data has been submitted we will contact you shortly');
    }


           public function train()
                {
                        return view('training');
                }
        
         public function trans(Request $request)
                {
                    $datas = $request->input();
                
                $req = new training();
                $req->name = $datas['name'];
                $req->email = $datas['email'];
                $req->train = $datas['training'];
                $req->no = $datas['phone'];
                $req->meg = $datas['comment'];
        
                $req->save();
                $details = array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'number' => $request->number,
                    'message' => $request->message,
                );
        
                    Mail::to($req->email)->send(new TrainingMail($details));
                Mail::to('info@idotcommers.com')->send(new  \App\Mail\ContactMail($details));
                return redirect('/our-team')->with('success', 'Your data has been submitted we will contact you shortly');
                }


}
