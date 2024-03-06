<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use App\Models\saleslead;
use App\Models\salesstatus;
use App\Models\salesaction;
use App\Models\todayaction;
use App\Models\assgin;
use App\Models\pendingleads;
use Carbon\Carbon;






class SalesController extends Controller
{

    function saleslogin()
    {
        return view('sales.login');
    }
    public function salesdashboard1(Request $request)
    {
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
        $user= $request->session()->get('data.user');


        $ledsaction = date("Y-m-d");
        $username = DB::table('saleslogin')->where('user', '=', $user)->first();
        
        $today = DB::table('todayaction')->where('adate', 'Like', '%' . $ledsaction . '%')->count();

        $alllead = saleslead::where('status','!=','Dead')->count();
        $tnew = saleslead::where('status', '=', 'New')->count();
        $twarm = saleslead::where('status', '=', 'Warm')->count();


        return view('sales.index')->with(compact('username', 'today', 'alllead', 'tnew', 'twarm','user'));
    }
    function salesdashboard(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $user = $request->input('user');


        $login = DB::table('saleslogin')->where(['username' => $username, 'password' => $password, 'user' => $user])->get();

        if (count($login) > 0) {
            $request->session()->put('data', $request->input());


            $ledsaction = date("Y-m-d");
            $username = DB::table('saleslogin')->where('user', '=', $user)->first();
            $today = DB::table('todayaction')->where('adate', 'Like', '%' . $ledsaction . '%')->count();

           $alllead = saleslead::where('status','!=','Dead')->count();
            $tnew = saleslead::where('status','=', 'New')->count();
            $twarm = saleslead::where('status', '=', 'Warm')->count();


            return view('sales.index')->with(compact('username', 'today','alllead','tnew','twarm','user'));
        } else {

            return view('sales.login');
        }
    }

    function list_lead(Request $request)
    {
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
$user= $request->session()->get('data.user');
      //  $leads = saleslead::join('saction', 'saction.id', '=', 'saleslead.action')->get(['saleslead.*', 'saction.name']);
        $leads =DB::table('saleslead')
        ->join('saction', 'saleslead.action', '=', 'saction.aid')
        ->select('saleslead.*', 'saction.aid', 'saction.aname')
         ->where('saleslead.status', '!=', 'Dead')
         ->orderBy('id', 'desc')
        ->get();
        $saction = DB::table('saction')
                ->get();
       
       
//dd($leads);

        return view('sales.lead_list')->with(compact('leads','saction','user'));
    }


    function add_lead(Request $request)
    {
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
           $user= $request->session()->get('data.user');
        $action= DB::table('saction')->get();
        $salesid = DB::table('saleslead')->select('sleadid')->orderBy( 'id', 'desc')->limit(1)->first();
       
       return view('sales.lead_add')->with(compact('action', 'salesid','user'));
    }


    function savelead(Request $request)
    {
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
        $datas = $request->input();
        $req = new saleslead();
        $req->name = $datas['name'];
        $req->number = $datas['number'];
        $req->email = $datas['email'];
        $req->company = $datas['company'];
        $req->website = $datas['website'];
        $req->plinkedin = $datas['plinkurl'];
           $req->leaduserby = $datas['leaduserby'];
        $req->sleadid = $datas['leadid'];
        $req->status = $datas['blog_category'];
        $req->action = $datas['laction'];
        $req->smedia = json_encode($datas['smedia']);
         $req->save();
      
        
        $req = new salesstatus();
        $req->leadid = $datas['leadid'];
        $req->status = $datas['blog_category'];
        // $req->sdate = $datas['sdate'];
        $req->scomment = $datas['scomment'];
        $req->save();

        $req = new salesaction();
        $req->leadid = $datas['leadid'];
        $req->action = $datas['laction'];
        $req->adate = $datas['adate'];
        $req->acomment = $datas['acomment'];
        $req->save();
        $req = new todayaction();
        $req->leadid = $datas['leadid'];
        $req->action = $datas['laction'];
        $req->adate = $datas['adate'];
        $req->acomment = $datas['acomment'];
        $req->save();
        return redirect('sales/lead_list');
    }

    function edit_lead($id, Request $request){
     
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
           $user= $request->session()->get('data.user');
               $leads =  DB::table('saleslead')
              ->where('id','=', $id)
               ->limit(1)
        ->first();
       
       
       return view('sales.lead_edit')->with(compact('leads','user'));
    }
    function update_lead($id, Request $request)
    {
      
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
        $datas = $request->input();

       $req = saleslead::find($request->id);
       ($req->name = $datas['name']);
        $req->number = $datas['number'];
        $req->email = $datas['email'];
        $req->company = $datas['company'];
        $req->website = $datas['website'];
        $req->plinkedin = $datas['plinkurl'];
        $req->leaduserby = $datas['leaduserby'];
        $req->smedia = json_encode($datas['smedia']);
        $req->save();
        return redirect()->back()->with('flash_message', 'Update successfully added!');
    }


    function editstatus_lead($id, Request $request)
    {
          //dd($id);
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
   $user= $request->session()->get('data.user');
        $leadsststus =  DB::table('salesstatus')
        ->where('leadid','=',$id)
        ->orderBy('id','desc')
        ->get();
            //dd($leadsststus);
        
            $leadsaction = DB::table('salesaction')
            ->select('salesaction.leadid', 'salesaction.action', 'salesaction.adate', 'salesaction.acomment', 'saction.aid', 'saction.aname')
            ->join('saction', 'salesaction.action', '=', 'saction.aid')
            ->where('salesaction.leadid', '=', $id)
            ->orderBy('id', 'desc')
            ->get();
             
                     $username = DB::table('saleslead')
        ->select('name', 'leaduserby','number','email', 'sleadid')
        ->where('sleadid', '=', $id)
        ->first();
  $assign=DB::table('assign')
        ->where('leadid','=',$id)
        ->first();
        $action = DB::table('saction')->get();
        return view('sales.status_edit')->with(compact('action', 'leadsststus', 'leadsaction','id','username','user','assign'));
    }

    function updatestatus_lead($id, Request $request)
    {
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
        $datas = $request->input();
        $status = $request->input('blog_category');
        $action = $request->input('laction');
      
        DB::update('update saleslead set
            status = ? , action = ?
            where sleadid = ?', [$status, $action,$id]);
        $req = new salesstatus();
        $req->leadid = $datas['leadid'];
        $req->status = $datas['blog_category'];
        // $req->sdate = $datas['sdate'];
        $req->scomment = $datas['scomment'];
       $req->save();

        $req = new salesaction();
        $req->leadid = $datas['leadid'];
        $req->action = $datas['laction'];
        $req->adate = $datas['adate'];
        $req->acomment = $datas['acomment'];
        $req->save();
        DB::update('update todayaction set
            action = ? , adate = ?,acomment =?
            where leadid = ?', [$req->action, $req->adate, $req->acomment, $req->leadid]);

        return redirect()->back()->with('flash_message', 'Update successfully added!');

    }


    function today(Request $request)
    {      
           if (!session()->has('data')) {
            return redirect('sales/login');
        }
           $user= $request->session()->get('data.user');
           
           
        $yesterday = Carbon::yesterday();
        $back = $yesterday->format('Y-m-d');

        $pleadsaction = DB::table('pendingleads')
        ->where('acdate', 'Like', '%' . $back . '%')
            ->join('saleslead', 'pendingleads.leadid', '=', 'saleslead.sleadid')
            ->join('saction', 'saleslead.action', '=', 'saction.aid')
            ->select('pendingleads.*', 'saleslead.id as sid', 'saleslead.name', 'saleslead.number', 'saleslead.email', 'saleslead.company', 'saleslead.status', 'saleslead.sleadid', 'saleslead.leaduserby', 'saction.aid', 'saction.aname')
            ->get();
           
        $ledsaction = date("Y-m-d");
         $leadsaction = DB::table('todayaction')
                      ->where('adate','Like', '%'.$ledsaction.'%')
                      ->join('saleslead','todayaction.leadid','=', 'saleslead.sleadid')
                      ->join('saction', 'todayaction.action','=', 'saction.aid')
                      ->select('todayaction.*', 'saleslead.id as sid', 'saleslead.name', 'saleslead.number', 'saleslead.email', 'saleslead.company','saleslead.leaduserby', 'saleslead.status','saleslead.sleadid', 'saction.aid', 'saction.aname')
                         ->where('saleslead.status', '!=', 'Dead')
                        ->get();
                       //dd($leadsaction);
                       return view('sales.todayaction')->with(compact('leadsaction','user','pleadsaction'));
    
    }
 function short(Request $request)
    {
        $id = $request->get('val');
             $sort= DB::table('saleslead')
        ->join('saction', 'saleslead.action', '=', 'saction.aid')
        ->select('saleslead.*', 'saction.aid', 'saction.aname')
        ->where('action','=',$id)
        ->get();
        $demo = json_encode($sort);
        return response()->json(array(
            'demo' => $demo,
           

        ));
    }

function dead(Request $request)
{  
    if (!session()->has('data')) {
            return redirect('sales/login');
        }
            $user= $request->session()->get('data.user');
        $leads = DB::table('saleslead')
            ->join('saction', 'saleslead.action', '=', 'saction.aid')
            ->select('saleslead.*', 'saction.aid', 'saction.aname')
            ->where('saleslead.status', '=', 'Dead')
            ->get();
            //dd($leads);
    return view('sales.dead')->with(compact('leads','user'));
}
  function list_view($id, Request $request)
    {
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
   $user= $request->session()->get('data.user');
        $leadsststus =  DB::table('salesstatus')
        ->where('leadid', '=', $id)
            ->orderBy('id', 'desc')
            ->get();
        //dd($leadsststus);

        $leadsaction = DB::table('salesaction')
        ->select('salesaction.leadid', 'salesaction.action', 'salesaction.adate', 'salesaction.acomment','salesaction.created_at', 'saction.aid', 'saction.aname')
        ->join('saction', 'salesaction.action', '=', 'saction.aid')
        ->where('salesaction.leadid', '=', $id)
            ->orderBy('id', 'desc')
            ->get();
        //dd($leadsaction);
        $username=DB::table('saleslead')
                    ->select('name', 'leaduserby','number', 'sleadid')
                    ->where('sleadid','=',$id)
                    ->first();
                   

        $action = DB::table('saction')->get();
       
        return view('sales.statusview')->with(compact('action', 'leadsststus', 'leadsaction', 'id','username','user'));
    }
 function upcome(Request $request)
    {
                if (!session()->has('data')) {
            return redirect('sales/login');
        }
   $user= $request->session()->get('data.user');
        $startDate = Carbon::today();
        $e1Date = Carbon::today()->addDays(1);
        $e2Date = Carbon::today()->addDays(8);
        
      
        $leadsaction = DB::table('todayaction')
           
            ->join('saleslead','todayaction.leadid','=', 'saleslead.sleadid')
                      ->join('saction', 'todayaction.action','=', 'saction.aid')
                      ->select('todayaction.*', 'saleslead.id as sid', 'saleslead.name', 'saleslead.number', 'saleslead.email', 'saleslead.company','saleslead.leaduserby', 'saleslead.status','saleslead.sleadid', 'saction.aid', 'saction.aname')
                       ->whereBetween('adate', [$e1Date, $e2Date])->orderBy('adate', 'ASC') 
                        ->get();

        return view('sales.upcomming')->with(compact('leadsaction','user'));
    }
    
     function poojan(Request $request)
    {
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
              $datas = $request->input();

        $req = new assgin();
        $req->leadid = $datas['leadid'];
        $req->pdate = $datas['pdate'];
        $req->pcomment = $datas['pcomment'];
        $req->save();
        return redirect()->back()->with('flash_message', 'Assign successfully!');
    }

    function assign_list(Request $request)
    {
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
        $user = $request->session()->get('data.user');
         $assgin = DB::table('assign')
            ->join('saleslead', 'assign.leadid', '=', 'saleslead.sleadid')
            ->select('assign.*','saleslead.id', 'saleslead.name', 'saleslead.number', 'saleslead.email', 'saleslead.company', 'saleslead.leaduserby', 'saleslead.status', 'saleslead.action', 'saleslead.sleadid')
            ->get();
         return view('sales.assign')->with(compact('assgin','user'));
    }
    
    
    
    function pendinglead(Request $request)
    {
        if (!session()->has('data')) {
            return redirect('sales/login');
        }
        $user = $request->session()->get('data.user');
        $yesterday = Carbon::yesterday();
    $back=$yesterday->format('Y-m-d');

        $leadsaction = DB::table('pendingleads')
        ->where('acdate', 'Like', '%' . $back . '%')
            ->join('saleslead', 'pendingleads.leadid', '=', 'saleslead.sleadid')
            ->join('saction', 'saleslead.action', '=', 'saction.aid')
            ->select('pendingleads.*', 'saleslead.id as sid', 'saleslead.name', 'saleslead.number', 'saleslead.email', 'saleslead.company', 'saleslead.status', 'saleslead.sleadid', 'saleslead.leaduserby', 'saction.aid', 'saction.aname')
            ->get();
           return view('sales.pending')->with(compact('leadsaction','user'));
    }

    
    
     Public function delete($id,Request $request){
                 if (!session()->has('data')) {
            return redirect('sales/login');
        }
       
       $lead=DB::table('saleslead')->where('sleadid', $id)->delete(); 
       $action=DB::table('salesaction')->where('leadid', $id)->delete(); 
       $status=DB::table('salesstatus')->where('leadid', $id)->delete(); 
         $today=DB::table('todayaction')->where('leadid', $id)->delete(); 
          return redirect()->back()->with('success', 'Delete successfully');
        }
    
}
