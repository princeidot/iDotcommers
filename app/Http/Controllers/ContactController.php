<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
     function contact(){
         if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $contact = contact::all();
        return view('admin.contacts')->with(compact('contact'));
    }

    function delete_contact($id, Request $request){
      
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $blogs = contact::where('id',$id)->first();
        // if(!$uniprofile){
        //     $request->session()->flash('errorMsg','Record Not Found.');
        //     return redirect('/unilist');
        // }
        contact::where('id',$id)->delete();
        // $request->session()->flash('msg','Record Delete successfully');
        return redirect('admin/contacts');
    }
}
