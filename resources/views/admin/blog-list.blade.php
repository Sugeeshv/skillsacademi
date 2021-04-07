@extends('layouts.app')

@section('content')

<body class="body" style="margin:0;">
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
                                <td><h4><h4> Blog List</h4></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="ml-auto"><a href="./new-blog.html" class="secondary-btn"><span class="icon-Icon-metro-blogger"></span> Create Blog</a></div>
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
                                                    <th>Title</th>
                                                    <th>Category</th>
                                                    <th>Updated by</th>
                                                    <th>Last Updated</th>
                                                    <th style="width: 110px;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bloglist as $blog)                                                        
                                                <tr>
                                                    <td>{{ $loop->iteration  }}</td>
                                                    <td>{{$blog->article_title}}</td>
                                                    <td>{{$blog->articel_category}}</td>
                                                    <td>{{$blog->updated_by}}</td>
                                                    <td>{{$blog->updated_at}}</td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                {{-- <a href="#" id="submit" ><button class="btn btn-warning btn-detail open_modal" value="{{$blog->id}}"><i class="fa fa-eye" aria-hidden="true"></i></button></a> --}}
                                                                <a href="{{url('single-blogs/'.$blog->article_slug.'/'.$blog->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            </li>
                                                            
                                      {{-- <button class="btn btn-warning btn-detail open_modal" value="{{$blog->id}}">Edit</button> --}}
                                                            <li><a href="{{ url('blog-list-update/'.$blog->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                            <li><a href="#">
                                                                @csrf
                                                                <a href="{{ url('/blog-list-delete/'.$blog->id) }}" onclick="return confirm('Are You Sure ?')"><i class="fa fa-trash" aria-hidden="true"></i>
                                                           </a></li>
                                                            <li>
                                                                <label class="switch" for="{{$blog->id}}">
                                                                    <input class="blogcontrol" type="checkbox" data-id="{{$blog->id}}" id="{{$blog->id}}" 
                                                                    @if ($blog->approve==('true'))
                                                                      checked
                                                                     @else
                                                                     
                                                                     @endif />
                                                                    <div class="slider round"></div>
                                                                </label>
                                                            </li>
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
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    class="icon-Icon-close"></span></button>
                            <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation form-sp-style" novalidate>
                                <div class="row display-flex">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="id" type="text" class="form-control" value="Aaron Stanley" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="article_title" class="form-control" value="charles.stanley@mail.com" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="25 January, 2021 11:26 AM" id="article_slug" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Covid-19 and work place" id="seo_title" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Covid-19 and work place" id="articel_category" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Covid-19 and work place" id="imagealt_tag" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Covid-19 and work place" id="image" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Covid-19 and work place" id="shortde_scription" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Covid-19 and work place" id="seo_description" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Covid-19 and work place" id="tags" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Covid-19 and work place" id="seo_keyword" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Covid-19 and work place" id="article" required>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{-- <input type="text" class="form-control" value="Covid-19 and work place" id="article_content" required> --}}
                                            <textarea name="" class="form-control summernote" id="article_content" cols="30" rows="10"></textarea>
                                            <div class="invalid-feedback">
                                                Please fill out this field
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4 v-center">
                                        <img class="w-100" src="./images/blog comment gif.gif" alt="">
                                    </div> --}}
                                    <div class="col-md-12">
                                        <div class="d-flex">
                                            <div class="ml-auto">
                                                <button class="btns btn-green" type="submit" data-dismiss="modal"  data-toggle="modal" data-target="#myModal1">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<!-- </div> -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{asset('js/ajax.js')}}"></script>
        @endsection