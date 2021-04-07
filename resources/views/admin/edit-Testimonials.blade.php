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
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h4><span onclick="goBack()" class="icon-Icon-back"></span></h4>
                                            </td>
                                            <td>
                                                <h4></h4>
                                                <h4> Edit Testimonialy</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="ml-auto">
                                        <a href="{{url('testimonial')}}" class="secondary-btn"> Category List</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="jsad-body-layout-box">
                                    <div class="display-flex">
                                    <div class="col-lg-7">
                                        <br>
                                        @foreach ($test as $item)
                                            
                                        <form class="needs-validation form-sp-style" method="post" action="{{url('testimonial-edit/'.$item->id)}}">
                                            @csrf
                                            <div class="form-group">
                                                <input id="name" name="name" type="text" name="catogeryname" class="blackcolor-text input-orange" value="{{$item->name}}"  placeholder="Enter Name" autocomplete="off" required="">
                                                <div class="invalid-feedback">
                                                    Please fill out this field
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea id="summernote" name="description" type="text" name="catogeryname" class="" value=""  placeholder="Enter Name" autocomplete="off" required="">{!!$item->comment!!}</textarea>
                                                <div class="invalid-feedback">
                                                    Please fill out this field
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="d-flex">
                                                        <div class="ml-auto"><button
                                                                class="btns btn-green">Save</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </form>
                                        @endforeach

                                    </div>
                                    <div class="col-lg-5 v-center">
                                        <div class="v-center">
                                            <img class="w-100 "
                                                src="http://127.0.0.1:8000/admin/images/Testimonials gif.gif" alt="">
                                        </div>
                                    </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('js/ajax.js')}}"></script>
    @endsection
