<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogManageController extends Controller
{
    function list_blog(){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $blogs = blog::all();
        return view('admin.blog_list')->with(compact('blogs'));
    }

    function view_blog($id){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $blogs = blog::where('id',$id)->first();

        return view('admin.blog_view')->with(compact('blogs'));
    }

    function add_blog(){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $author = DB::table('author')
                ->select('author.name')
                ->get();

        $category = DB::table('blog_category')
                ->select('blog_category.name')
                ->get();

        return view('admin.blog_add')->with(compact('author','category'));
    }

    function save_blog(Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }

        $datas = $request->input();


            $image1=$request->file('image1');
            $destinationPath = public_path('img');
                $filename = $image1->getClientOriginalName();
                $image1->move($destinationPath, $filename);

        $req=new blog();
        $req->blog_title=$datas['blog_title'];
        $req->blog_category=$datas['blog_category'];
        $req->description=$datas['summary-ckeditor'];
         $req->description1=$datas['headdescription'];
        $req->blog_url=$datas['url'];
                $req->tags=$datas['tags'];

        $req->author_name=$datas['author_name'];
        $req->image1=$filename;

        $req->save();

         return redirect('admin/blog_list');
    }

    function edit_blog($id, Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $blogs = blog::where('id',$id)->first();

        $author = DB::table('author')
                ->select('author.name')
                ->get();

                $category = DB::table('blog_category')
                ->select('blog_category.name')
                ->get();

                // if(!$blogs){
        //     $request->session()->flash('errorMsg','Record Not Found.');
        //     return redirect('admin.list_blogs');
        // }
        return view('admin.blog_edit')->with(compact('blogs','author','category'));
    }

    function update_blog(Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
        $datas = $request->input();
        $req = blog::find($request->id);

        $image1=$request->file('image1');

        if($request->hasFile('image1'))
        {

            // $destinationPath = public_path('img');
            $image1->move("public/img/",$image1->getClientOriginalName());
            $image                = $image1->getClientOriginalName();
            $req->image1=$image;

        }

        else if(!$request->hasFile('image1'))
        {
            $image1=$request->image1;
        }

        $req->blog_title=$datas['blog_title'];
        $req->blog_category=$datas['blog_category'];
        $req->description=$datas['summary-ckeditor'];
        $req->blog_url=$datas['url'];
                $req->tags=$datas['tags'];

        $req->author_name=$datas['author_name'];
         $req->description1=$datas['headdescription'];


        // $req->image1=$filename1;



        $req->save();

        return redirect('admin/blog_list');

    }


    function delete_blog($id, Request $request){
        if(!session()->has('data'))
        {
            return redirect('admin/login');
        }
            $blogs = blog::where('id',$id)->first();
            // if(!$uniprofile){
            //     $request->session()->flash('errorMsg','Record Not Found.');
            //     return redirect('/unilist');
            // }
            blog::where('id',$id)->delete();
            // $request->session()->flash('msg','Record Delete successfully');
            return redirect('admin/blog_list');
        }
}
