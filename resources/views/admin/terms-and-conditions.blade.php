@extends('layouts.app')

@section('content')

<!-- <body> -->
    <body onload="myFunction()" style="margin:0;">
        <!-- <div id="loader" class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
          </div>
        <div style="display:none;" id="myDiv" class="animate-bottom"> -->
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
                                                    <h4> Terms and Conditions </h4>
                                                </h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="jsad-body-layout-box">
                                    <div class="padding">
                                        <form method="post" action="{{ url('terms-and-conditions-save') }}" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>Terms and conditions Content</p>
                                                </div>
                                                <div class="col-md-12">
                                                        @csrf
                                                        <div class="form-group">
                                                            <textarea class="summernote" id="summernote" name="description">  {!! $terms->description !!}  </textarea>
                                                            <div class="small-text">Make sure before saving article kindly check in HTML format. Do not do direct copy paste from any external websites/document. We will recommend copy paste content only from 'notepad'. </div>
                                                            <div class="invalid-feedback">
                                                                Please fill out this field
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-flex">
                                                        <div class="ml-auto"><button class="btns btn-green">Save</button></div>
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
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    class="icon-Icon-close"></span></button>
                            <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-group">
                                    <input type="text" class="form-control" required>
                                    <label for="usr"> Tag Name</label>
                                    <div class="small-text">Healthcare assistants</div>
                                    <div class="invalid-feedback">
                                        This Field required
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="ml-auto">
                                        <button class="btns btn-red">Cancel</button>
                                        <button class="btns btn-green">Save</button>
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