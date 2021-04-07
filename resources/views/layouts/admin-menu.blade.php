
            <section class="jsad-menu">
                <div class="js-admenu-layout">
                    <ul class="js-admenu-top-menu">
                        <li class="js-admenu-menu-control">
                            <a href="#" id="menu-control">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="ad-admenu-bottom-menu">
                
                        <li data-toggle="collapse" data-target="#dash" class="{{ Request::is('dashboard') ? '' : 'collapsed' }} jsad-list ">
                            <a href="{{url('dashboard')}}" class="jsad-menu-collapsed">
                                <span class="icon-view-dashboard"></span> 
                            <h6>Dashboard</h6></a>
        
                            <div class="sidebar-submenu collapse in" id="dash" style="padding: 0;">
                            </div>
                        </li>
                        <li data-toggle="collapse" data-target="#user" class="{{ Request::is('role-management','user-management','role-management','add-role','user-management','add-user') ? '' : 'collapsed' }} jsad-list ">
                            <a class="jsad-menu-collapsed"><span class="icon-Icon-awesome-user"></span> 
                            <h6>Roles</h6></a>
        
                            <div class="sidebar-submenu collapse {{ Request::is('role-management','user-management','user-management','role-management','add-role','user-management','add-user') ? 'in' : '' }}" id="user">
                                <ul>
                        @can('user-management')
                                    <li><a class="" href="{{ route('users.index') }}"><h6>Manage Users</h6></a></li>
                        @endcan
                        @can('role-management')
                                    <li><a class="" href="{{ route('roles.index') }}"><h6>Manage Role</h6></a></li>
                        @endcan
                                </ul>
                            </div>
                        </li>
                        <li data-toggle="collapse" data-target="#blog" class="{{ Request::is('new-blog','blog-category-list','blog-list','blog-comments','tag-management') ? '' : 'collapsed' }}  jsad-list ">
                            <a class="jsad-menu-collapsed"><span class="icon-Icon-metro-blogger"></span> 
                            <h6>Blog Management</h6></a>
        
                            <div class="sidebar-submenu collapse{{ Request::is('new-blog','blog-category-list','blog-list','blog-comments','tag-management') ? 'in' : '' }}" id="blog">
                                <ul>
                                    @can('new-blog')
                                    <li>
                                        <a href="{{url('./new-blog')}}"><span class="icon-cube-send"></span><h6> New Blog</h6> </a>
                                    </li>
                                    @endcan
                                    @can('blog-comments')
                                    <li>
                                        <a href="{{url('./blog-category-list')}}"><span class="icon-Group-1017"></span><h6>Blog Categories</h6></a>
                                    </li>
                                    @endcan
                                    @can('blog-list')
                                    <li>
                                        <a href="{{url('./blog-list')}}"><span class="icon-blog-list"></span><h6>Blog List</h6> </a>
                                    </li>
                                    @endcan
                                    @can('blog-comments')
                                    <li>
                                        <a href="{{url('./blog-comments')}}"><span class="icon-Fill"></span><h6>Blog Comments</h6></a>
                                    </li>
                                    @endcan
                                    @can('tag-management')
                                    <li>
                                        <a href="{{url('./tag-management')}}"><span class="icon-Icon-awesome-tags"></span><h6>Tag Management</h6></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                        <li data-toggle="collapse" data-target="#web" class="{{ Request::is('about','contact','subscription','testimonial','terms-and-conditions','privacy_policy','cookie_policy') ? '' : 'collapsed ' }} jsad-list ">
                            <a href="#" class="jsad-menu-collapsed"><span class="icon-web"></span><h6>Website Management</h6></a>
        
                            <div class="sidebar-submenu collapse {{ Request::is('about','contact','subscription','testimonial','terms-and-conditions','privacy_policy','cookie_policy') ? 'in ' : '' }} " id="web">
                                <ul>
                                    @can('about-us')
                                    <li>
                                        <a href="{{url('./about')}}"><span class="icon-Group-1594"></span><h6>About us</h6> </a>
                                    </li>
                                    @endcan
                                    @can('contact-us')
                                    <li>
                                        <a href="{{url('./contact')}}"><span class="icon-Icon-awesome-building"></span><h6>Contact us</h6></a>
                                    </li>
                                    @endcan
                                    @can('subscriptions')
                                    <li>
                                        <a href="{{url('./subscription')}}"><span class="icon-Icon-material-send"></span><h6>Subscriptions</h6> </a>
                                    </li>
                                    @endcan
                                    @can('testimonials')
                                    <li>
                                        <a href="{{url('./testimonial')}}"><span class="icon-testimonial"></span><h6>Testimonials</h6></a>
                                    </li>
                                    @endcan
                                    @can('terms-and-conditions')
                                    <li>
                                        <a href="{{url('./terms-and-conditions')}}"><span class="icon-Terms-and-conditions"></span><h6>Terms & Conditions</h6></a>
                                    </li>
                                    @endcan
                                    @can('privacy-policy')
                                    <li>
                                        <a href="{{url('./privacy_policy')}}"><span class="icon-privacy"></span><h6>Privacy Policy</h6></a>
                                    </li>
                                    @endcan
                                    @can('cookie-policy')
                                    <li>
                                        <a href="{{url('./cookie_policy')}}"><span class="icon-privacy"></span><h6>Cookie Policy</h6></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <p class="footer">© 2021 Skillsacademi. <br>
                        All Rights Reserved </p>
                </div>
            </section>
            @yield('content')