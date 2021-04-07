<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AboutUs;

class Aboutuscontroller extends Controller
{
    public function index()
    {
        // echo "hi";
        $aboutus = AboutUs::first();
        return view('website.about',compact('aboutus'));
        
    }
}
