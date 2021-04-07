<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;   

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogcomments = DB::table('blogcomments')->count();
        $users = DB::table('users')->count();
        $subscription = DB::table('subscriptions')->count();
        $blogs = DB::table('new_blogs')->count();
        return view('admin.home',compact('blogs','blogcomments','users','subscription'));
    }
    public function view()
 {
    
 }   
}
