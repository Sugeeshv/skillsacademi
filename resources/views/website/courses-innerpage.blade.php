@extends('layouts.website-layout')
@section('content')

@section('title', $getdata->courseTitle)
 <!-- banner -->
<body >
 @include('layouts.website-header')
 <section>

    <div class="single-couse pdt-80 pdb-150">
     <div class="container">
      <div class="row single-course-wrapper pdt-40">
       <div class="col-md-8">
        <div class="row">
         <div class="col-xl-6 col-md-12">
          <div class="single-course-image">
           <img class="w-100" src="{{$getdata->imageUrl}}" alt="">
          </div>
         </div>
         <div class="col-xl-6 col-md-12">
          <div class="single-course-heading pdt-80">
           <h3>{{$getdata->courseTitle}}</h3>
           <ul class="ul">
            <li></li>
            <li>
             @if ($getdata->isJoscocareMandatory == true)
           
             <div class="nametag">Joscocare</div>
             @endif
             <h4>Price :£{{$getdata->coursePrice}}</h4>
            </li>
           </ul>
          </div>
         </div>
         <div class="col-md-12">
          <div class="single-course-content">
           <h3>Introduction</h3>
  
           {{-- <p>{{$getdata->courseIntroduction}} --}}
            {!! $getdata->courseIntroduction !!}
        </p>
  
          </div>
         </div>
        </div>
       </div>
       <div class="col-md-4">
        <ul class="single-courses-details">
         <li>
          <p><img src="{{ asset('./website/images/quiz.svg') }}" alt=""> Quizzes :</p>
          <p>Yes</p>
         </li>
         <li>
          <p><img src="{{ asset('./website/images/assessment.svg') }}" alt=""> Assessment :</p>
          <p>Yes</p>
         </li>
         <li>
          <p><img src="{{ asset('./website/images/certificate-1.svg') }}" alt=""> Certificate :</p>
          <p>Yes</p>
         </li>
        </ul>
        <div id="accordion" class="single-courses-chapter">
         <div class="card ">
          <div class="card-header" id="headingOne">
           <div class="mb-0 d-flex">
            <a href="#" class="btn btn-link w-100 " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
             aria-controls="collapseOne">
             Chapters
             <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </a>
           </div>
          </div>
  
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
           <div class="card-body">
            <ol>              
              @foreach ($section as $item)
             <li> {{$item}}</li>
              @endforeach
            </ol>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   @endsection()