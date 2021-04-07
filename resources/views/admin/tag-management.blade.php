<meta name="csrf-token" content="{{ csrf_token() }}" />
@extends('layouts.app')

@section('content')

<body style="margin:0;">
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
                                            <td>
                                                <h4><span onclick="goBack()" class="icon-Icon-back"></span></h4>
                                            </td>
                                            <td>
                                                <h4>
                                                    <h4> Tag Management </h4>
                                                </h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="ml-auto"><a href="#" class="secondary-btn"><i class="fa fa-download"
                                                aria-hidden="true"></i> Export List</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="jsad-body-layout-box">
                                    <div class="padding">

                                        <div class="col-md-8">
                                            <form class="needs-validation form-sp-style" method="post" action="{{url('tag-management-save')}}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input id="tagname" name="tagname" type="text" class="blackcolor-text input-orange" placeholder="Tag Name" required>
                                                            <!-- <div class="small-text">Remember, mobile number should be verified while login </div> -->
                                                            <div class="invalid-feedback">
                                                                Please fill out this field
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button class="btns btn-red mt-3">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-12">
                                            <table id="table_id">
                                                <thead>
                                                        
                                                    <tr>
                                                        <th style="width: 50px ;">#</th>
                                                        <th style="width: 700px;">Tag Name</th>
                                                        <th style="width: 100px;">Updated by</th>
                                                        <th>Last Updated</th>
                                                        <th>Count</th>
                                                        <th style="width: 90px;">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tags as $tag)
                                                    <tr>
                                                        <td>{{ $loop->iteration  }}</td>
                                                        <td>{{$tag->tag_name}}</td>
                                                        <td>{{$tag->updated_by}}</td>
                                                        <td>{{$tag->updated_at}}</td>
                                                        <td> 1 </td>
                                                        <td>
                                                            <ul>                                                                
                                                                <li>
                                                                    <a href="#">
                                                                        <button  class="tag"  value="{{$tag->id}}" style="background:transperant!important;border:solid 0px">
                                                                        <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i>
                                                                    </button>
                                                                    </a>
                                                                </li>
                                                                <li><a href="{{url('tag-management-delete/'.$tag->id)}}">
                                                                        @csrf
                                                                        <i class="fa fa-trash"></i></a></li>
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
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    class="icon-Icon-close"></span></button>
                        </div>
                            <form class="form  form-sp-style" method="post" action="{{url('tag-management/')}}">
                        <div class="modal-body">
                            <div class="form-group">
                                    <label>Name:</label>
                                <input type="text" class="blackcolor-text input-orange" id="name" name="name" placeholder="Product Name" value="">
                                </div>
                        </div>
                        <div class="modal-footer">
                          <input class="btn btn-primary" type="submit" id="submit" value="Save Changes">
                          <input type="hidden" id="id" name="id" value="0">
                        </div>
                            </form>           
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog center" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    class="icon-Icon-close"></span></button>
                            <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                        </div>
                        <div class="modal-body">
                            <div class="sweetal-aert-sucess">
                                <h1>Confirm!</h1>
                                <h4>Are you sure you want to change the status?</h4>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="m-auto">
                                    <button class="btns btn-red" type="submit">Cancel</button>
                                    <button  class="btns btn-green" type="submit">Confirm</button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{asset('js/ajax.js')}}"></script>

        @endsection