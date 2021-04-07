<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TagManagement;
use Toastr;
use Auth;


class TagManagementController extends Controller
{
    public function index(){
        // return view('Admin/tag-management');
        $tags = DB::table('tag_management')->get();
        return view('admin.tag-management',compact('tags'));
    }
    public function store(Request $request){
        $tag = new TagManagement();
        $tag->tag_name = $request->input('tagname');
        $tag->updated_at = date('Y-m-d H:i:s');
        $tag->created_at = date('Y-m-d H:i:s');
        $tag->updated_by = Auth::user()->name;
        $tag->save();
        Toastr::success('Successfully Added', 'Tag');
        return redirect()->back();


    }
    public function delete($id){
        // return view('Admin/tag-management');
        $tags = DB::table('tag_management')->where('id',$id)->delete();
        $tags = DB::table('tag_management')->get();
    Toastr::success('Successfully Deleted', 'Tag');
        return view('admin.tag-management',compact('tags'));
        
    }
    public function edit($id){
        // return view('Admin/tag-management');
        $tags = DB::table('tag_management')->find($id);
        return response()->json($tags);
    //    print_r($tags);
        
    }
    public function update(Request $request, $id)
    {
        $product = TagManagement::find($id);
        $product->tag_name = $request->input('name');
        $product->updated_by = Auth::user()->name;
        $product->updated_at=date('Y-m-d H:i:s');
        $product->save();
        // Toastr::success('Successfully Updated', 'Terms & Conditions');
        return back();
        return response()->json($product->tag_name);
        
    }
}
