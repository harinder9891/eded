@extends('frontend.layout.app')
@section('content')

<div class="site-content section-block">
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
                                <h2 class="page-title">Contact Us</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Contact Us</li>
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
            Start Contact Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="contact-block" class="contact-block">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242118.14199614953!2d73.72288117003453!3d18.524564859944654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1625366076861!5m2!1sen!2sin" width="1500" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="contact-form-area-outer">
                <div class="contact-form-area">
                    <div class="contact-form-area-inner">
                        <h2 class="contact-heading">get in touch</h2>
                        @if (session('success'))
<div class="done2 mrt-15">
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
                        <form method="POST" action="{{ url('/contact')}}" class="contact-form" id="reservation-forms">
                                @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="Full Name"  required/>
                                    </div>
                                </div><!-- /.col-12 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="Email Address" required />
                                    </div>
                                </div><!-- /.col-12 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <input name="subject" type="text" placeholder="Subject"  required/>
                                    </div>
                                </div><!-- /.col-12 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div><!-- /.col-12 -->

                                <div class="col-12 text-center">
                                    <div class="loading"></div>
                                    <input type="submit"  class="btn btn-default btn-primary btn-white btn-contact" value="Submit">
                                </div><!-- /.col-12 -->
                            </div><!-- /.row -->
                        </form><!-- /.contact-form -->

                    </div>
                </div><!-- /.contact-form-area -->
            </div>
        </div>
        <!--~~./ end contact block ~~-->
</div>
@endsection
