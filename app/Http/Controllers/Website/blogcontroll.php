<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewBlog;
use App\Models\blogcomments;
use App\Models\TagManagement;
use Illuminate\Support\Facades\DB;
use Toastr; 
use Auth;

class blogcontroll extends Controller
{
    public function index(Request $request){

        $blog =  DB::table('new_blogs')->get();
        return view('website.blog',compact('blog'));
        // print_r($blog);
    }
    public function blogindex(Request $request, $article_slug,$id){

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
        $blogsearch =  DB::table('new_blogs')->where('id',$id)->get();
        $category =  DB::table('blog_categories')->get();        
        $posts =  DB::table('new_blogs')->latest()->take(3)->get();     
        $blogcomments =  DB::table('blogcomments')->latest()->get();       
        return view('website.single-blog',compact('blogsearch','category','posts','blogcomments','tagnames'));
    }
    public function search(Request $request){
        // Get the search value from the request
    $search = $request->input('search');
        $blog = NewBlog::query()
        ->where('article_title', 'LIKE', "%{$search}%")
        ->orWhere('articel_category', 'LIKE', "%{$search}%")
        ->orWhere('articel_category', 'LIKE', "%{$search}%")
        ->orWhere('tags', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('website.blog-search', compact('blog'));
        // dd($posts);
    }
}
