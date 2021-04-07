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
                                        <td>
                                            <h4><span onclick="goBack()" class="icon-Icon-back"></span></h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <h4> Add User </h4>
                                            </h4>
                                        </td>
                                    </tr>
                                    <td>
                                        <h5>
                                            <div class="text-color-primary"><span class="icon-info"></span></div>
                                        </h5>
                                    </td>
                                    <td>
                                        <p>User Management associate available roles with users. <br>
                                            User is able to create, edit, and delete users related operations here.
                                        </p>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="ml-auto"><a href="./user-management" class="secondary-btn">User
                                        List</a></div>
                            </div>
                        </div>
                    </div>
                    
{{-- {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control'))
            !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!} --}}
                    <form action="{{route('users.store')}}" method="POST" class="form-sp-style" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="jsad-body-layout-box">
                                    <div class="padding">
                                        <div class="form-group">
                                            <input id="validationTooltip01" name="name" type="text" class="form-control" placeholder="Enter User Name"
                                                id="usr" autocomplete="off" required>
                                                <br>
                                                    @if (count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @error('name')
                                                                    <div class="error">{{ $message }}</div>
                                                                @enderror
                                                            </ul>
                                                        </div>
                                                    @endif
                                            <div class="small-text">Must fill the name of system user</div>
                                            <div class="invalid-feedback">
                                                Please enter a article title here
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="radio">
                                                        <input id="radio-1" name="gender" type="radio" value="male">
                                                        <label for="radio-1" class="radio-label">Male</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="radio">
                                                        <input id="radio-2" name="gender" type="radio" value="female">
                                                        <label for="radio-2" class="radio-label">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="phonenumber" type="text" class="form-control" placeholder="Phone Number" autocomplete="off"
                                                id="usr" required>
                                            <label for="usr"></label>
                                            <div class="small-text">Remember, mobile number should be verified while
                                                login </div>
                                            <div class="invalid-feedback">
                                                Please enter a article title here
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                                            <div class="small-text">Choose appropriate user role. </div>
                                            <div class="invalid-feedback">
                                                Please enter a article title here
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="email" type="text" class="form-control" placeholder="Email address" autocomplete="off" id="usr" required>
                                            <label for="usr"></label>
                                                @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @error('email')
                                                                <div class="error">{{ $message }}</div>
                                                            @enderror
                                                        </ul>
                                                    </div>
                                                @endif
                                            <div class="small-text">Choose appropriate user role. </div>
                                            <div class="invalid-feedback">
                                                Please enter a article title here
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="Pass" type="password" class="form-control" name="password" required>
                                                    <i onclick="show('Pass')" class="fa fa-lock" id="display"></i>
                                                    <label for="usr">Password</label>  
                                                    @if (count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                            @if($errors->any())
                                                            {{ implode('', $errors->all(':message')) }}
                                                            @endif
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <div class="small-text">
                                                        <div class="d-flex">
                                                            <div class=" text-color-primary">
                                                                <span class="icon-info"></span>
                                                            </div> &nbsp; Must satisfy password guidelines.
                                                        </div>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please enter a article title here
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="password" name="confirm-password" class="form-control" id="newPass"
                                                        required>
                                                    <i onclick="show('newPass')" class="fa fa-lock"
                                                        id="display"></i>
                                                    <label for="usr">Confirm Password</label>
                                                    <div class="small-text">
                                                    @if($errors->any())
                                                    {{ implode('', $errors->all(':message')) }}
                                                    @endif
                                                        <div class="d-flex">
                                                            <div class=" text-color-primary">
                                                                <span class="icon-info"></span>
                                                            </div> &nbsp; Must satisfy password guidelines.
                                                        </div>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Must satisfy password guidelines.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex">
                                                    <div class="ml-auto">
                                                        <button class="btns btn-red">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4">
                                <div class="jsad-body-layout-box">
                                    <div class="padding">
                                        <div class="profile-pic">
                                            <img class="w-100" id="previewImg" src="/examples/images/transparent.png" alt="">
                                            <div class="input-profile-pic-uplade">
                                                <input type="file" name="image" class="profile-pic-input" onchange="previewFile(this);" placeholder="">
                                                <i class="fa fa-camera-retro" aria-hidden="true"></i>
                                                <label for="">Choose pic</label>
                                            </div>
                                        </div>
                                    </div>@if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div> --}}
                        </div>
                    </form>
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
                                        <input id="validationTooltip01" type="text" class="form-control" id="usr" placeholder=""
                                            value="Aaron Stanley" required>
                                        <label for="usr">Name</label>
                                        <div class="invalid-feedback">
                                            Please fill out this field
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="charles.stanley@mail.com" placeholder=""
                                            required>
                                        <label for="usr">Email</label>
                                        <div class="invalid-feedback">
                                            Please fill out this field
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="25 January, 2021 11:26 AM" placeholder=""
                                            required>
                                        <label for="usr">Created at</label>
                                        <div class="invalid-feedback">
                                            Please fill out this field
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Covid-19 and work place" placeholder=""
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
                                                <input type="checkbox" id="checkbox11" placeholder="">
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
                                            <button class="btns btn-green" type="submit" data-dismiss="modal"
                                                data-toggle="modal" data-target="#myModal1">Save</button>
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
                                <button class="btns btn-red" type="submit">Cancel</button>
                                <button class="btns btn-green" type="submit">Confirm</button>
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