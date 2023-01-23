@extends('frontend.layout.app')
@section('content')
<div class="site-content">
        <!--~~~ Sticky Header ~~~-->
        <div id="sticky-header"></div>
        <!--~./ end sticky header ~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Page Title Area
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="page-title-area bg-image bg-parallax2"
            style="background-image:url('common/assets/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Online Enquiry</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">reservation</li>
                                </ol>
                            </div>
                            <!--~~./ breadcrumb-area ~~-->
                        </div>
                        <!--~~./ page-header-content ~~-->
                    </div>
                </div>
            </div>
            <!--~~./ end container ~~-->
        </div>
        <!--~~./ end page title area ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Reservation Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="reservation-block style-four">
            <div class="element-group">
                <div class="element one">
                    <img src="{{asset('common/assets/images/element/element4.1.png')}}" alt="Element">
                </div>
                <div class="element two">
                    <img src="{{asset('common/assets/images/element/element5.png')}}" alt="Element">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="reservation-form-area ptb-100">
                            <div class="section-title section-default text-center">
                                <h2 class="title-main">Online Booking <span> Reservation</span></h2>
                                <!-- /.title-main -->
                                <div class="divider">
                                    <span class="icon-star-full"></span>
                                    <span class="icon-star-full"></span>
                                    <span class="icon-star-full"></span>
                                </div>
                            </div><!-- /.section-title -->
                            @if (session('success'))
<div class="done2">
    <strong>Thank you!</strong> We have received your message.
</div>
@endif

@if (session('error'))
<div class="alert alert-dismissible alert-danger" style="margin-top:80px">
    <button class="close" type="button" data-dismiss="alert">×</button>
    {{ session('error') }}
</div>
@endif
@if (count($errors)>0)
        <div class="alert alert-dismissible alert-danger" style="margin-top:80px">
            <button class="close" type="button" data-dismiss="alert">×</button>
            @foreach($errors->all() as $error)
            <ul>
                <li>
                    {{ $error }}
                </li>
            </ul>
            @endforeach
        </div>
@endif
                            <form method="POST" action="{{ url('/enquiry')}}" class="reservation-form" id="reservation-forms">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-controllar" name="name" placeholder="Full Name" required>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-controllar" name="email" placeholder="Email Address" required>
                                        </div><!-- /.form-group -->
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-controllar" name="contact_no" placeholder="Phone Number" required>
                                        </div><!-- /.form-group -->
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <select name="product_id" class="select-custom" required>
                                                <option value="">Products</option>
                                                @foreach($products as $product)
                                                    <option value="{{$product->id}}" {{$product->id == $selectedProduct?'Selected':''}}>{{$product->course_title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="address" class="form-controllar" name="address" placeholder="Your Full Address" required>
                                        </div><!-- /.form-group -->
                                    </div>

                                   <div class="col-12 text-center">
                                        <input type="submit" class="btn btn-default btn-white" value="Order Now">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="res-opening-time">
                            <div class="res-right-img">
                                <img src="{{asset('common/assets/images/others/res-right.png')}}" alt="Thumb">
                            </div>
                            <div class="res-opening-time-inner">
                                <div class="section-title section-default text-center text-white">
                                    <h2 class="title-main">Time <span> Opening</span></h2><!-- /.title-main -->
                                    <div class="divider">
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                    </div>
                                </div><!-- /.section-title -->
                                <div class="opening-time-group">
                                    <h2 class="title">Monday - Friday</h2>
                                    <h3 class="time">10.<sup>00 a.m</sup> - 11.<sup>00 p.m</sup>
                                    </h3>
                                </div>
                                <div class="opening-time-group">
                                    <h2 class="title">saturday - sunday</h2>
                                    <h3 class="time">10.<sup>00 a.m</sup> - 12.<sup>00 p.m</sup>
                                    </h3>
                                </div>
                                <div class="divider">
                                    <span class="icon-star-full"></span>
                                    <span class="icon-star-full"></span>
                                    <span class="icon-star-full"></span>
                                </div>
                                <div class="contact-info">
                                    <h2 class="title">On Call Order </h2>
                                    <h3 class="contact-no">+8130550124</sup></h3>
                                </div>
                            </div>
                        </div><!-- /.res-opening-time -->
                    </div>
                </div>
            </div>
        </div>
        <!--~~./ end reservation block ~~-->


    </div>
    <!--~~./ end site content ~~-->

@endsection
