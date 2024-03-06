<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\blog;
use App\Models\blog_category;
use Illuminate\Http\Request;

class RssFeedController extends Controller
{
      public function feeds(Request $request){
                    $data = DB::table('blog')
                                ->select('blog.*')
                                ->orderByDesc('id')
                                ->limit(10)
                                ->get();
        return response()->view('feed', compact('data'))->header('Content-Type', 'application/xml');

    }


public function feed()

{

     $category = DB::table('blog_category')
                ->select('blog_category.*')
                ->get();

$data = DB::table('blog')
                                ->select('blog.*')
                                ->orderByDesc('id')
                                ->limit(10)
                                ->get();

        return view('rss-feed')->with(compact('category','data'));
}
public function show(Request $request)

{ 
$details=array(
'name'=>$request->name,
);

    $name=$details['name'];

   
 
  $category = DB::table('blog_category')
                ->select('blog_category.*')
                ->get();

        $data = DB::table('blog')
                ->select('blog.blog_title','blog.id')
                ->where('blog.blog_category','=',$name)
                ->get();

        return view('rss-view')->with(compact('category','data','name'));
}


public function rss(Request $request,$id)
{

   


   
   
 $blogs = blog::where('id',$id)->get();

 return response()->view('rss-xml', compact('blogs'))->header('Content-Type', 'application/xml');

}

}