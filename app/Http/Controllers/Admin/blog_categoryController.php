<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;

class blog_categoryController extends Controller
{
    public function list(){
        $blogcategory = DB::table('blog_categories')->get();
        return view('admin.category-list',['blogcategory'=>$blogcategory]);
    }
    public function delete($id){
        $data = DB::table('blog_categories')->where('id',$id)->delete();
        Toastr::success('Successfully Deleted', 'Blog Category');
        return redirect()->back();        
    }
    public function update($id){
        
        $blogcategorys = DB::table('blog_categories')->where('id',$id)->get();
        return view('admin.update-blog-category',['blogcategorys'=>$blogcategorys]);

    }
    // edit top page
    public function updatesave(Request $request,$id){
        $contact = Blogcategory::find($id);
        $contact->category_name = $request->input('categoryname');
        $contact->short_description = $request->input('shortdescription');
        $contact->seo_title = $request->input('seotitle');
        $contact->seo_description = $request->input('seodescription');
        $contact->seo_keyword = $request->input('seokeyword');
        $contact->updated_at=date('Y-m-d H:i:s');
        $contact->created_at=date('Y-m-d H:i:s');
        $contact->updated_by = Auth::user()->name;
        $contact->save();
        Toastr::success('Successfully Updated', 'Terms & Conditions');
        return back();
    }
    public function index(){
        return view('admin.blog-category');
    }
    public function store(Request $request){
        $category = new Blogcategory();
        $category->category_name = $request->input('categoryname');
        $category->short_description = $request->input('shortdescription');
        $category->seo_title = $request->input('seotitle');
        $category->seo_description = $request->input('seodescription');
        $category->seo_keyword = $request->input('seokeyword');
        $category->updated_at=date('Y-m-d H:i:s');
        $category->created_at=date('Y-m-d H:i:s');
        $category->updated_by = Auth::user()->name;
        $category->save();
        Toastr::success('Successfully Updated', 'Terms & Conditions');
         return back();
    }
}
