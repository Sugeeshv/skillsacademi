@extends('layouts.app')

@section('content')

<body class="body" onload="myFunction()" style="margin:0;">
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
        <div class="jsad-body-layout">
            <div class="row">
                <div class="col-md-12">
                    <div class="row heading">
                        <div class="col-md-6">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><h4><span onclick="goBack()" class="icon-Icon-back"></span></h4></td>
                                        <td><h4><h4> Add Blog Category</h4></h4></td>
                                    </tr>
                                    <td></td>
                                    <td>
                                        <p>User with the privileges can create, edit or delete blog category</p>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="ml-auto"><a href="{{url('blog-catogery-list')}}" class="secondary-btn">
                                    Category List</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row display-flex">
                        <div class="col-lg-8">
                            <div class="jsad-body-layout-box">
                                <div class="padding">
                                    <br>
                                               
                                    @foreach ($blogcatogerys as $blog) 
                                    <form method="post" action="{{url('blog-catogery-update-save/'.$blog->id)}}">
                                        @csrf
                                        <input type="hidden" value="{{$blog->id}}">
                                        <div class="form-group">
                                            <input id="catogeryname" type="text" name="catogeryname" class="blackcolor-text input-orange" id="usr" value="{{$blog->catogery_name}}" placeholder="Category Name" autocomplete="off" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="text" class="blackcolor-text input-orange" value=" required> -->
                                            <input id="shortdescription" type="text" name="shortdescription" class="blackcolor-text input-orange" id="usr" value="{{$blog->short_description}}" placeholder="Short Description" autocomplete="off" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="blackcolor-text input-orange" id="seotitle" name="seotitle" value="{{$blog->seo_title}}" placeholder="SEO Title" autocomplete="off" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="blackcolor-text input-orange" id="seodescription" name="seodescription" value="{{$blog->seo_description}}" placeholder="SEO Description" autocomplete="off" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="blackcolor-text input-orange" value="{{$blog->seo_keyword}}" id="seokeyword" name="seokeyword" placeholder="SEO Keywords" autocomplete="off" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex">
                                                    <div class="ml-auto"><button class="btns btn-green">Save</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </form>    
                                                @endforeach 
                                    {{-- < --}}
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 v-center">
                            <div class="jsad-body-layout-box  v-center">
                                <div class="">
                                    <img class="w-100 " src="{{ asset('admin/images/Blog Category gif.gif') }}" alt="">
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