<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Contactus;
use Toastr;

class ContactController extends Controller
{
    public function index(){
        // return view('Admin/contactus');
        $cont = DB::table('contactuses')->get();
        return view('admin.contactus',['cont'=>$cont]);
    }
    public function delete($id){
        // print_r($request->input());
        $data = DB::table('contactuses')->where('id',$id)->delete();
        Toastr::success('Successfully Deleted', 'contact Us');
        return redirect()->back();
    }
}
