@extends('layouts.website-layout')
@section('content')
@section('title', 'Cookiepolicy')
 <!-- banner -->
<body class=''>
 @include('layouts.website-header')
 <section class="faq">
  <div class="container mt-5 mb-5">
      <div class="row">
          <div class="col-md-12">
              <div class="h2-heading">Cookie Policy </div>
          </div>
      </div>
      <div class="row legal-center" style="max-height: 100%;min-height: 30vh">
          <div class="col-md-12 mt-4">
              <p>
                {!! $cookie->content !!}
              </p>
          </div>
      </div>
  </div>
</section>

@endsection()