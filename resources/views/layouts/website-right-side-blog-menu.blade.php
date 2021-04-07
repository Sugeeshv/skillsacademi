
       <div class="col-xl-3 col-md-12 single-course-content-sidebar">
        <form action="{{url('blogs-search')}}" method="get">
            @csrf
            <div class="form-group blog-search-box">
                <input  type="text" name="search" class="form-control input-green" placeholder="Enter keyword here to search">
                <button class="btn secondary-button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
        <h3>Latest  Posts</h3>
        <div class="single-blog-latest-posts-wrapper">
            @foreach ($posts as $item)
                
            <div class="single-blog-latest-posts">
                <div class="latest-blogs-image">
                    <img src="{{ asset('') }}{{$item->path}}{{$item->image}}" alt="">
                </div>
                <div class="latest-blog-content">
                    <p>{{$item->updated_at}}</p>
                    <h6>{!!$item->article_content!!}</h6>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <h3>Categories</h3>
        <br>
        <div class="signle-blog-post-catogery-wrapper">
            <div class="signle-blog-post-catogery">
        @foreach ($category as $item)
                <a href="#" class="signle-blog-post-nametag">
                    <p>{{$item->category_name}}</p>
                </a href="#">
        @endforeach
            </div>
        </div>
        <form class="subscibe-form mt-4" method="post" action="{{ url('subscription-save') }}" >
            @csrf
            <div class="form-group">
                    <input type="text" name="email" class="form-control input-green" placeholder="Subscribe">
                    <button href="#" class="btn secondary-button btn-animation">Subscribe</button>
            </div>
        </form>
        <h3>Leave a comment</h3>
        <form class="single-blog-post-comments" method="post" action="{{url('blog-comments')}}" >
            @csrf
            @foreach ($blogsearch as $item)
            <input name="blog-id" type="hidden" value="{{$item->id}}">
            <input name="blog-article" type="hidden" value="{{$item->article_slug}}">
            @endforeach
            
            <div class="form-group">
                <input type="text" class="form-control input-green" name="name" placeholder="Name">                
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-green" name="email" placeholder="Enter Email">                
            </div>
            <div class="form-group">
                <textarea id="" cols="30" class="form-control input-green" name="message" placeholder="Write Your Comments Here" rows="8"></textarea>              
            </div>
            <div class="form-group">
                <button href="#" class="btn btn-animation secondary-button">Post Submit</button>             
            </div>
        </form>
     </div>