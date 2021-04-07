<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\ProjectController;

class ProjectController extends Controller
{
    public function apiWithKey()
    {
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
            // dd($responseData);
        return view('website.courses', compact('responseData'));
    }
    public function apiWithKeyproduct($id)
    {
        // dd($id);
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
        
            $data = $responseData->responseData;
            $dat=count($responseData->responseData);
            for($i = 0;$i < $dat ;$i++)
            {
                if($data[$i]->courseId == $id){
                    $getdata=$data[$i];
                    $sectioncontent=$data[$i]->sections;
                    $sectioncount=count($data[$i]->sections);
                    // dd($sectioncontent);
                    for($i = 0;$i < $sectioncount ;$i++){

                            $section[$i]=$sectioncontent[$i]->sectionTitle;
                            // print_r($section);
                    }
                }
                else
                {
                    
                }
            }
        return view('website.courses-innerpage',compact('getdata','section'));
    }
    // public function search(){
    //     $client = new \GuzzleHttp\Client(); 
    //     $url = "http://joscocare-academy-sandbox.azurewebsites.net/api/academy/v1.0/getallcourses";

    //     $params = [
    //         //If you have any Params Pass here
    //     ];

    //     $headers = [
    //         'StaticToken' => 'rDLrTyaLJXAMor2anRBBkzATHVSCoMSW140I/tiXc1kPJmHeRkFI9iXRagVKMI6HxXt5SLuanN0k62Gkcn05Xg7XSv0BhtQAAhMwx46jgOwB7lao/06s+cgQAKv2a5czjJzwPv0aAseoFnBqphSVTZK/62r8TfO0W1Q4UT0/EfW9U9VoHn9ytw=='
    //     ];

    //     $response = $client->request('GET', $url, [
    //         // 'json' => $params,
    //         'headers' => $headers,
    //         'verify'  => false,
    //     ]);

    //     $responseData = json_decode($response->getBody());

    // }
    public function viewbundles(){
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
            // dd($responseData);
            
        return view('website.bundles',compact('responseData'));
    }
}
