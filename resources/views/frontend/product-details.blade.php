@extends('frontend.layout.app')
@section('meta_keywords', $product->keywords)
@section('meta_extra_seo')
{!! $product->extra_seo !!}
@endsection
@section('meta_description', $product->summary)
@section('meta_tag',$product->seo_title)
@section('meta_extra_seo',$product->extra_seo)
@section('content')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Page Title Area
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="page-title-area bg-image bg-parallax2"
            style="background-image:url('/common/assets/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Bavari Misal</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{url('products')}}">Menu</a></li>
                                    <li class="breadcrumb-item active">Single Menu</li>
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
            Start Food Single Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="food-single-block style-two">
            <!--~~~~~ Start Single food Details ~~~~~-->
            <div class="single-food-details bg-white-smoke ptb-100">
                <div class="thumbnails-wrapper-area">
                    <ul class="thumbnails-wrapper">
                    @foreach($product->course_sliders as $slider)
                        <li class="thumbnails">
                            <a href="#"><img src="{{$slider->image}}" alt="img"></a>
                        </li>
                    @endforeach
                    </ul>
                </div>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="single-slider-item">
                                <ul class="food-detail-slide owl-carousel">
                                @foreach($product->course_sliders as $slider)
                                    <li class="item">
                                        <img src="{{$slider->image}}" alt="img">
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="single-food-content-area">
                                <div class="single-food-header">
                                    <h3 class="food-title">{{$product->course_title}}</h3>
                                    <div class="food-price">{{$product->price}}<sup>INR</sup></div>
                                </div>
                                <div class="food-item-info">
                                    <div class="food-price-and-status">
                                        <div class="food-rating">
                                            <div class="rating">
                                                <span class="yellow icon-star-full"></span>
                                                <span class="yellow icon-star-full"></span>
                                                <span class="yellow icon-star-full"></span>
                                                <span class="yellow icon-star-full"></span>
                                                <span class="icon-star-full"></span>
                                            </div>
                                            <a href="#">4 Reviews</a>
                                        </div>
                                        <div class="food-status">
                                        {{$product->availability == 0 ? "Out of Stock":"Available In Stocks"}}
                                        </div>
                                    </div>
                                    <form action="#">
                                        <div class="item-size">
                                            <h5 class="small-title">Select Size</h5>
                                            <div class="size-content">
                                                <input type="radio" name="size" id="s1" value="s" />
                                                <label for="s1"><span>s</span></label>
                                                <input type="radio" checked="checked" name="size" id="m1" value="m" />
                                                <label for="m1"><span>m</span></label>
                                                <input type="radio" name="size" id="l1" value="l" />
                                                <label for="l1"><span>l</span></label>
                                            </div>
                                        </div>


                                    </form>
                                    <a href="{{url('enquiry/'.$product->slug)}}" class="btn btn-sm btn-success">Order Now</a>
                                    <a target="_blank" href="https://api.whatsapp.com/send?name={{ $product->course_title }}&nbsp;    {{ 'amount:-' .$product->price }}" class="text-black" title="Send"><img src="https://png.pngtree.com/png-clipart/20190517/original/pngtree-whatsapp-social-media-icon-design-template-vector-png-image_3654811.jpg" alt="no image" width="50" height="40"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--~./ end single products details ~-->

            <!--~~~~~ Start Single food Feature ~~~~~-->
            <div class="single-food-feature-black ptb-100">
                <div class="container ml-b-35">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-food-feature">
                                <div class="icon">
                                    <span class="icon-food32"></span>
                                </div>
                                <div class="info">
                                    <h3 class="title">Free Shipping</h3>
                                    <p>Order over 1000 INR</p>
                                </div>
                            </div><!-- single-food-feature -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-food-feature">
                                <div class="icon">
                                    <span class="icon-gift3"></span>
                                </div>
                                <div class="info">
                                    <h3 class="title">Return Policy</h3>
                                    <p>For goods issues</p>
                                </div>
                            </div><!-- single-food-feature -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-food-feature">
                                <div class="icon">
                                    <span class="icon-wallet2"></span>
                                </div>
                                <div class="info">
                                    <h3 class="title">Secure Payments</h3>
                                    <p>100% Secure & Safe</p>
                                </div>
                            </div><!-- single-food-feature -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-food-feature">
                                <div class="icon">
                                    <span class="icon-customer-service"></span>
                                </div>
                                <div class="info">
                                    <h3 class="title">24/7 Support Help </h3>
                                    <p>Deticated Support</p>
                                </div>
                            </div><!-- single-food-feature -->
                        </div>
                    </div>
                </div>
            </div>
            <!--~./ end single food feature ~-->

            <!--~~~~~ Start Food Details Tab Area ~~~~~-->
            <div class="food-details-tab-area text-center ptb-100 bg-white-smoke">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="filter-tab-area">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#food_description"
                                            role="tab">Description</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#food_details" role="tab">Details</a>
                                    </li>
                                    <!-- <li>
                                        <a data-toggle="tab" href="#food_reviews" role="tab">Reviews</a>
                                    </li> -->
                                </ul>
                            </div>
                            <!--~./ end filter tab area ~-->

                            <div class="tab-content filter-tab-content">
                                <!--~~~~~ Start Tab Pane ~~~~~-->
                                <div class="tab-pane fade show active food-description ml-b-5" id="food_description"
                                    role="tabpanel">
                                    {!! $product->course_description !!}

                                </div>
                                <!--~./ end tab pane ~-->

                                <!--~~~~~ Start Tab Pane ~~~~~-->
                                <div class="tab-pane fade" id="food_details" role="tabpanel">
                                    <div class="food-desc">
                                    {!! $product->course_details !!}
                                        <!-- <span class="item-number"><b>Product Number :</b> #41121120</span>
                                        <span class="item-cat"><b>Category :</b> Breakfast</span>
                                        <span class="item-tag"><b>Tags :</b> </span> -->
                                    </div>
                                </div>
                                <!--~./ end tab pane ~-->

                                <!--~~~~~ Start Tab Pane ~~~~~-->
                                <!-- <div class="tab-pane fade" id="food_reviews" role="tabpanel">
                                    <div class="food-review-list">
                                        <div class="food-review">
                                            <div class="rating-riview">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-block">
                                                    <span class="review-comment">Very very good work and fast
                                                        delivery</span>
                                                </div>
                                            </div>
                                            <div class="review-user">
                                                <p class="review-user-name">Ram</p>
                                                <p class="review-meta">03<sup>rd</sup> july. 21, Delhi</p>
                                            </div>
                                        </div>

                                        <div class="food-review">
                                            <div class="rating-riview">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-block">
                                                    <span class="review-comment">Awesome taste</span>
                                                </div>
                                            </div>
                                            <div class="review-user">
                                                <p class="review-user-name">Shyam</p>
                                               <p class="review-meta">03<sup>rd</sup> july. 21, Pune</p>
                                            </div>
                                        </div>


                                        <div class="food-review">
                                            <div class="rating-riview">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-block">
                                                    <span class="review-comment">Nice breakfast</span>
                                                </div>
                                            </div>
                                            <div class="review-user">
                                                <p class="review-user-name">Mohan</p>
                                                <p class="review-meta">03<sup>rd</sup> july. 21, Mumbai</p>
                                            </div>
                                        </div>


                                    </div>
                                </div> -->
                                <!--~./ end tab pane ~-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--~./ end foods details tab area ~-->
        </div>
        <!--~~./ end food single block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Related Foodmenu Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="related-foodmenu-block style-two ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title section-default text-center">
                            <h2 class="title-main">May You Like Also <span>Products</span></h2><!-- /.title-main -->
                        </div><!-- /.section-title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="related-food-carousel owl-carousel">
                        @foreach($product->relatedClasses as $relatedClass)
                            <div class="food-grid-item grid-style-three">
                                <div class="food-thumb">
                                    <img src="{{ url($relatedClass->course->course_image) }}" alt="Food">
                                    <div class="overlay">
                                        <div class="food-cart-tools">
                                            <a href="{{url('products/'.$relatedClass->course->slug)}}" class="food-cart btn btn-default">View Details</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="food-info">
                                    <h3 class="food-title"><a href="{{url('products/'.$relatedClass->course->slug)}}">{{$relatedClass->course->course_title}}</a></h3>
                                    <div class="food-price">{{$relatedClass->course->price}}<sup>INR</sup></div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="carousel-nav-text nav-center pd-t-70">
                            <button class="btn-links btn-prev">
                                <span>prev</span>
                            </button>
                            <button class="btn-links btn-next">
                                <span>next</span>
                            </button>
                        </div>
                        <!--~./ end carousel nav text ~-->
                    </div>
                </div>
            </div>
        </div>
        <!--~~./ end related foodmenu block ~~-->
@endsection
