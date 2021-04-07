<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TermsAndConditions;
use Toastr;
use Auth;

class TermsAndConditionsController extends Controller
{
   
    public function index()
    {
        $terms = TermsAndConditions::first();
        return view('admin.terms-and-conditions',compact('terms'));
    }
//  save
public function store(Request $request)
{
    $this->validate($request,[
        'description' => 'required'
    ]);
//  dd($request);
//  dd(Auth::user());
    $this->validate($request,[
        'description' => 'required'
    ]);
    

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


$tandc = TermsAndConditions::first();
 $tandc->description = $tandc_content;
 $tandc->updated_by = Auth::user()->name;
 $tandc->save();
 Toastr::success('Successfully Updated', 'Terms & Conditions');
 return redirect()->back();
 

}
}
