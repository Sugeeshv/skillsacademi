@extends('layouts.website-layout')
@section('content')
@section('title', 'Courses')
 <!-- banner -->
<body >
 @include('layouts.website-header')
<section class="sub-pages">
    <div class="Popular mb-4">
     <div class="container">
      <!-- <div class="col-md-12">
       <div class="main-heading">
        <h3>Courses</h3>
       </div>
      </div> -->
      <div class="col-md-12">
       <form class="mt-3">
        <div class="row filter-wrapper">
          <div class="col-md-12">
            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <div class="d-flex">
                    <a class="btn btn-link ml-auto collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="fa fa-filter" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                  
                    <div class="row">
                      <div class="col-12 col-lg-2 ml-auto mt-1">
                       <select name="" onchange="myFunction()" class="form-control input-green" id="" placeholder="Filter">
                        <option value="">Filter by price</option>
                        <option value="">Low To High</option>
                        <option value="">Hight To Low</option>
                       </select>
                      </div>
                      <div class="col-12 col-lg-2 mt-1">
                       <input type="Search" id="myFilter" onkeyup="myFunction()" class="form-control input-green" placeholder="Search">
                      </div>
                      <div class="col-12 col-lg-1 mt-1">
                          <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                       <input type="submit" id="myFilter" class="btn primary-button" placeholder="Search" style="height: 40px;padding: 10px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </form>
      </div>

      
<div class="container-fluid mb-5" style="margin-bottom: 150px !important">
    <div class="row mr-4">
        @php
            $count = count($responseData->responseData);
            $data = $responseData->responseData;
        @endphp

    </div>
</div>
      
      
      <div class="row " id="myProducts">
@foreach ($data as $item)
       <div class="col-xl-3 col-md-6 col-sm-6 card">
        <div class="courses">
         <img src="{{$item->imageUrl}}" class="w-100" alt="">
         <div class="content">
          <div class="courses-heading">
           <h3>{{$item->coursePrice}}</h3>
           @if ($item->isJoscocareMandatory == true)
           
           <div class="nametag">Joscocare</div>
           @endif
          </div>
          <div class="courses-body">
           <p class="card-title"><b>{{$item->courseTitle}}</b></p>
          </div>
          <a href="{{ url('courses',$item->courseId) }}"> view</a>
         </div>
        </div>
       </div>
       @endforeach
      </div>
     </div>
    </div>
   </section>
   @endsection()