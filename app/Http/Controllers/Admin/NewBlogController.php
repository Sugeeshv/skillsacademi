<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewBlog;
use App\Models\TagManagement;
use Illuminate\Support\Facades\DB;
use Toastr; 
use Auth;

class NewBlogController extends Controller
{
    
    public function delete($id){
        $data = DB::table('new_blogs')->where('id',$id)->delete();
        Toastr::success('Successfully Deleted', 'Blog');
        return redirect()->back();

    }
    public function edit($id){
        
        $blog = NewBlog::find($id);
        return response()->json($blog);

    }
    public function update(Request $request, $id){
        $bcategory = DB::table('blog_categories')->get();
        $user = DB::table('users')->get();
        $bloglist = DB::table('new_blogs')->where('id',$id)->get();
        // $blogtags=;
        $blogtags=[];
        $tt=[];
        foreach($bloglist as $t){
            $blogtags=$t->tags;
            $myArray = explode(',', $blogtags);
            $count = count($myArray);
            for($i=0;$i < $count;$i++){
                $value = ($myArray[$i]);
                $tg =  DB::table('tag_management')->where('id',$value)->value('tag_name');
                if($tg==!null){
                    $tt[]=$tg;
                }
            }
        }
            // dd($tt);
        $tagnames=implode(',', $tt);
        return view('admin.blog-edit',compact('bloglist','user','bcategory','tagnames'));

    }
    public function add(Request $request, $id){
        // dd($request);
        $tag =  $request->input('input');
        $myArray = explode(',', $tag);
        $count = count($myArray);
        for($i = 0; $i < $count; $i++) {
                $value = ($myArray[$i]);
                $tagarray = DB::table('tag_management')->where('tag_name',$value)->value('id');
                if($tagarray==null){
                    $blogs = new TagManagement();
                    $blogs->tag_name = $value;
                    $blogs->updated_by = Auth::user()->name;
                    $blogs->save();
                }  
                $tagarray = DB::table('tag_management')->where('tag_name',$value)->value('id');
                $tagid[]=$tagarray;
        }      
        $tagidexp = implode(',', $tagid);
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $destinationPaths = ('admin/blog/uploads/') ;

            $file->move('Admin/blog/uploads/',$filename);
        }else{
            // return $request;
            // $highlights->image = '';
        }
        
        if ($request->hasFile('cover_image')){
            $path1 = Storage::disk('public')->put('tandc_event_cover', $request->file('cover_image'));
            }
            $tandc_content = $request->description;
            if ($tandc_content) {
            $dom = new \domdocument();
            $dom->encoding = 'utf-8';
            libxml_use_internal_errors(true);
            $dom->loadHtml(utf8_decode($tandc_content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            libxml_clear_errors();
            $images = $dom->getelementsbytagname('img');

            $tandc_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
            $tandc_content .= $dom->savehtml($dom->documentElement);
            }
            $updateblog = NewBlog::find($id);
            if($request->hasfile('image')){
                $updateblog->path = $destinationPaths;
                $updateblog->image = $filename;
            }
            $updateblog->article_title = $request->input('article-title');
            $updateblog->article_slug = $request->input('articleslug');
            $updateblog->seo_title = $request->input('seotitle');
            $updateblog->articel_category = $request->input('articelcategory');

            $updateblog->article_content = $tandc_content;
            $updateblog->imagealt_tag = $request->input('imagealttag');
            // $updateblog->article_content = $request->input('articlecontent');
            $updateblog->shortde_scription = $request->input('shortdescription');
            $updateblog->seo_description = $request->input('seodescription');
            $updateblog->tags = $tagidexp;
            $updateblog->seo_keyword = $request->input('seokeyword');
            $updateblog->article = $request->input('article');
            $updateblog->updated_by = Auth::user()->name;
            $updateblog->save();
            Toastr::success('Successfully Updated', 'Create Blog
            ');
            return back()
            ->with('success','You have successfully upload image.');

    }
    public function view(){
        // return view('Admin/blog-list');
        $bloglist = DB::table('new_blogs')->get();
        return view('admin.blog-list',['bloglist'=>$bloglist]);
    }
    public function control(Request $request , $id){
        $data = DB::table('new_blogs')->where('id',$id)->first()->approve;
        // return response()->json($data);
        $true=('true');
        $false=('false');
        if($data == $false){
            $tt = $true;
        }elseif($data == $true){
            $tt = $false;
        }

            // return response()->json($tt);
        $bgpost = NewBlog::find($id);
        $bgpost->approve = $tt;
        $bgpost->save();
        Toastr::success('Successfully Updated', 'Blog Comments');
        return back();
        return response()->json('hi');
    }

    public function index(){
        // return view('Admin/newblog');
        $bcategory = DB::table('blog_categories')->get();
        $user = DB::table('users')->get();
        $bloglist = DB::table('blogs')->get();
        return view('admin.newblog',compact('bloglist','user','bcategory'));
    }
    public function store(Request $request){
        // dd($request);
        $tagid=[];
        $tag =  $request->input('input');
        $myArray = explode(',', $tag);
        $count = count($myArray);
        for($i = 0; $i < $count; $i++) {
                $value = ($myArray[$i]);
                $tagarray = DB::table('tag_management')->where('tag_name',$value)->value('id');
                if($tagarray==null){
                    $blogs = new TagManagement();
                    $blogs->tag_name = $value;
                    $blogs->updated_by = Auth::user()->name;
                    $blogs->save();
                }  
                $tagarray = DB::table('tag_management')->where('tag_name',$value)->value('id');
                $tagid[]=$tagarray;
        }      
        // print_r($tagid);
        $tagidexp = implode(',', $tagid);
        // dd($tagidexp);
        // echo ($data);
        if ($request->hasFile('cover_image')){
            $path1 = Storage::disk('public')->put('news_event_cover', $request->file('cover_image'));
            }
    
            $tandc_content = $request->description;
        
            if ($tandc_content) {
     
            $dom = new \domdocument();
            $dom->encoding = 'utf-8';
            libxml_use_internal_errors(true);
            $dom->loadHtml(utf8_decode($tandc_content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            libxml_clear_errors();
            $images = $dom->getelementsbytagname('img');
    
     
            $tandc_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
            $tandc_content .= $dom->savehtml($dom->documentElement);
        }
        // dd($tandc_content);
        
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $destinationPaths = ('admin/blog/uploads/') ;
            $file->move('admin/blog/uploads/',$filename);
        }else{
            // return $request;
            // $highlights->image = '';
        }
        $blogs = new NewBlog();
            $blogs->path = $destinationPaths;
            $blogs->image = $filename;
            $blogs->article_title = $request->input('articletitle');
            $blogs->article_slug = $request->input('articleslug');
            $blogs->seo_title = $request->input('seotitle');
            $blogs->articel_category = $request->input('articelcategory');
            $blogs->approve = "false";

            $blogs->article_content = $tandc_content;
            $blogs->imagealt_tag = $request->input('imagealttag');
            // $blogs->article_content = $request->input('articlecontent');
            $blogs->shortde_scription = $request->input('shortdescription');
            $blogs->seo_description = $request->input('seodescription');
            $blogs->tags = $tagidexp;
            $blogs->seo_keyword = $request->input('seokeyword');
            $blogs->article = $request->input('article');
            $blogs->updated_by = Auth::user()->name;
            $blogs->save();
            Toastr::success('Successfully created', 'Blog');
            return back();
            // ->with('success','You have successfully upload image.')
        //     ->with('blog',$extension);
    }
}
