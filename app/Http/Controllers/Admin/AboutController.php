<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use Toastr;
use Auth;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        return view('admin.about-us',compact('about'));
    }
//  save
public function store(Request $request)
   {
       $this->validate($request,[
           'description' => 'required'
       ]);

    // dd(Auth::user());
    //  dd($request);
 
    if ($request->hasFile('cover_image')){
        $path1 = Storage::disk('public')->put('news_event_cover', $request->file('cover_image'));
        }

        $about_content = $request->description;
    
        if ($about_content) {
 
        $dom = new \domdocument();
        $dom->encoding = 'utf-8';
        libxml_use_internal_errors(true);
        $dom->loadHtml(utf8_decode($about_content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        $images = $dom->getelementsbytagname('img');

 
        $about_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
        $about_content .= $dom->savehtml($dom->documentElement);
    }


	$about =  AboutUs::first();
	$about->description = $about_content;
	$about->updated_by = Auth::user()->name;
	$about->save();
    Toastr::success('Successfully Updated', 'About us  ');
    return redirect()->back();
  
   }
   
//    public function api(){
//     return Http::get('http://joscocare-academy-sandbox.azurewebsites.net/api/academy/v1.0/getallcourses')->body();
//     // dd('hi');
// }
}
