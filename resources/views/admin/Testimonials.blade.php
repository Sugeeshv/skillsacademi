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
                                        <td>
                                            <h4><span onclick="goBack()" class="icon-Icon-back"></span></h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <h4>Testimonials</h4>
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
                                <div class="ml-auto"><a href="{{url('testimonial-add')}}"  class="secondary-btn"><span
                                            class="icon-Icon-user-plus"></span> Add testimonial</a></div>
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
                                                <th style="width: 200px;">Name</th>
                                                <th style="width: 500px;">Comment</th>
                                                <th>Created At</th>
                                                <th>Created By</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($test as $item)
                                                
                                            <tr>
                                                <td>{{ $loop->iteration  }}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{!!$item->comment!!}</td>
                                                <td>
                                                    {{$item->created_at}}
                                                </td>
                                                <td> {{$item->created_by}}</td>

                                                <td>
                                                    <ul>
                                                        <li><a href="{{url('testimonial-delete/'.$item->id)}}" ><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                        </li>
                                                        <li><a href="{{url('testimonial-edit/'.$item->id)}}" ><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
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
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        class="icon-Icon-close"></span></button>
                                <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation testimonial" novalidate>
                                    <div class="row display-flex">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" id="name" name="name" class="form-control" required>
                                                <label for="usr">Enter Name </label>
                                                <div class="invalid-feedback">
                                                    Please enter a seo title here
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="description"  id="summernote" cols="20" rows="5" class="form-control" required></textarea>
                                                <!-- <label for="usr">Article Title</label> -->
                                                <div class="small-text">Make sure before saving article kindly check in HTML format. Do not do direct copy paste from any external 
                                                    websites/document. We will recommend copy paste content only from 'notepad'.</div>
                                                <div class="invalid-feedback">
                                                    Please enter a article title here
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-4 v-center">
                                            <img class="w-120" src="./images/Testimonials gif.gif" alt="" style="z-index: 0;">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-flex">
                                                <div class="ml-auto">
                                                    {{-- <button type="submit" class="btns btn-green" type="submit">Save</button> --}}
                                <input type="submit" id="submit" value="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="result"></div>
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

        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{asset('js/ajax.js')}}"></script>
        @endsection
        