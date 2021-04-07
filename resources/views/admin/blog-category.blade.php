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
                                <div class="ml-auto"><a href="{{url('blog-category-list')}}" class="secondary-btn">
                                    Category List</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row display-flex">
                        <div class="col-lg-8">
                            <div class="jsad-body-layout-box">
                                <div class="padding">
                                    <br>
                                    <form class="needs-validation form-sp-style" method="post" action="{{url('blog-category-save')}}">
                                        @csrf
                                                <div class="form-group">
                                                    <input id="catogeryname" type="text" name="categoryname" class="blackcolor-text input-orange" id="usr" value="" placeholder="Category Name" autocomplete="off" required>
                                                    <div class="small-text">Category name for blog category</div>
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <input type="text" class="blackcolor-text input-orange" value="" required> -->
                                                    <input id="shortdescription" type="text" name="shortdescription" class="blackcolor-text input-orange" id="usr" value="" placeholder="Short Description" autocomplete="off" required>
                                                    <div class="small-text">In this description displayed on home page category section.</div>
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="blackcolor-text input-orange" id="seotitle" name="seotitle" value="" placeholder="SEO Title" autocomplete="off" required>
                                                    <div class="small-text">This will be displayed as SEO Title.</div>
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="blackcolor-text input-orange" id="seodescription" name="seodescription" value="" placeholder="SEO Description" autocomplete="off" required>
                                                    <div class="small-text">Category name for blog category</div>
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="blackcolor-text input-orange" value="" id="seokeyword" name="seokeyword" placeholder="SEO Keywords" autocomplete="off" required>
                                                    <div class="small-text">Must create atleast 6 SEO keywords and not more than 10.</div>
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