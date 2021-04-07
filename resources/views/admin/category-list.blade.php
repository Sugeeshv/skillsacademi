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
                            <table class="head-align">
                                <tbody>
                                    <tr>
                                        <td><h4><span onclick="goBack()" class="icon-Icon-back"></span></h4></td>
                                        <td><h4><h4> Blog Category  Management</h4></h4></td>
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
                                <div class="ml-auto"><a href="{{url('blog-category')}}" class="secondary-btn">
                                    <span class="icon-Icon-add"></span> Add Category</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="jsad-body-layout-box">
                                <div class="padding">
                                    <table id="table_id">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Description</th>
                                                <th>Updated by</th>
                                                <th>Last Updated</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody> @foreach ($blogcategory as $blog) 
                                            <tr>
                                                <td>{{ $loop->iteration  }}</td>
                                                <td>{{$blog->category_name}}</td>
                                                <td>{{$blog->short_description}}</td>
                                                <td>{{$blog->updated_by}}</td>
                                                <td>{{$blog->updated_at}}</td>
                                                <td>
                                                    <ul>
                                                        <li><a href="#"><button class="btn btn-warning btn-detail open_modal" value="{{$blog->id}}"><i class="fa fa-eye" aria-hidden="true"></i></button></a></li>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('blog-category-update/'.$blog->id)}}"> <i class="fa fa-pencil"
                                                                    aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            @csrf
                                                            <a href="{{ url('/blog-category-delete/'.$blog->id) }}" onclick="return confirm('Are You Sure ?')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>         
                                                @endforeach          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    class="icon-Icon-close"></span></button>
                            <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation form-sp-style" novalidate>
                                <div class="row display-flex">
                                    <div class="col-md-12">
                                        <h4>Blog Category</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="catogeryname" type="text" class="blackcolor-text input-orange" placeholder="Category Name" required>
                                            {{-- <label for="">kuh</label> --}}
                                            {{-- <label for="" id="	catogery_name"></label> --}}
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="shortdescription" class="blackcolor-text input-orange" value="charles.stanley@mail.com" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        <div class="form-group">
                                            <input type="text" id="updatedby" class="blackcolor-text input-orange" value="charles.stanley@mail.com" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>

                                    </div>
                                        {{-- <div class="d-flex">
                                            <div class="ml-auto">
                                                <button id="btn-save" class="btns btn-green" type="submit" data-dismiss="modal"  data-toggle="modal" data-target="#myModal1">Save</button>
                                            </div>
                                        </div> --}}
                                    </div>
                            </form>
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
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{asset('js/ajax.js')}}"></script>
        @endsection