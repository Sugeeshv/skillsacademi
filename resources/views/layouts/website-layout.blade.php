<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 {{-- <title>{{ $title }}</title> --}}

 <link rel="apple-touch-icon" href="{{ asset('./website/favicon/apple-touch-icon.png') }}" sizes="180x180">
 <link rel="icon" href="{{ asset('./website/favicon/32x32.png') }}" sizes="32x32" type="image/png">
 <link rel="icon" href="{{ asset('./website/favicon/16x16.png') }}" sizes="16x16" type="image/png">
 <!-- Bootstrap -->
 <link rel="stylesheet" href="{{ asset('./website/css/bootstrap.css') }}">
 {{-- <link rel="stylesheet" href="{{ asset('./website/css/style.css') }}"> --}}
 <link rel="stylesheet" href="{{ asset('./website/css/main.css') }}">
 <link rel="stylesheet" href="{{ asset('./website/css/responsive.css') }}">
 <link rel="stylesheet" href="{{ asset('./website/css/style.css') }}">
 <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
 <title>Skillsacademi - @yield('title')</title>
 @stack('style')
</head>

 @yield('content')
 
 <footer>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-sm-12 col-12">
              <div class="img">
                  {{-- <img src="./website/images/logo.png" alt=""> --}}
              </div>
              <div class="d-flex">
                  <ul class="menus">
                      <li>
                        <a href="{{url('/')}}">
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/blog')}}">
                            <p>Blog</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/about')}}">
                            <p>About</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/courses')}}"> 
                            <p>Courses</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/contact')}}">
                            <p>Contact</p>
                        </a>
                    </li>
                  </ul>
              </div>
          </div>
          <div class="col-xl-4 col-md-12 col-sm-12 col-12">
              <p>Get Latest Courses Notification From Us.</p>
              <form method="post" action="{{ url('subscription-save') }}" >
                @csrf
                  <div class="form-row">
                      <div class="col-md-9  col-8">
                          <input type="text" name="email" class="form-control" placeholder="Example@example.com">
                      </div>
                      <div class="col-md-3 col-3">
                          <button class="btn btn-animation transperant-button">Subscribe</button>
                      </div>
                  </div>
              </form>
              <div class="d-flex">
                  <ul class='socialicons mr-auto'>
                      <li>
                          <a href="https://www.facebook.com/joscocare" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      </li>
                      <li>
                          <a href="{{url('')}}"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                      </li>
                      <li>
                          <a href="{{url('')}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      </li>
                      <li>
                          <a href="{{url('')}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                      </li>
                      <li>
                          <a href="{{url('')}}"><i class="fa fa-phone" aria-hidden="true"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-md-12">

              <hr>
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-12 col-xl-6 col-12 footer-content">
              <ul class="faq">
                  <li>
                      <a href="{{url('/faq')}}">
                          <p>FAQ</p>
                      </a>
                  </li>
                  <li>
                      <p>|</p>
                  </li>
                  <li>
                      <a href="{{url('/terms&conditions')}}">
                          <p>Terms and Conditions</p>
                      </a>
                  </li>
                  <li>
                      <p>|</p>
                  </li>
                  <li>
                      <a href="{{url('/privacypolicy')}}">
                          <p>Privacy Policy</p>
                      </a>
                  </li>
                  <li>
                      <p>|</p>
                  </li>
                  <li>
                      <a href="{{url('/cookiepolicy')}}">
                          <p>Cookie Policy</p>
                      </a>
                  </li>
              </ul>
          </div>
          <div class="col-xl-6 col-xl-6 col-12">
              <div class="footer-content">
                  <div class="ml-auto">
                      <p>Copyright© 2021 Skillsacademi Limited </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>
 <script src="{{ asset('./website/js/jquery.js') }}"></script>
 <script src="{{ asset('./website/js/popper.js') }}"></script>
 <script src="{{ asset('./website/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('./website/js/rellax.js') }}"></script>
 <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <script src="{{ asset('./website/js/new.js') }}"></script>
 <script src="{{ asset('./website/js/relax.js') }}"></script>
 <script src="{{ asset('js/toastr.min.js') }}"></script>
 <script type="text/javascript">
     var rellax = new Rellax('.rellax');
 </script>
{{-- <script src="{{ asset('admin/dist/summernote-custom.js') }}"></script> --}}
{!! Toastr::message() !!}
</body>

</html>