@extends('layouts.website-layout')
@section('content')
@section('title', 'Blogs')
 <!-- banner -->
<body class='about'>
 @include('layouts.website-header')
 <section>
    <section class="bckground-gray pt-5">
     <div class="container">
         <div class="row">
             <div class="col-md-12 ">
                <form action="{{url('blogs-search')}}" method="get">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                          <input type="text" name="search" class="form-control" id="exampleInputEmail1" placeholder="Search" aria-describedby="emailHelp">
                        </div>
                    </div>
                  </form>
             </div>
         </div>
     </div>
 </section>
    <div class="blog pt-5">
     <div class="container mt-5">
      <!-- <div class="heading">
       <h3> Latest Insights</h3>
      </div> -->
      <div class="row blog-wrapper ">
          @foreach ($blog as $item)
       <div class="blog-card">
        <div class="img">
            <img src="{{ asset('') }}{{$item->path}}{{$item->image}}" class="w-100" alt="">
        </div>
        <div class="blog-content">
         <h4>{{$item->article_title}}</h4>
         <label> {{$item->updated_by}} <span>{{$item->updated_at}}</span></label>
         <p><span>L</span>{!! $item->article_content !!}</p>
         <a href="{{url('single-blogs/'.$item->article_slug)}}">Read More</a>
        </div>
       </div>              
          @endforeach

      </div>
     </div>
    </div>
   </section>
@endsection()