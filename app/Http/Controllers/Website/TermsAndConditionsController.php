<?php

namespace App\Http\Controllers\Website;

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
        return view('website.Terms-and-Conditions',compact('terms'));
    }
}
