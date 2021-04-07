@push('style')
@foreach ($blogsearch as $item)
<title>{{$item->article_title}}</title>
<meta name="article title" content="{{$item->article_title}}">
<meta name="article slug" content="{{$item->article_slug}}">
<meta name="seo title" content="{{$item->seo_title}}">
<meta name="article category" content="{{$item->articel_category}}">
<meta name="article content" content="{{$item->article_content}}">
<meta name="tags" content="{{$tagnames}}">

<meta name="seo keyword" content="{{$item->seo_keyword}}">
<meta name="seo description" content="{{$item->seo_description}}">
<meta name="article content" content="{{$item->article_content}}">
<meta name="seo description" content="{{$item->seo_description}}">
@endforeach
{{-- @foreach ($tag as $item)
    {{$item->tag_name}}
@endforeach --}}
@endpush
@extends('layouts.website-layout')
@section('content')
 <!-- banner -->
<body class='about'>
 @include('layouts.website-header')
 <section>
    <div class="pt-5 single-blog mrt-100 mb-5">
     <div class="container">
      <!-- <div class="heading">
       <h3> Latest Insights</h3>
      </div> -->
      <div class="row">
          @foreach ($blogsearch as $item)
              
       <div class="col-xl-9 col-md-12">
           <h3 class="mb-4">{{$item->article_title}}</h3>
           <div class="single-blog-image">
            <img src="{{ asset('') }}{{$item->path}}{{$item->image}}" class="w-100" alt="">
           </div>
           <ul class="signle-blog-editor-list">
              <li>
                 <img src="{{ asset('/website/images/editor.svg') }}" alt=""> 
                     <p>{{$item->updated_at}}</p>
              </li>
              <li>
                 <img src="{{ asset('/website/images/date.svg') }}" alt=""> 
                     <p>{{$item->updated_by}}</p>
              </li>
              <li>
                 <img src="/assets/images/share.svg" alt=""> 
                     
                 <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-phone" aria-hidden="true"></i></a>
           </ul>
           <br>
           <p>{!! $item->article_content !!}</p>
           <br>
           <div class="single-blog-comment">
              <h3>Recent Comments</h3>
              <br>
              <div class="bord mt-4 pb-1 bt-0 "></div>
              @foreach ($blogcomments as $cm)
                  @if($cm->val==('true'))
              <div class="single-blog-comment-profile-wrapper">
                  <div class="single-blog-comment-profile mt-5">
                      <div class="single-blog-comment-profile-img">
                          <img src="{{ asset('website/images/blog-user.png') }}" alt="">
                      </div>
                      <div class="single-blog-comment-profile-heading">
                          <h5>Recent Comments</h5>
                          <ul>
                              <li>
                                  <img src="{{ asset('website/images/editor.svg') }}" alt="">
                                  <p>{{$cm->name}}</p>
                              </li>
                              <li>
                                  <img src="{{ asset('website/images/date.svg') }}" alt="">
                                  <p>{{$cm->created_at}}</p>
                              </li>
                          </ul>
                      </div>
  
                  </div>
                  <br>
                      <p>{{$cm->message}}</p>
                      
              </div>
                  
              @else
                  
              @endif
              @endforeach
          </div>
  
       </div>
       @endforeach
       @include('layouts.website-right-side-blog-menu')
       
      </div>
     </div>
    </div>
   </section>
 
@endsection()