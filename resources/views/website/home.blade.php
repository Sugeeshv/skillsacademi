@extends('layouts.website-layout')
@section('content')
@section('title', 'Home')
 <!-- banner -->
<body>
 @include('layouts.website-header')
 <section>
  <div class="banner rellax" data-rellax-speed="5">
   <img class="w-100 rellax" src="./website/images/banner.jpg" alt="">
   <div class="container">
    <div class="rellax content" data-rellax-speed="2">
     <h1>Convenient Easy <br>
      Way of Learning <br>
      <span>
       New Skills!
      </span>
     </h1>
     <h2>Learn from our online platform by following
      our proven ways to achieve the Best Skills
      for your present and future career.</h2>
     <form method="post" action="    ">
      <div class="form-row">
       <div class="col-6 col-md-6">
        <input type="text" class="form-control" placeholder="Search Courses Here">
       </div>
       <div class="col-3 col-md-3">
        <button class="btn btn-animation primary-button">Search</button>
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
 </section>
 
 @php
 $count = count($responseData->responseData);
 $data = $responseData->responseData;
@endphp

 <!--  Popular Courses -->
 @if ($count==null)
     data not found
      @else
 <section>
  <div class="Popular mb-4">
   <div class="container">
    <div class="col-md-12">
     <div class="heading">
      <h3> Popular Courses</h3>
     </div>
    </div>
    <div class="row regular">
      @foreach ($data as $item)
          
     <div class="col-md-3">
      <div class="courses">
       <img src="{{$item->imageUrl}}" class="w-100" alt="">
       <div class="content">
        <div class="courses-heading">
         <h3>£{{$item->coursePrice}}</h3>
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
 @endif
 <!--  Make a Difference -->
 <section>
  <div class="make-a-difference">
   <div class="container">

    <div class="heading">
     <h3>CPD-accredited training for healthcare professionals </h3> 
    </div>
    <div class="row difference-wrapper ball">
     <div class="col-md-12 col-sm-12 col-lg-4 col-12">
      <div class="difference-card">
       <div class="difference-header">
        <img src="./website/images/Accredited.svg" alt="">
        <h4>Stay compliant and knowledgeable  <br>
         for social care</h4>
       </div>
       <div class="difference-body">
        <p><b>W</b>hether you are a Nurse, Carer, Support Worker or an allied healthcare professional, stay up to date with your mandatory, optional, and specialist training anywhere, anytime on any device. </p>
        <!-- <a href="#">View More</a> -->
       </div>
      </div>
     </div>
     <div class="col-12 col-sm-12 col-lg-4 col-12">
      <div class="difference-card">
       <div class="difference-header">
        <img src="./website/images/courses.svg" alt="">
        <h4>Self-paced online learning  </h4>
       </div>
       <div class="difference-body">
        <p><b>G</b>ain instant access to your course(s) upon purchase and learn at your convenience. Courses are separated into chapters for easy navigation with progress automatically saved. </p>
        <!-- <a href="#">View More</a> -->
       </div>
      </div>
     </div>
     <div class="col-12 col-sm-12 col-lg-4 col-12">
      <div class="difference-card">
       <div class="difference-header">
        <img src="./website/images/Certificate.svg" alt="">
        <h4>certification  </h4>
       </div>
       <div class="difference-body">
        <p><b>O</b>n successful completion of end-of-course assessments, download and save quality-assured training certificates.</p>
        <!-- <a href="#">View More</a> -->
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 <!-- Accreditations -->
 <section>
  <div class="Accreditations">
   <div class="container">
    <div class="heading">
     <h3> Accreditations</h3>
    </div>
    <div class="d-flex">
     <div class="Accreditations-wrapper">
      {{-- <div class=" accreditations-card">
       <img src="./website/images/skill-for-health.png" alt="">
      </div> --}}
      <div class=" accreditations-card">
       <img src="./website/images/cpd.png" alt="">
      </div>
      {{-- <div class=" accreditations-card">
       <img src="./website/images/bac.png" alt="">
      </div> --}}
     </div>
    </div>

   </div>
  </div>
 </section>
 <!-- Testimonials -->
    
 {{-- <section>
  <div class="testimonials">
   <div class="container">

    <div class="heading">
     <h3> Testimonials</h3> <br>
     <p>What Our Clients Says.</p>
    </div>
 @foreach ($test as $item)
    <div class="testimonials-wrapper test">
     
     <div class="testimonials-card">
      <h4> {{$item->name}}</h4>
      <p> {!!$item->comment!!}</p>
     </div>
    </div>
 @endforeach
   </div>
  </div>
 </section> --}}
 <!-- blog -->
@foreach ($blog as $items)
  @if($items->approve == 'true')
  <section>
    <div class="blog">
    <div class="container">
      <div class="heading">
      <h3> Latest Insights</h3>
      </div>
      <div class="row blog-wrapper blog-slider">
        @foreach ($blog as $item)
          @if($item->approve == 'true')
        <div class="blog-card">
          <div class="img">
              <img src="{{$item->path}}{{$item->image}}" class="w-100" alt="">
          </div>
          <div class="blog-content">
          <h4>{{$item->article_title}}</h4>
          <label> {{$item->updated_by}} <span>{{$item->updated_at}}</span></label>
          <p><span>L</span>{!! $item->article_content !!}</p>
          <a href="{{url('single-blogs/'.$item->article_slug.'/'.$item->id)}}">Read More</a>
          </div>
        </div>            
        @else
            
        @endif 
      @endforeach
      </div>
    </div>
    <!-- full width banner -->
    <div class="f-banner">
      <div class="container">
      <div class="f-banner-card">
        <h4>Register with Skillsacademi in a few Steps</h4>
        <button class="btn btn-animation primary-button">Get Started</button>
      </div>
      </div>
    </div>
    </div>
  </section>
 @else
     
 @endif 
@endforeach

@endsection()