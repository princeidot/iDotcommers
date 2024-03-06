<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\blog;
use App\Models\blog_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Str;

class BlogController extends Controller
{
    function blog( Request $request)
    {
        $blogs = DB::table('blog')
                ->select('blog.*')
                ->orderByDesc('id')
                ->paginate(12);

        return view('blog-grid')->with(compact('blogs'));
    }

    function blog_post($blog_url){

        $blogs = blog::where('blog_url',$blog_url)->first();
        $categories = blog_category::all();
        $recent = DB::table('blog')
                ->orderByDesc('id')
                ->limit(6)
                ->get();


  $related_posts=DB::table('blog')
      ->select('blog.*')
      ->where('blog.blog_category',$blogs->blog_category)
      ->limit(3)
      ->orderByDesc('id')
      ->get();

        $author = DB::table('blog')
        ->select('blog.*','author.*')
        ->join('author','blog.author_name',"=",'author.name')
        ->where('blog.blog_url',"=",$blog_url)
        ->limit(1)
        ->get();

        //To get all tags column for the specific blog
        $tags = DB::table('blog')
        ->select('blog.tags')
        ->where('blog.blog_url',"=",$blog_url)
        ->get();

        //To separate the values by comma(,) and store it as an array
        $tags_array = explode(",",$tags);

        //To replace the array brackets so that the plain string is displayed
        $tags_array = str_replace(['[{"tags":"','"}]','[{"tags":null}]'],"",$tags_array);


        return view('blog-post')->with(compact('blogs','categories','author','recent','tags_array','related_posts'));
    }

   function fetch(Request $request)
    {
        if ($request->get('query')) {
          $query = $request->get('query');
         
           $data = DB::table('blog')
              ->select('id','blog_title','blog_category','author_name','blog_url')
              ->where('blog_title', 'LIKE',  '%' . $query . '%')
              ->orderBy('created_at','DESC')
              ->limit(10)
              ->get();

          $output = '<ul class="dropdown-menu" style="display:block; position:relative;overflow:visible;">';
          foreach ($data as $row) {

              $output .= "
             

    <li class='ls'><a href='https://www.idotcommers.com/" . $row->blog_url . "/'>
     " . substr($row->blog_title,0,50) . "...</a></li>

                         ";
          }
          $output .= '</ul>';
          echo $output;
      }
  }

    function tags($tag, Request $request){
        $url = str_replace("-"," ",$tag);

        $tags = DB::table('blog')
        ->select('blog.*')
        ->whereRaw("find_in_set('$url',tags)")
        ->paginate(12);

        return view('blog-grid-tags')->with(compact('tags','url'));
    }


    function category($cat,Request $request)
    {
        $url = str_replace("-"," ",$cat);
        $category = DB::table('blog')
                ->select('blog.*')
                ->where('blog.blog_category','=',$url)
                ->paginate(12);


        return view('blog-grid-category')->with(compact('category','url'));
    }

    function author($auth,Request $request)
    {
        $url = str_replace("-"," ",$auth);

        $author = DB::table('blog')
                ->select('blog.*')
                ->where('blog.author_name','=',$url)
                ->orderByDesc('id')
                ->paginate(12);


        return view('blog-grid-author')->with(compact('author','url'));
    }



}
