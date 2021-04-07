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
                        <div class="col-md-10">
                            <table class="head-align">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h4><span onclick="goBack()" class="icon-Icon-back"></span></h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <h4> Add Role</h4>
                                            </h4>
                                        </td>
                                    </tr>
                                    <td>
                                        <h5><div class="text-color-primary"><span class="icon-info"></span></div></h5>
                                    </td>
                                    <td>
                                        <p>Role Management associate available privileges with given role. <br>
                                            User is able to create, edit, and delete role and privilege related
                                            operations here.</p>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2">
                            <div class="d-flex">
                                <div class="ml-auto"><a href="role-management" class="secondary-btn">
                                    Roles List</a></div>
                            </div>
                        </div>
                    </div>                                
                    <div class="row display-flex">
                        <div class="col-lg-12">
                            <div class="jsad-body-layout-box">
                                <div class="padding">
                                    <br>
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                    </div>
                                    @endif  
                                    dd
                                    
                                    <form class="role-form form-sp-style" method="POST" action="{{ route('roles.store') }}"  novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="validationTooltip01" type="text" name="name" placeholder="Enter Role Name" class="form-control"
                                                        id="usr" value="" required>
                                                    {{-- <label for="usr">Enter Role Name</label> --}}
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input name="permission[]" type="text" class="form-control" placeholder="Enter Description"
                                                        id="usr" value="" required>
                                                    {{-- <label for="usr">Enter Description</label> --}}
                                                    <div class="invalid-feedback">
                                                        Please fill out this field
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Privileges</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            @foreach($permission as $value)
                                            <div class="col-md-4 form-group checkbox-box ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="{{$value->name}}" name="check1" value="{{$value->id}}">
                                                        <label for="{{$value->name}}">{{$value->name}}</label><br>
                                                    </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="d-flex">
                                            <div class="ml-auto">
                                                <button class="btns btn-green">Save</button>
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

@endsection()