@extends('layouts.website-layout')
@section('content')
@section('title', 'Privacy Pocicy')
 <!-- banner -->
<body class=''>
 @include('layouts.website-header')
<section class="" style="max-height: 100%;min-height: 50vh;margin-top:80px">
  <div class="container hed">
    {!! $privacy->description !!}
 </section>

@endsection()