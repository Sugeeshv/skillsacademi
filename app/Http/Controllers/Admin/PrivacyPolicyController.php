<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use Toastr;
use Auth;


class PrivacyPolicyController extends Controller
{
    public function index(){
        $privacy = PrivacyPolicy::first();
        return view('admin.privacypolicy',compact('privacy'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'description' => 'required'
        ]);
    //  dd($request);
    //  dd(Auth::user());
        $this->validate($request,[
            'description' => 'required'
        ]);
        
    
     if ($request->hasFile('cover_image')){
         $path1 = Storage::disk('public')->put('privacy_event_cover', $request->file('cover_image'));
         }
    
         $privacy_content = $request->description;
     
         if ($privacy_content) {
    
         $dom = new \domdocument();
         $dom->encoding = 'utf-8';
         libxml_use_internal_errors(true);
         $dom->loadHtml(utf8_decode($privacy_content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
         libxml_clear_errors();
         $images = $dom->getelementsbytagname('img');
    
    
         $privacy_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
         $privacy_content .= $dom->savehtml($dom->documentElement);
     }
    
    
    $privacy = PrivacyPolicy::first();
     $privacy->description = $privacy_content;
     $privacy->updated_by = Auth::user()->name;
     $privacy->save();
     Toastr::success('Successfully Updated', 'Privacy Policy');
     return redirect()->back();
     
    
    }
}
