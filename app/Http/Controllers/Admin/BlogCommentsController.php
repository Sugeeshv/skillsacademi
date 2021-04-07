<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\blogcomments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;

class BlogCommentsController extends Controller
{
    public function store(Request $request){
        // dd($request);
        $blogcomment = new blogcomments();
        $blogcomment->blog_id = $request->input('blog-id');
        $blogcomment->name = $request->input('name');
        $blogcomment->article_slug = $request->input('blog-article');
        $blogcomment->email = $request->input('email');
        $blogcomment->message = $request->input('message');
        $blogcomment->save();
        Toastr::success('Successfully Updated', 'Terms & Conditions');
        return redirect()->back();

    }
    public function index(Request $request){
        $blogcomments = DB::table('blogcomments')->get();
        return view('admin.blogcomments',compact('blogcomments'));  

    }
    public function delete(Request $request,$id){
        $data = DB::table('blogcomments')->where('id',$id)->delete();
        Toastr::success('Blog Comment Deleted', 'Blog Comment');
        return redirect()->back();  

    }
    public function view(Request $request,$id){
        $blog  = DB::table('new_blogs')->where('id',$id)->get();
        return view('website.single-blog',compact('blog'));  

    }
    public function control(Request $request,$id){
        $data = DB::table('blogcomments')->where('id',$id)->first()->val;
        // return response()->json($data);
        $true=('true');
        $false=('false');
        if($data == $false){
            $tt = $true;
        }elseif($data == $true){
            $tt = $false;
        }

        // dd($data);
        $bgcontrol = blogcomments::find($id);
        $bgcontrol->val = $tt;
        $bgcontrol->save();
        Toastr::success('Successfully Updated', 'Blog Comments');
        return back();
        return response()->json('hi');

    }

}
