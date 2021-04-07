<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\testimonial;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;

class testimonialcontroller extends Controller
{
    public function index(){
        $test = DB::table('testimonials')->get();
        return view('admin.Testimonials',compact('test'));
    }
    public function store(Request $request){
        return view('Admin/add-testimonial');
    }
    public function control(Request $request,$id){
        // return view('Admin/add-testimonial');
        $data = DB::table('testimonials')->where('id',$id)->first()->approve;
        $true=('true');
        $false=('false');
        if($data == $false){
            $tt = $true;
        }elseif($data == $true){
            $tt = $false;
        }
        $testimon = testimonial::find($id);
        $testimon->approve = $tt;
        $testimon->save();
        Toastr::success('Successfully Updated', 'Blog Comments');
        return back();
        return response()->json('hi');
    }
    public function edit(Request $request , $id){
        $test = DB::table('testimonials')->where('id',$id)->get();
        return view('admin.edit-Testimonials',compact('test'));
        Toastr::success('Successfully Add Blog Category', 'Blog Category');
        // return view('Admin/testimonials',compact('test'));
        return redirect()->back();
    }
    public function update(Request $request , $id){
        if (
            $request->hasFile('cover_image')){
            $path1 = Storage::disk('public')->put('tandc_event_cover', $request->file('cover_image'));
            }
    
            $product_content = $request->description;
    
            if ($product_content) {
    
                $dom = new \domdocument();
                $dom->encoding = 'utf-8';
                libxml_use_internal_errors(true);
                $dom->loadHtml(utf8_decode($product_content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                libxml_clear_errors();
                $images = $dom->getelementsbytagname('img');
                $product_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
                $product_content .= $dom->savehtml($dom->documentElement);
            }
            $product = testimonial::find($id);
            $product->name = $request->input('name');
            $product->comment = $product_content;
            $product->approve = ("false");
            $product->created_by = Auth::user()->name;
            $product->save();
            // Toastr::success('Successfully Add Testimonial', 'Testimonial');
            $test = DB::table('testimonials')->get();
            return view('admin.Testimonials',compact('test'));
    }


    public function save(Request $request){
    if (
        $request->hasFile('cover_image')){
        $path1 = Storage::disk('public')->put('tandc_event_cover', $request->file('cover_image'));
        }

        $test_content = $request->description;

        if ($test_content) {

            $dom = new \domdocument();
            $dom->encoding = 'utf-8';
            libxml_use_internal_errors(true);
            $dom->loadHtml(utf8_decode($test_content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            libxml_clear_errors();
            $images = $dom->getelementsbytagname('img');
            $test_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
            $test_content .= $dom->savehtml($dom->documentElement);
        }
        $test = new testimonial();
        $test->name = $request->input('name');
        $test->comment = $test_content;
        $test->approve = ("false");
        $test->created_by = Auth::user()->name;
        $test->save();
        Toastr::success('Successfully Add Blog Category', 'Blog Category');
        return redirect()->back();
    }
}
