@extends('layouts.website-layout')
@section('content')
@section('title', 'Contact Us')
 <!-- banner -->
<body >
 @include('layouts.website-header')
    
    <section class='contact'>
        <div class="contact-us trasperant-header">
            <h6>Contact us</h6>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                    <!-- <div class="main-heading pt-5 pb-5">
                        <h3>Contact Us</h3>
                    </div> -->
                        <div class="row contact-card-wrapper">
                            <div class="col-xl-5 col-lg-5 col-md-7">
                                <div class="">
                                    <div class="contact-socialmedia">
                                        <ul>
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="contact-card">
                                        <form method="post" action="{{ url('contactus-save') }}" >
                                            @csrf
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Full Name</label>
                                              <input name="name" type="text" class="form-control" maxlength="20" aria-describedby="emailHelp" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Email </label>
                                              <input name="email" type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputPassword1">Phone Number</label>
                                              <input name="phonenumber" type="number" class="form-control" placeholder="Phone Number">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputPassword1">Designation</label>
                                              <input name="designation" type="text" class="form-control" maxlength="10" placeholder="Designation">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputPassword1">Message</label>
                                              <!-- <input type="text" class="form-control" maxlength="10" placeholder="Designation"> -->
                                              <textarea name="message" name="" class="form-control" id="" cols="30" rows="10" placeholder="Message" rows="10" style="height: 100px;"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-animation secondary-button">Submit </button>
                                          </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 address">
                                <div class="addres-content">
                                    <h3>How Can We Help ?</h3>
                                    <ul class="addres-line">
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <a> Skillsacademi <br>
                                                Television House,  <br>
                                                269 Fieldend Road,Eastcote,  <br>
                                                London</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <a href="tel:+44 203 393 6177">+44 203 393 6177</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <a>8:00 am - 10:00 pm, Monday - Sunday</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()