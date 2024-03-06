<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WorkController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home-design-agency');
// });


Route::get('/', 'HomeController@index');
Route::post('/fetchb', 'BlogController@fetch')->name('autocomplete.fetch');

Route::get('training', 'ServicesController@train');
Route::post('transubmit', 'ServicesController@trans');
Route::get('/privacy-policy', 'HomeController@privacy');
Route::get('/contact', 'HomeController@contact');
Route::post('contacted', 'HomeController@contacted');
Route::get('/free-website-audit', 'HomeController@audit');
Route::post('/audited', 'HomeController@audited');

Route::get('/our-team', 'HomeController@team');
Route::get('job-detail','WorkController@job');
//Route::get('/index1', 'IndexController@index1');

// SITEMAP AND PRIVACY POLICY
Route::get('/sitemap_index.xml', 'HomeController@sitemap');
Route::get('/sitemap', 'HomeController@sitemap1');

//Rss-Feed
Route::get('rss-feed','RssFeedController@feed')->name('rss-view');
Route::post('rss-feed','RssFeedController@show')->name('rss-show');
Route::get('rss.xml/{id}','RssFeedController@rss')->name('rss-xml');



Route::get('/doctors', 'ServicesController@doctors');
Route::get('/real-estate', 'ServicesController@estate');
Route::get('/institutes', 'ServicesController@institutes');
Route::get('/market-research', 'ServicesController@market');
Route::get('/about-us', 'ServicesController@about');
Route::get('/blog', 'BlogController@blog');
Route::get('/{blog_title}', 'BlogController@blog_post');
Route::get('/blog/{cat}', 'BlogController@category');
Route::get('/author/{auth}', 'BlogController@author');
Route::get('/tag/{tag}', 'BlogController@tags');
Route::post('plan-submit','ServicesController@plan');

Route::post('resume-submit','ServicesController@resume');

//Amazing Work-website

Route::get('/website/{id}', 'WorkController@website');
Route::get('/seo/{id}', 'WorkController@seo');
Route::get('/smm/{id}', 'WorkController@smm');
Route::get('/sem/{id}', 'WorkController@sem');





// ----------------BACKEND-------------------- //

// LOGIN
Route::get('admin/login', 'DashboardController@login');
Route::post('admin/dashboard', 'DashboardController@dashboard');
Route::get('admin/dashboard1', 'DashboardController@dashboard1');




// BLOG CONTROL Section

//List, Edit, Update
Route::get('admin/blog_list','BlogManageController@list_blog');
Route::get('admin/blog_edit/{id}','BlogManageController@edit_blog');
Route::post('admin/blog_update/{id}','BlogManageController@update_blog');
Route::get('admin/blog_delete/{id}','BlogManageController@delete_blog');
// Route::get('/blog_view/{id}','BlogManageController@view_blog');

Route::get('admin/package','packageController@index');
Route::get('admin/package/delete/{id}','packageController@delete');


//Add Blog
Route::get('admin/blog_add','BlogManageController@add_blog');
Route::post('admin/save_blog','BlogManageController@save_blog');

// User Details Form control
Route::get('admin/contacts','ContactController@contact');
Route::get('admin/delete_contact/{id}','ContactController@delete_contact');

// Project Control Section

Route::get('admin/project_list','ProjectController@list_project');
Route::get('admin/project_add','ProjectController@add_project');
Route::post('admin/save_project','ProjectController@save_project');
Route::get('admin/project_edit/{id}','ProjectController@edit_project');
Route::post('admin/project_update/{id}','ProjectController@update_project');
Route::get('admin/project_delete/{id}','ProjectController@delete_project');

// Category Control section

Route::get('admin/category_list','CategoryController@list_category');
Route::get('admin/category_add','CategoryController@add_category');
Route::post('admin/save_category','CategoryController@save_category');
Route::get('admin/category_edit/{id}','CategoryController@edit_category');
Route::post('admin/category_update/{id}','CategoryController@update_category');
Route::get('admin/category_delete/{id}','CategoryController@delete_category');

// Author control section

Route::get('admin/author_list','AuthorController@list_author');
Route::get('admin/author_add','AuthorController@add_author');
Route::post('admin/save_author','AuthorController@save_author');
Route::get('admin/author_edit/{id}','AuthorController@edit_author');
Route::post('admin/author_update/{id}','AuthorController@update_author');
Route::get('admin/author_delete/{id}','AuthorController@delete_author');

//Audit
Route::get('admin/audit_list','AuthorController@list_audit');
Route::get('admin/audit_delete/{id}','AuthorController@delete_audit');


// LOGIN FOR LOGIN SESSION
Route::get('/index', function(){

    if(!session()->has('data'))
    {
        return redirect('/login');
    }else{
        return view('admin/index');
    }
});

Route::get('admin/logout/', function () {
    session()->forget('data');
    return view('admin.login');
});

// ----------------CAll BACKEND-------------------- //

Route::get('sales/login', 'SalesController@saleslogin');
Route::post('sales/dashboard', 'SalesController@salesdashboard');
Route::get('sales/dashboard1', 'SalesController@salesdashboard1');
Route::post('/sort', 'SalesController@short')->name('autocomplete.searchnew');

//Add Lead
Route::get('sales/lead_add', 'SalesController@add_lead');
Route::post('sales/save', 'SalesController@savelead');
Route::get('sales/lead_list', 'SalesController@list_lead');

Route::get('sales/lead_edit/{id}', 'SalesController@edit_lead');
Route::post('sales/lead_update/{id}', 'SalesController@update_lead');
Route::get('sales/lead_editstatus/{id}', 'SalesController@editstatus_lead');
Route::post('sales/lead_updatestatus/{id}', 'SalesController@updatestatus_lead');
Route::get('sales/lead_delete/{id}', 'SalesController@delete_lead');
Route::get('sales/today-leads', 'SalesController@today');
Route::get('sales/upcoming-list', 'SalesController@upcome');
Route::get('sales/logout/', function () {
    session()->forget('data');
    return view('sales.login');
});

//Dead List
Route::get('sales/dead_list', 'SalesController@dead');

//View Status Comment
Route::get('sales/list_view/{id}', 'SalesController@list_view');

//Assign List
Route::post('sales/poojan', 'SalesController@poojan');
Route::get('sales/assign_list', 'SalesController@assign_list');

//Pending Lead
Route::get('sales/pending-lead', 'SalesController@pendinglead');
//Delete
Route::get('sales/delete/{id}', 'SalesController@delete');
// ----------------END CAll BACKEND-------------------- //

//End-website
