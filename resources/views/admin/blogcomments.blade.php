@extends('layouts.app')

@section('content')

<body onload="" style="margin:0;">
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
                                        <td><h4><h4> Blog Comments</h4></h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="ml-auto"><a href="./blog-list.html" class="secondary-btn"></span> Blog List</a></div>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th style="width: 500px;">Comment</th>
                                                <th>Created At</th>
                                                <th style="width: 90px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blogcomments as $item)
                                                
                                            <tr>
                                                <td>{{ $loop->iteration  }}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->message}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('single-blogs/'.$item->article_slug.'/'.$item->blog_id)}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                        </li>
                                                        <li>
                                                            @csrf
                                                            <a href="{{url('/blog-comments-delete/'.$item->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                        <li>
                                                            <label class="switch" for="{{$item->id}}">
                                                                <input class="fm" type="checkbox" data-id="{{$item->id}}" id="{{$item->id}}" 
                                                                @if ($item->val==('true'))
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

            </div>
        </div>
        <!-- Modal -->
        {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                class="icon-Icon-close"></span></button>
                        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate>
                            <div class="row display-flex">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input id="validationTooltip01" type="text" class="form-control" id="usr"
                                            value="Aaron Stanley" required>
                                        <label for="usr">Name</label>
                                        <div class="invalid-feedback">
                                            Please fill out this field
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="charles.stanley@mail.com"
                                            required>
                                        <label for="usr">Email</label>
                                        <div class="invalid-feedback">
                                            Please fill out this field
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="25 January, 2021 11:26 AM"
                                            required>
                                        <label for="usr">Created at</label>
                                        <div class="invalid-feedback">
                                            Please fill out this field
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Covid-19 and work place"
                                            required>
                                        <label for="usr">Commented for article</label>
                                        <div class="invalid-feedback">
                                            Please fill out this field
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <textarea type="text" rows="10" class="form-control" required></textarea>

                                        <label for="usr">Comment </label>
                                        <div class="invalid-feedback">
                                            Please fill out this field
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p for="usr"><b>Approve/Refuse Comment</b></p>
                                            <label class="switch" for="checkbox11">
                                                <input type="checkbox" id="checkbox11">
                                                <div class="slider round"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 v-center">
                                    <img class="w-100" src="./images/blog comment gif.gif" alt="">
                                </div>
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
        </div> --}}
    </section>
</div>
<!-- </div> -->
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{asset('js/ajax.js')}}"></script>
        @endsection
        