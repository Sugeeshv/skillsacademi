<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\Models\Subscriptions;
use Toastr;

class subscriptionController extends Controller
{
   
    public function store(Request $request)
    {
        $data = new subscriptions;
        $data->user_email= $request->email ;
        $data->save();
        Toastr::success('Subscription Sent Successfully', 'Subscription');
        return redirect()->back();
    }
}
