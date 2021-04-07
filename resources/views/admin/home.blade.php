@extends('layouts.app')

@section('content')
<body onload="myFunction()" style="margin:0;">
    <!-- <div id="loader" class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
      </div> -->
    <!-- <div style="display:none;" id="myDiv" class="animate-bottom"> -->
        <div>
            @include('layouts.admin-menu')
<section class="jsad-layout">
    @include('layouts.admin-header')
    <div class="jsad-body-layout">
        <div class="row">
            <div class="col-md-12">
                <div class="row display-flex">
                    <div class="col-lg-3 ">
                        <div class="jsad-body-layout-box">
                            <a href="#">
                                <ul class="jsad-dashboard-menu">
                                    <li>
                                        <span class="icon-Icon-metro-blogger icon yellow"></span>
                                        <h5>Blogs</h5>
                                    </li>
                                    <li class="l-yellow">
                                        <h3>{{$blogs}}</h3>
                                    </li>
                                </ul>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="jsad-body-layout-box">
                            <a href="#">
                                <ul class="jsad-dashboard-menu">
                                    <li>
                                        <span class="icon-Fill icon blue"></span>
                                        <h5>Blog <br>
                                            Comments</h5>
                                    </li>
                                    <li class="l-blue">
                                        <h3>{{$blogcomments}}</h3>
                                    </li>
                                </ul>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="jsad-body-layout-box">
                            <a href="#">
                                <ul class="jsad-dashboard-menu">
                                    <li>
                                        <span class="icon-Icon-awesome-user icon vilote"></span>
                                        <h5>Users</h5>
                                    </li>
                                    <li class="l-vilote">
                                        <h3>{{$users}}</h3>
                                    </li>
                                </ul>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="jsad-body-layout-box">
                            <a href="#">
                                <ul class="jsad-dashboard-menu">
                                    <li>
                                        <span class="icon-Icon-material-send icon green"></span>
                                        <h5>Subscriptions</h5>
                                    </li>
                                    <li class="l-green">
                                        <h3>{{$subscription}}</h3>
                                    </li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <h4>Administration</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="jsad-body-layout-box mt-5">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a>
                                        <ul class="jsad-dashboard-menu single border-right-after mt-3">
                                            <li>
                                                <span class="icon-Icon-metro-blogger icon orange mb-4"></span>
                                                <h5>Blog Management</h5>
                                            </li>
                                        </ul>
                                    </a>

                                </div>
                                <div class="col-md-12 col-lg-9">
                                    <ul>
                                        <li>
                                            
                                        <ul class="jsad-dashboard-menu single mt-4">
                                            @can('new-blog')
                                            <li>
                                                <a href="{{url('./new-blog')}}">
                                                    <span class="icon-cube-send icon orange"></span>
                                                <p>New Blog</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('blog-comments')
                                            <li>
                                                <a href="{{url('./blog-category-list')}}">
                                                    <span class="icon-Group-1017 icon orange"></span>
                                                <p>Blog Categories</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('blog-list')
                                            <li>
                                                <a href="{{url('./blog-list')}}">
                                                    <span class="icon-blog-list icon orange"></span>
                                                <p>Blog List</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('blog-comments')
                                            <li>
                                                <a href="{{url('./blog-comments')}}">
                                                    <span class="icon-Fill icon orange"></span>
                                                <p>Blog Comments</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('tag-management')
                                            <li>
                                                <a href="{{url('./tag-management')}}">
                                                    <span class="icon-Icon-awesome-tags icon orange"></span>
                                                <p>Tag Management</p>
                                                </a>
                                            </li>
                                            @endcan
                                        </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jsad-body-layout-box mt-5">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a>
                                        <ul class="jsad-dashboard-menu single border-right-after mt-3 ">
                                            <li>
                                                <span class="icon-web icon orange mb-4"></span>
                                                <h5>Website Management</h5>
                                            </li>
                                        </ul>
                                    </a>

                                </div>
                                <div class="col-md-12 col-lg-9">
                                    <ul>
                                        <li>
                                            
                                        <ul class="jsad-dashboard-menu single mt-4">
                                            @can('about-us')
                                            <li>
                                                <a href="{{url('./about')}}">
                                                    <span class="icon-Group-1594 icon orange"></span>
                                                <p>About us</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('contact-us')
                                            <li>
                                                <a href="{{url('./contact')}}">
                                                    <span class="icon-Icon-awesome-building icon orange"></span>
                                                <p>Contact us</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('subscriptions')
                                            <li>
                                                <a href="{{url('./subscription')}}">
                                                    <span class="icon-Icon-material-send icon orange"></span>
                                                <p>Subscriptions</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('testimonials')
                                            <li>
                                                <a href="{{url('./testimonial')}}">
                                                    <span class="icon-testimonial icon orange"></span>
                                                <p>Testimonials</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('terms-and-conditions')
                                            <li>
                                                <a href="#{{url('./terms-and-conditions')}}">
                                                    <span class="icon-Terms-and-conditions icon orange"></span>
                                                <p>Terms & Conditions</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('privacy-policy')
                                            <li>
                                                <a href="{{url('./privacy_policy')}}">
                                                    <span class="icon-privacy icon orange"></span>
                                                <p>Privacy Policy</p>
                                                </a>
                                            </li>
                                            @endcan
                                        </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="jsad-body-layout-box mt-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a>
                                        <ul class="jsad-dashboard-menu single border-right-after mt-3 ">
                                            <li>
                                                <span class="icon-Icon-awesome-user icon orange mb-4"></span>
                                                <h5>User Management</h5>
                                            </li>
                                        </ul>
                                    </a>

                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                            
                                        <ul class="jsad-dashboard-menu single mt-4">
                                            @can('user-management')
                                            <li>
                                                <a href="{{ route('users.index') }}">
                                                    
                                                <span class="icon-Icon-awesome-user icon orange"></span>
                                                <p>User Management</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('role-management')
                                            <li>
                                                <a href="{{ route('roles.index') }}">
                                                    <span class="icon-Role-Management icon orange bolder"></span>
                                                    <p>Role Management</p>
                                                </a>
                                            </li>
                                            @endcan
                                        </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- </div> -->
</body>
@endsection
