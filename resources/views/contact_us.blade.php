@extends('layouts.master')

@section('css')

@endsection

@section('content')
    <!-- Section Page Title Start -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Contact us</h4>
                    <hr class="divider" />
                    
                    <ol class="breadcrumb">
                      <li>You are here:</li>
                      <li><a href="{{url('home')}}">Home</a></li>
                      <li class="active">Contact us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Page Title End -->	
    
    
    <!-- Section Contact Widget Start -->
    <section class="m-top-60">
        <div class="container">
            <div class="row">
                <!-- Widget Info Start -->
                <div class="col-sm-4 widget_info m-bot-30">
                    <div class="single_service gray-bg border-box  p-20 p-right-0">
                        <div class="service-heading clearfix">
                            <span class="icon pull-left">
                              <span class="icon-circle">
                                <i class="fa fa-globe"></i>
                              </span>
                            </span>
                            <h4 class="text-uppercase">Contact</h4>
                        </div>
                        
                        <ul class="nav promo-list">
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Address: 4B Street, City 3457  Sydney, US</li>
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Mail: themeshef@gmail.com</li>
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Website: themeshef.com</li>
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Call: +02546-54862</li>
                        </ul>
                    </div>
                </div>
                <!-- Widget Info End -->
                
                <!-- Widget Info Start -->
                <div class="col-sm-4 widget_info  m-bot-30">
                    <div class="single_service gray-bg border-box p-20 p-right-0">
                        <div class="service-heading clearfix">
                            <span class="icon pull-left">
                              <span class="icon-circle">
                                <i class="fa fa-briefcase"></i>
                              </span>
                            </span>
                            <h4 class="text-uppercase">Business Hourlies</h4>
                        </div>
                        
                        <ul class="nav promo-list">
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Monday - Friday: 10am to 5pm </li>
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Saturday: 10am to 8pm </li>
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Friday: Entertainment</li>
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Sunday: Closed </li>
                        </ul>
                    </div>
                </div>
                <!-- Widget Info End -->
                
                <!-- Widget Info Start -->
                <div class="col-sm-4 widget_info m-bot-30">
                    <div class="single_service gray-bg border-box p-20 p-right-0">
                        <div class="service-heading clearfix">
                            <span class="icon pull-left">
                              <span class="icon-circle">
                                <i class="fa fa-graduation-cap"></i>
                              </span>
                            </span>
                            <h4 class="text-uppercase">Why we are ?</h4>
                        </div>
                        
                        <ul class="nav promo-list">
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Pixel perfect design & mobile ready.</li>
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Beautiful typography and colours.</li>
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>24/7 support for all of users.</li>
                            <li><span class="icon"><i class="fa fa-angle-right"></i></span>Awesome & modern look.</li>
                        </ul>
                    </div>
                </div>
                <!-- Widget Info End -->
                
                
            </div>
        </div>
    </section>
    <!-- Section Contact Widget End -->
    
    
    <!-- Respond Section Start -->
    <section class="m-top-60 m-bot-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="respond" id="IdRespond">
                        <div class="comment-heading clearfix">
                            <h4>Leave A Comment</h4>
                        </div>
                        
                        <form class="contact-form clearfix m-top-30">
                            <!-- Name -->
                            <div class="col-sm-4 m-top-30">
                                <div class="form-group has-feedback">
                                  <input class="form-control" type="text" placeholder="Name" required  />
                                  <span class="form-control-feedback"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <!-- Name -->
                            
                            <!-- Email -->
                            <div class="col-sm-4 m-top-30">
                                <div class="form-group has-feedback">
                                  <input class="form-control" type="email" placeholder="Email" required />
                                  <span class="form-control-feedback"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                            <!-- Email -->
                            
                            <!-- Website -->
                            <div class="col-sm-4 m-top-30">
                                <div class="form-group has-feedback">
                                  <input class="form-control" type="text" placeholder="Website" />
                                  <span class="form-control-feedback"><i class="fa fa-globe"></i></span>
                                </div>
                            </div>
                            <!-- Website -->
                            
                            <!-- Message -->
                            <div class="col-sm-12 m-top-30">
                                <div class="form-group">
                                  <textarea class="form-control" rows="15" placeholder="Message" required  ></textarea>
                                </div>
                            </div>
                            <!-- Message -->
                            
                            <!-- Buttons -->
                            <div class="col-sm-12 m-top-30">
                                <button type="submit" class="icon-btn-primary">
                                    <span class="icon "><span class="icon-btn"><i class="fa fa-check"></i></span></span>
                                    send comment
                                </button>
                                
                                <span class="space-15"></span>
                                
                                <button type="reset" class="icon-btn-default">
                                    <span class="icon "><span class="icon-btn"><i class="fa fa-undo"></i></span></span>
                                    Reset form
                                </button>
                            </div>
                            <!-- Buttons -->
                            
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Respond Section End -->
@endsection 

@section('scripts')

@endsection