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
<div class="row">
    <div class="col-lg-12 margin-tb">

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
                                                <h4> User Management</h4>
                                            </h4>
                                        </td>
                                    </tr>
                                    <td>
                                        <h5><div class="text-color-primary"><span class="icon-info"></span></div></h5>
                                    </td>
                                    <td>
                                        <p>User Management associate available roles with users. <br>
                                            User is able to create, edit, and delete users related operations here.</p>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="ml-auto"><a href="{{ route('users.create') }}" class="secondary-btn"><span
                                            class="icon-Icon-user-plus"></span> Add User</a></div>
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
                                                <th>Role</th>
                                                <th>Gender</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Last Login</th>
                                                <th>Updated by</th>
                                                <th>Last Updated</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        @foreach ($data as $key => $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                @if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
                                                @endforeach
                                                @endif
                                            </td>
                                            <td>Male</td>
                                            <td>{{ $user->email }}</td>
                                            <td>dennis.c@eljoservices.com</td>
                                            <td>2020-12-29 
                                                06:15 PM</td>
                                            <td>Shaju Jos</td>
                                            <td>2020-12-29 
                                                    06:15 PM</td>
                                            <td>
                                                <ul>
                                                    <li><a  href="{{ route('users.show',$user->id) }} data-toggle="modal"
                                                            data-target="#myModal"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a></li>
                                                    </li>
                                                    {{-- <li><a href="#" data-toggle="modal"
                                                            data-target="#myModal"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a></li>
                                                    </li> --}}
                                                        
                                                    <a href="{{ route('users.edit',$user->id) }}"><span class="icon-Icon-key"></span></a></li>
                                                    <form action="{{ route('users.destroy', $user->id)}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE"> 
                                                        <li>
                                                            <button type="submit" class="" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                            
                                                        </li>            
                                                    </form>
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
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
            <button class="btns btn-red" type="submit" >Cancel</button>
            <button class="btns btn-green" type="submit" >Confirm</button>
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
<!-- </div> -->
</body>
        
        @endsection