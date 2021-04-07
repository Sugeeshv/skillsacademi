<?php

namespace App\Http\Controllers\Website;
    

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;
use Toastr;

class ContactUsController extends Controller
{
    public function index(){
        return view('website.contactus');     
    }
    
    public function store(Request $request)
    {
        // dd($data=date('Y-m-d H:i:s'));
        
        $data = new contactus;
        $data->name= $request->name;
        $data->email= $request->email;
        $data->phonenumber= $request->phonenumber;
        $data->designation= $request->designation;
        $data->message= $request->message;
        $data->updated_at=date('Y-m-d H:i:s');
        $data->created_at=date('Y-m-d H:i:s');
        $data->save();
        Toastr::success('Subscription Sent Successfully', 'Subscription');
        return redirect()->back();
    }
}
