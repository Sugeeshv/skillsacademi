@extends('layouts.website-layout')
@section('content')
@section('title', 'About Us')
 <!-- banner -->
<body class='about'>
 @include('layouts.website-header')
 
<section class="sub trasperant-header">
  <h6>About us</h6>
  <div class="container hed">
   <div class="col-md-12">
   </div>
   <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
     <img class="w-100 mt-5 mb-5 sub-image" src="./website/images/about.png" alt="">
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
     <div class="sub-content">
            {!! $aboutus->description !!}
       
     </div>
    </div>
    <div class="col-md-12">
     <a href="#discover" class="sub-link"><i class="fa fa-angle-double-down" aria-hidden="true"></i> Discover More</a>
    </div>
   </div>
  </div>

 </section>
 <!-- discover -->
 <section id="discover">
  <div class="discover">
   <div class="container">
    <div class="discover-wrapper">
     <div class="discover-slider">
      <div class="discover-card">
       <p>DISCOVER MISSION</p>
       <h4>Why our platform in better</h4>
       <p>A place where you can achieve</p>
       <p>Our online courses are designed for health and social care professionals to be compliant with the UK statutory requirements. We are committed to keeping up to date with changes in relevant UK legislation, national directives, and conditions on a mandatory training program to ensure that it reflects changing legal, risk, and service needs. </p>
       <p>Select from a number of online healthcare courses and refresh your skills in various subjects to improve personal productivity and career opportunities. </p>
       <p>Simple, straightforward and super easy platform with a step-by-step learning process. </p>
       <p>Learn from anywhere – no travel, classroom lecture or boring trainers. </p>
       <p>Low carbon footprint through e-learning</p>
       <p>Online chat support </p>
      </div>
      <div class="discover-card">
       <p>DISCOVER MISSION</p>
       <h4>Meet all your regulatory training requirements with our e-learning solution.</h4>
       <p>Purchase training packages for bespoke quotations on behalf of your staff and ensure they are fully compliant to safeguard those they care for.</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 <!-- story -->
 <section>
  
  <div class="story">
    <div class="container">
     <div class="row">
      <div class="col-xl-2 col-lg-12">
       <div class="heading">
        <h3>Our Values</h3>
       </div>
      </div>
      <div class="col-xl-10 col-lg-12 col-sm-12">
       <div class="story-card">
        <h4>
         Uncompromising quality 
        </h4>
        <p>
         Our academy offers dozens of online healthcare training courses, developed specifically for health and social care staff to fulfil their legislative duties, minimise litigation and meet regulatory requirements. Develop your skills through our content, written by experienced subject matter experts and trainers at affordable prices.
        </p>
        <br>
        <h4>
         A success orientated learning environment 
        </h4>
        <p>
         We began Skills Academy with a commitment to build a better, simpler, and easier tool for busy healthcare professionals. Access course material 24/7 for 365 days, complete trainings stress free with our unlimited attempts feature and depend on us to learn easy. Register to achieve success at your own pace, anywhere, on any device.
        </p>
        <br>
        <h4>
         Enable generations of Nurses and Carers to deliver world class care. 
        </h4>
        <p>
         Education, learning, and training are vital in delivering safe and effective care. We are committed to cultivating an innovative platform that equips individuals with the right knowledge and skills to carry out duties in the safest ways possible. <br>
         Our trainings enable opportunities for development…? <br>
         Safe practice is a shared responsibility?
         
        </p>
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
      <div class=" accreditations-card">
       <img src="./website/images/skill-for-health.png" alt="">
      </div>
      <div class=" accreditations-card">
       <img src="./website/images/cpd.png" alt="">
      </div>
      <div class=" accreditations-card">
       <img src="./website/images/bac.png" alt="">
      </div>
     </div>
    </div>

   </div>
  </div>
 </section>

@endsection()