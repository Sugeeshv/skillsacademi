<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;

class subscriptionController extends Controller
{
    public function index(){
        $subscription = DB::table('subscriptions')->get();
        return view('admin.subscription',['subscription'=>$subscription]);
    }
    public function delete($id){
        // print_r($request->input());
        $data = DB::table('subscriptions')->where('id',$id)->delete();
        Toastr::success('Successfully Deleted', 'Subscriptions');
        return redirect()->back();
    }
}
