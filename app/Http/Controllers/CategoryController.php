<?php

namespace App\Http\Controllers;

use App\Models\blog_category;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function list_category(){
if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $category = blog_category::all();
        return view('admin.category_list')->with(compact('category'));
    }


    function add_category(){
if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        return view('admin.category_add');
    }


    function save_category(Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $datas = $request->input();

        $req=new blog_category();
        $req->name=$datas['category'];

        $req->save();

         return redirect('admin/category_list');
    }

    function edit_category($id, Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $category = blog_category::where('id',$id)->first();

        // if(!$category){
        //     $request->session()->flash('errorMsg','Record Not Found.');
        //     return redirect('admin.list_category');
        // }
        return view('admin.category_edit')->with(compact('category'));
    }

    function update_category(Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $datas = $request->input();
        $req = blog_category::find($request->id);

        $req->name=$datas['category'];
        $req->save();

        return redirect('admin/category_list');

    }


    function delete_category($id, Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
            $category = blog_category::where('id',$id)->first();
            // if(!$uniprofile){
            //     $request->session()->flash('errorMsg','Record Not Found.');
            //     return redirect('/unilist');
            // }
            blog_category::where('id',$id)->delete();
            // $request->session()->flash('msg','Record Delete successfully');
            return redirect('admin/category_list');
        }
}
