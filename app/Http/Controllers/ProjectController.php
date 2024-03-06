<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project_details;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function list_project(){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $project = project_details::all();
        return view('admin.project_list')->with(compact('project'));
    }

    function view_project($id){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $project = project_details::where('id',$id)->first();

        return view('admin.project_view')->with(compact('project'));
    }

    function add_project(){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $project = DB::table('category')
                ->select('category.project_type')
                ->get();

        return view('admin.project_add')->with(compact('project'));
    }

    function save_project(Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $datas = $request->input();


        $image1=$request->file('image1');
        $destinationPath = public_path('img');
             $filename1 = $image1->getClientOriginalName();
            $image1->move($destinationPath, $filename1);

        $image2=$request->file('image2');
        $destinationPath = public_path('img');
             $filename2 = $image2->getClientOriginalName();
            $image2->move($destinationPath, $filename2);

        $req=new project_details();
        $req->project_type=$datas['project_type'];
        $req->project_title=$datas['project_title'];
        $req->description=$datas['summary-ckeditor'];
        $req->image1=$filename1;
        $req->image2=$filename2;


        $req->save();

         return redirect('admin/project_list');
    }

    function edit_project($id, Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $project = project_details::where('id',$id)->first();

        $category = DB::table('category')
                ->select('category.project_type')
                ->get();
        // if(!$blogs){
        //     $request->session()->flash('errorMsg','Record Not Found.');
        //     return redirect('admin.list_projects');
        // }
        return view('admin.project_edit')->with(compact('project','category'));
    }

    function update_project(Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $datas = $request->input();
        $req = project_details::find($request->id);

        $image1=$request->file('image1');

        if($request->hasFile('image1'))
        {

            // $destinationPath = public_path('img');
            $image1->move("public/img/",$image1->getClientOriginalName());
            $filename1                = $image1->getClientOriginalName();

            $req->image1=$filename1;

        }

        else if(!$request->hasFile('image1'))
        {
            $image1=$request->image1;
        }

        $image2=$request->file('image2');

        if($request->hasFile('image2'))
        {

            // $destinationPath = public_path('img');
            $image2->move("public/img/",$image2->getClientOriginalName());
            $filename2                = $image2->getClientOriginalName();
            $req->image2=$filename2;


        }

        else if(!$request->hasFile('image2'))
        {
            $image2=$request->image2;
        }

        $req->project_type=$datas['project_type'];
        $req->project_title=$datas['project_title'];
        $req->description=$datas['summary-ckeditor'];




        $req->save();

        return redirect('admin/project_list');

    }


    function delete_project($id, Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
            $project = project_details::where('id',$id)->first();
            // if(!$uniprofile){
            //     $request->session()->flash('errorMsg','Record Not Found.');
            //     return redirect('/unilist');
            // }
            project_details::where('id',$id)->delete();
            // $request->session()->flash('msg','Record Delete successfully');
            return redirect('admin/project_list');
        }
}
