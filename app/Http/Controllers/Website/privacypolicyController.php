<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use Toastr;
use Auth;

class privacypolicyController extends Controller
{
   public function index(){
    $privacy = PrivacyPolicy::first();
    return view('website.privacy-policy',compact('privacy'));
   }
}
