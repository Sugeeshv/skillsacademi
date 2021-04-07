<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NewBlog;

class homeController extends Controller
{
    
    public function index(Request $request){

        $client = new \GuzzleHttp\Client(); 
        $url = "http://joscocare-academy-sandbox.azurewebsites.net/api/academy/v1.0/getallcourses";

        $params = [
            //If you have any Params Pass here
        ];

        $headers = [
            'StaticToken' => 'rDLrTyaLJXAMor2anRBBkzATHVSCoMSW140I/tiXc1kPJmHeRkFI9iXRagVKMI6HxXt5SLuanN0k62Gkcn05Xg7XSv0BhtQAAhMwx46jgOwB7lao/06s+cgQAKv2a5czjJzwPv0aAseoFnBqphSVTZK/62r8TfO0W1Q4UT0/EfW9U9VoHn9ytw=='
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $responseData = json_decode($response->getBody());
        
        
        $blog = DB::table('new_blogs')->get();
        $test = DB::table('testimonials')->get();
        return view('website.home',compact('test','responseData','blog'));
    }
}
