<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CookiePloicy;
use Toastr;
use Auth;


class CookiePolicyController extends Controller
{
    public function index(){
        $cookie = CookiePloicy::first();
        return view('website.cookiepolicy',compact('cookie'));
    }
}
