<?php

// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\BlogCatogery;
// use Illuminate\Support\Facades\DB;
// use Toastr;
// use Auth;

// class blog_catogeryController extends Controller
// {
//     public function list(){
//         // return view('Admin/catogery-list');
//         $blogcatogery = DB::table('blog_catogeries')->get();
//         // dd($blogcatogery);   
//         return view('admin.catogery-list',['blogcatogerys'=>$blogcatogery]);
//     }
//     public function delete($id){
//         // return view('Admin/catogery-list');
//         $data = DB::table('blog_catogeries')->where('id',$id)->delete();
//         Toastr::success('Successfully Deleted', 'Subscriptions');
//         return redirect()->back();        
//     }
//     // ajax view
//     public function edit($id){
//         $blog = BlogCatogery::find($id);
//         return response()->json($blog);
//     }
//     // edit top page
//     public function update($id){
        
//         $blogcatogerys = DB::table('blog_catogeries')->where('id',$id)->get();
//         return view('Admin/update-blog-catogery',['blogcatogerys'=>$blogcatogerys]);

//         // dd($blogcatogery);
//     }
//     // edit top page
//     public function updatesave(Request $request,$id){
//         $contact = BlogCatogery::find($id);
//         $contact->catogery_name = $request->input('catogeryname');
//         $contact->short_description = $request->input('shortdescription');
//         $contact->seo_title = $request->input('seotitle');
//         $contact->seo_description = $request->input('seodescription');
//         $contact->seo_keyword = $request->input('seokeyword');
//         $contact->updated_at=date('Y-m-d H:i:s');
//         $contact->created_at=date('Y-m-d H:i:s');
//         $contact->updated_by = Auth::user()->name;
//         $contact->save();
//         Toastr::success('Successfully Updated', 'Terms & Conditions');
//         return back();
//     }
//     public function index(){
//         return view('Admin/blog-catogery');
//     }
//     public function store(Request $request){
//         // dd($request);
//         $catogery = new BlogCatogery();
//         $catogery->catogery_name = $request->input('catogeryname');
//         $catogery->short_description = $request->input('shortdescription');
//         $catogery->seo_title = $request->input('seotitle');
//         $catogery->seo_description = $request->input('seodescription');
//         $catogery->seo_keyword = $request->input('seokeyword');
//         $catogery->updated_at=date('Y-m-d H:i:s');
//         $catogery->created_at=date('Y-m-d H:i:s');
//         $catogery->updated_by = Auth::user()->name;
//         $catogery->save();
//         Toastr::success('Successfully Updated', 'Terms & Conditions');
//          return back();
//     }
// }
