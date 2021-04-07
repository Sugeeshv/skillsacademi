<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;

class TagManagement extends Controller
{
    public function view(){
        // return view('Admin/blog-list');
        $bloglist = DB::table('new_blogs')->get();
        return view('admin.blog-list',['bloglist'=>$bloglist]);
    }
    public function edit($id){

    }
    public function delete($id){
        $data = DB::table('new_blogs')->where('id',$id)->delete();
        Toastr::success('Successfully Deleted', 'Blog');
        return redirect()->back();

    }
}
