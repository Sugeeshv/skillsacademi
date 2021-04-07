@extends('layouts.app')

@section('content')

<body class="body" onload=" " style="margin:0;">
    <!-- <div id="loader" class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
      </div>
    <div style="display:none;" id="myDiv" class="animate-bottom"> -->
    <div>
        
        @include('layouts.admin-menu')
        <section class="jsad-layout">
        @include('layouts.admin-header')
        
    <section class="jsad-layout">
        <div class="jsad-body-layout">
            <div class="row">
                <div class="col-md-12">
                    <table class="head-align">
                        <tbody>
                            <tr>
                                <td><h4><span onclick="goBack()" class="icon-Icon-back"></span></h4></td>
                                <td><h4></h4><h4> Create Blog</h4></td>
                            </tr>
                            <tr><td></td>
                        </tr></tbody>
                    </table>
                    <form class="needs-validation form-sp-style" method="post" action="{{url('new-blog-save')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row display-flex">
                            <div class="col-lg-8 ">
                                <div class="jsad-body-layout-box">
                                    <div class="padding">

                                        <div class="form-group">
                                            <input id="article-title" name="articletitle" type="text" class="blackcolor-text input-orange" placeholder="Article Title" id="usr" autocomplete="off" required>
                                            <div class="small-text">Eg: How to Finalize a Name for your Mobile App</div>
                                        </div>
                                        <div class="form-group">
                                            <input id="articleslug" name="articleslug" type="text" class="blackcolor-text input-orange" placeholder="Article URL Slug" autocomplete="off" required>
                                            <div class="small-text">Eg: How-to-Finalize-a-Name-for-your-Mobile-App</div>
                                        </div>
                                        <div class="form-group">
                                            <input id="seotitle" name="seotitle" type="text" class="blackcolor-text input-orange" placeholder="SEO Title" autocomplete="off" required>
                                            <div class="small-text">This will be displayed as SEO Title.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="jsad-body-layout-box">
                                    <div class="padding">

                                        <div class="form-group">
                                            <input id="image" name="image" type="file" class="blackcolor-text input-orange" id="usr" placeholder="Upload Banner" autocomplete="off">
                                            <div class="small-text">*Maximum size 1mb. banner dimension should be WxH (1400x768).</div>
                                            @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Whoops!</strong> There were some problems with your input.
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        </div>
                                        <div class="form-group">
                                            <select name="articelcategory" id="articelcategory" class="blackcolor-text input-orange" placeholder="article category" autocomplete="off" required id="">
                                                <option value="">Choose Article Category</option>
                                                @foreach ($bcategory as $cat)
                                                <option value="xx">{{$cat->category_name}}</option>
                                                    
                                                @endforeach
                                            </select>
                                            <div class="small-text">Choose the article category.</div>
                                        </div>
                                        <div class="form-group">
                                            <input id="imagealttag" name="imagealttag" type="text" class="blackcolor-text input-orange" placeholder="Image Alt Tag" autocomplete="off" required>
                                            <div class="small-text">This will be displayed as an alternate tag for image.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row display-flex">
                            <div class="col-lg-8 ">
                                <div class="jsad-body-layout-box">
                                    <div class="padding">
                                        <div class="form-group" style="margin-bottom: -10px;">
                                            <p>Article Content</p>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="description" id="summernote" cols="20" rows="5" class="blackcolor-text input-orange" placeholder="Article Content"></textarea>
                                            <div class="small-text">Eg: How to Finalize a Name for your Mobile App</div> 
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex">
                                                <div class="ml-auto"><button class="btns btn-primary" type="submit">Save</button></div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="jsad-body-layout-box">
                                    <div class="padding">

                                        <div class="form-group">
                                            <input id="target" name="shortdescription" type="text" class="blackcolor-text input-orange" id="usr" placeholder="Short Description" autocomplete="off" required>
                                            <div class="small-text">A short description of your article. It is displayed in article list.</div>
                                        </div>
                                        <div class="form-group">
                                            <input id="input" name="seodescription" type="text" class="blackcolor-text input-orange" id="usr" placeholder="SEO Description" autocomplete="off" required>
                                            <div class="small-text">SEO Description for your article.</div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input id="tag" type="text" name="input" placeholder="Article Tags" class="blackcolor-text input-orange"  autocomplete="off" required>
                                            
                                            <div class="small-text">At least select/create one tag. Existing tag selection is better for reach.</div>
                                        </div>
                                        <div class="form-group">
                                            <input placeholder="SEO Keywords" name="seokeyword" type="text" class="blackcolor-text input-orange" autocomplete="off" required>
                                            <div class="small-text">Must create at least 1 SEO keywords and not more than 10.</div>
                                        </div>
                                        <div class="form-group">
                                            <select name="article" class="blackcolor-text input-orange" placeholder="Choose Author" autocomplete="off" required id="">
                                                <option value="">Choose Author</option>
                                                @foreach ($user as $user)
                                                <option value="{{$user->name}}">{{$user->name}}</option>
                                                    
                                                @endforeach
                                            </select>
                                            <div class="small-text">Choose author of your article. If you want to create new author click here</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
<!-- </div> -->
</body>
        @endsection