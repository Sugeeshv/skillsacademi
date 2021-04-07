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
                                        <td><h4><span onclick="goBack()" class="icon-Icon-back"></span> </h4></td>
                                        <td><h4><h4> Role Management</h4></h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="ml-auto"><a href="{{ route('roles.create') }}" class="secondary-btn">
                                    <span class="icon-Icon-add"></span> Add Role</a></div>
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
                                                <th>Role Name</th>
                                                <th>Description</th>
                                                <th>Updated by</th>
                                                <th>Last Updated</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($roles as $key => $role)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>Assisting With Blogs</td>
                                                <td>Shaju Jos</td>
                                                <td>2020-12-29 06:15 PM</td>
                                                <td>
                                                    <ul>
                                                        <li><a href="{{ route('roles.show',$role->id) }}"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></a></li>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        </li>
                                                        <form action="{{ route('roles.destroy', $role->id)}}" method="POST">
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
    </section>
<!-- </div> -->
</body>
        
        @endsection