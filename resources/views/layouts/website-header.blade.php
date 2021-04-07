<nav class="navbar navbar-expand-lg navbar-light " id="myHeader">
    <div class="container">
     <a class="navbar-brand" href="#">
      <img class=" lg-hide" src="{{ asset('./website/images/sm-logo.svg') }}" alt="">
      <img class=" sm-hide" src="{{ asset('./website/images/logo.png') }}" alt="">
     </a>
     <div class="lg-hide ml-auto mr-2 small-menu">
      <button class="btn transperant cart"><img src="{{ asset('./website/images/shopping-cart.svg') }}" alt=""><span style="right: 0;top: 0;">1</span></button>
      <a href="#">Login</a>
  
     </div>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" aria-hidden="true"></i>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
        <a class="nav-link" href="{{url('./')}}">Home </a>
       </li>
       <li class="nav-item {{ (request()->is('courses')) ? 'active' : '' }}">
        <a class="nav-link" href="{{url('/courses')}}">Courses </a>
       </li>
       <li class="nav-item {{ (request()->is('aboutus')) ? 'active' : '' }}">
        <a class="nav-link" href="{{url('/aboutus')}}">About </a>
       </li>
       <li class="nav-item{{ (request()->is('blogs')) ? 'active' : '' }}">
        <a class="nav-link" href="{{url('/blogs')}}">Blogs </a>
       </li>
       <li class="nav-item {{ (request()->is('contactus')) ? 'active' : '' }}">
        <a class="nav-link" href="{{url('/contactus')}}">Contact </a>
       </li>
       <li class="sm-hide"><a href="https://apps.skillsacademi.com/student/login " class="btn btn-animation primary-button">Login/Register</a></li>
      </ul>
     </div>
    </div>
   </nav>