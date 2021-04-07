@extends('layouts.website-layout')

@section('content')
@section('title', 'Blog')
 <!-- banner -->
<body class='about'>
 @include('layouts.website-header')
 <section>
    <div class="blog pt-5">
     <div class="container">
          @foreach ($blog as $item)
            @if($item->approve == 'true')
            <div class="row blog-wrapper ">
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
            </div>                
            @else
            No Blogs Found !
            @endif 
          @endforeach
     </div>
    </div>
   </section>
@endsection()