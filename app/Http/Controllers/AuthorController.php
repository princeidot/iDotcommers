<?php

namespace App\Http\Controllers;

use App\Models\author;
use Illuminate\Support\Facades\DB;
use App\Models\audit;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    function list_author(){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $author = author::all();
        return view('admin.author_list')->with(compact('author'));
    }


    function add_author(){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        return view('admin.author_add');
    }


    function save_author(Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $datas = $request->input();

        $image=$request->file('image');
            $destinationPath = public_path('img');
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);

        $req=new author();
        $req->name=$datas['name'];
        $req->designation=$datas['designation'];
        $req->description=$datas['description'];
        $req->image=$filename;

        $req->save();

         return redirect('admin/author_list');
    }

    function edit_author($id, Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $author = author::where('id',$id)->first();

        // if(!$author){
        //     $request->session()->flash('errorMsg','Record Not Found.');
        //     return redirect('admin.list_author');
        // }
        return view('admin.author_edit')->with(compact('author'));
    }

    function update_author(Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $datas = $request->input();
        $req = author::find($request->id);

        if($request->hasFile('image'))
        {
        $image=$request->file('image');
        $destinationPath = public_path('img');
            $filename = $image->getClientOriginalName();
            $image->move($destinationPath, $filename);

        $req->image=$filename;

        }

        else if(!$request->hasFile('image'))
        {
            $image=$request->image;
        }

        $req->name=$datas['name'];
        $req->designation=$datas['designation'];
        $req->description=$datas['description'];
        $req->save();

        return redirect('admin/author_list');

    }


    function delete_author($id, Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
            $author = author::where('id',$id)->first();
            // if(!$uniprofile){
            //     $request->session()->flash('errorMsg','Record Not Found.');
            //     return redirect('/unilist');
            // }
            author::where('id',$id)->delete();
            // $request->session()->flash('msg','Record Delete successfully');
            return redirect('admin/author_list');
        }
        
        
        function list_audit(Request $request){
            if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $audit = audit::all();
        return view('admin.audit_list')->with(compact('audit'));

        }
        
         function delete_audit($id, Request $request){
             
       if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

            $author = audit::where('id',$id)->first();
            
            audit::where('id',$id)->delete();
            // $request->session()->flash('msg','Record Delete successfully');
            return redirect('admin/audit_list');
        }
}
