@extends('layouts.app')

@section('content')

<body onload="myFunction()" style="margin:0;">
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
            <div class="jsad-topmenu">
                <div class="d-flex">
                    <div class="ml-auto jsad-flex">
                        <div class="jsad-user-layout">
                            <div class="jsad-control-left">
                                <img src="./images/user.png" alt="">
                            </div>
                            <div class="jsad-control-right">
                                <span class="icon-settings"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                                    <h4>Contact us</h4>
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
                                                    <th>Phone</th>
                                                    <th>Designation</th>
                                                    <th>Status</th>
                                                    <th>Created at</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cont as $contact)   
                                                <tr>
                                                    <td>{{ $loop->iteration  }}</td>
                                                    <td>{{$contact->name}}</td>
                                                    <td>{{$contact->email}}</td>
                                                    <td>{{$contact->phonenumber}}</td>
                                                    <td>{{$contact->designation}}</td>
                                                    <td><div class="nametag">New</div></td>
                                                    <td>{{$contact->created_at}}</td>
                                                            
                                                    <td>
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal"
                                                                    data-target="#myModal"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i></a></li>
                                                            </li>
                                                            <li>
                                                                <a href="{{ url('/contact-delete/'.$contact->id) }}" onclick="return confirm('Are You Sure ?')">
                                                                    @csrf
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </a>
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
                                                    <input type="text" class="form-control" value="1234567890"
                                                        required>
                                                    <label for="usr">Phone Number</label>
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="HCA"
                                                        required>
                                                    <label for="usr">Designation</label>
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <textarea type="text" rows="10" class="form-control" required></textarea> -->
                                                    <select name="" class="form-control" id="">
                                                        <option value="New">New</option>
                                                        <option value="Processing">Processing</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
        
                                                    <label for="usr">Status </label>
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <textarea type="text" rows="5" class="form-control" required>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                    </textarea>
        
                                                    <label for="usr"> Tag Name </label>
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 v-center">
                                                <img class="w-100" src="./admin/images/Contact-Gif.gif" alt="">
                                            </div>
                                        </div>
                                    </form>
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
