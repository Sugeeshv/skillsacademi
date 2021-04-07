@extends('layouts.website-layout')
@section('content')
@section('title', 'Terms And Conditions')
 <!-- banner -->
<body class=''>
 @include('layouts.website-header')
<section class="" style="max-height: 100%;min-height: 50vh;margin-top:80px">
  <div class="container hed">
    {!! $terms->description !!}
 </section>

@endsection()