<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CookiePloicy;
use Toastr;
use Auth;

class CookiePloicyController extends Controller
{
    public function index(){
        // return view('Admin/cookiepolicy');
        
        $Cookie = CookiePloicy::first();
        return view('admin.cookiepolicy',compact('Cookie'));
    }
    public function store(Request $request){
       
   
    $this->validate($request,[
        'description' => 'required'
    ]);

 // dd(Auth::user());
 //  dd($request);

 if ($request->hasFile('cover_image')){
     $path1 = Storage::disk('public')->put('news_event_cover', $request->file('cover_image'));
     }

     $cookie_content = $request->description;
 
     if ($cookie_content) {

     $dom = new \domdocument();
     $dom->encoding = 'utf-8';
     libxml_use_internal_errors(true);
     $dom->loadHtml(utf8_decode($cookie_content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
     libxml_clear_errors();
     $images = $dom->getelementsbytagname('img');


     $cookie_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
     $cookie_content .= $dom->savehtml($dom->documentElement);
 }


 $cookie =  CookiePloicy::first();
 $cookie->content = $cookie_content;
 $cookie->updated_by = Auth::user()->name;
 $cookie->save();
 Toastr::success('Successfully Updated', 'Cookie Policy');
 return redirect()->back();
    }
}
